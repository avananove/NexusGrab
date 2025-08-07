<?php
session_start();
require_once '../config/config.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

// Ottieni tutte le cartelle di primo livello in uploads come categorie
$categoryFolders = [];
$uploadDir = UPLOAD_DIR;
$folders = scandir($uploadDir);
foreach ($folders as $folder) {
    if ($folder != '.' && $folder != '..' && is_dir($uploadDir . $folder)) {
        $categoryFolders[] = $folder;
    }
}

// Ottieni il percorso corrente
$current_path = isset($_GET['path']) ? $_GET['path'] : '';
$full_path = UPLOAD_DIR . $current_path;

// Verifica che il percorso sia valido
if (!file_exists($full_path) || !is_dir($full_path)) {
    $full_path = UPLOAD_DIR;
    $current_path = '';
}

// Gestione della navigazione
$breadcrumbs = [];
if ($current_path) {
    $parts = explode('/', trim($current_path, '/'));
    $current = '';
    foreach ($parts as $part) {
        $current .= '/' . $part;
        $breadcrumbs[] = [
            'name' => $part,
            'path' => $current
        ];
    }
}

// Funzione per ottenere tutte le cartelle ricorsivamente
function getAllFolders($dir, $base_path = '') {
    $folders = [];
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item != '.' && $item != '..' && is_dir($dir . '/' . $item)) {
            $current_path = $base_path . '/' . $item;
            $folders[] = $current_path;
            $folders = array_merge($folders, getAllFolders($dir . '/' . $item, $current_path));
        }
    }
    return $folders;
}

// Gestione delle azioni
if (isset($_POST['action'])) {
    $data = getFilesData();
    
    switch ($_POST['action']) {
        case 'create_folder':
            $folder_name = $_POST['folder_name'];
            $parent_folder = isset($_POST['parent_folder']) ? $_POST['parent_folder'] : '';
            $path = UPLOAD_DIR . $parent_folder . '/' . $folder_name;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            break;
            
        case 'rename':
            $old_name = $_POST['old_name'];
            $new_name = $_POST['new_name'];
            $path = UPLOAD_DIR . $current_path;
            rename($path . '/' . $old_name, $path . '/' . $new_name);
            
            // Aggiorna il nome del file nel JSON
            foreach ($data['files'] as &$file) {
                if ($file['filename'] === $current_path . '/' . $old_name) {
                    $file['filename'] = $current_path . '/' . $new_name;
                    break;
                }
            }
            saveFilesData($data);
            break;
            
        case 'delete':
            $file_name = $_POST['file_name'];
            $path = UPLOAD_DIR . $current_path . '/' . $file_name;
            if (is_dir($path)) {
                rmdir($path);
            } else {
                unlink($path);
                // Rimuovi il file dal JSON
                foreach ($data['files'] as $key => $file) {
                    if ($file['filename'] === $current_path . '/' . $file_name) {
                        unset($data['files'][$key]);
                        break;
                    }
                }
                $data['files'] = array_values($data['files']); // Reindex array
                saveFilesData($data);
            }
            break;
    }
}

// Gestione upload file
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $file_name = basename($file['name']);
    $category = $_POST['category'];
    $target_path = UPLOAD_DIR . $category . '/' . $file_name;

    if (move_uploaded_file($file['tmp_name'], $target_path)) {
        $data = getFilesData();
        $data['files'][] = [
            'filename' => $category . '/' . $file_name,
            'category' => $category,
            'filesize' => $file['size'],
            'upload_date' => date('Y-m-d H:i:s'),
            'downloads' => 0
        ];
        saveFilesData($data);
    }
}

// Ottieni tutte le cartelle disponibili
$all_folders = getAllFolders(UPLOAD_DIR);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pannello Admin - NexusGrab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    
    <div class="container mt-4">
        <h2>Pannello di Amministrazione</h2>
        
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <?php foreach ($breadcrumbs as $crumb): ?>
                    <li class="breadcrumb-item">
                        <a href="index.php?path=<?php echo urlencode($crumb['path']); ?>">
                            <?php echo htmlspecialchars($crumb['name']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ol>
        </nav>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Carica File</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="file" class="form-label">Seleziona File</label>
                                <input type="file" class="form-control" id="file" name="file" required>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Categoria (Cartella)</label>
                                <select class="form-select" id="category" name="category" required>
                                    <option value="">-- Seleziona una cartella --</option>
                                    <?php foreach ($categoryFolders as $cat): ?>
                                        <option value="<?php echo htmlspecialchars($cat); ?>"><?php echo htmlspecialchars($cat); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Carica</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Crea Cartella</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <input type="hidden" name="action" value="create_folder">
                            <div class="mb-3">
                                <label for="folder_name" class="form-label">Nome Cartella</label>
                                <input type="text" class="form-control" id="folder_name" name="folder_name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Crea</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Gestione File e Cartelle</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Tipo</th>
                                        <th>Dimensione</th>
                                        <th>Data Modifica</th>
                                        <th>Download</th>
                                        <th>Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $items = scandir($full_path);
                                    $data = getFilesData();
                                    $fileData = [];
                                    foreach ($data['files'] as $f) {
                                        $fileData[$f['filename']] = $f['downloads'] ?? 0;
                                    }
                                    foreach ($items as $item) {
                                        if ($item != '.' && $item != '..') {
                                            $item_path = $full_path . '/' . $item;
                                            $is_dir = is_dir($item_path);
                                            $size = $is_dir ? '-' : formatFileSize(filesize($item_path));
                                            $type = $is_dir ? 'Cartella' : 'File';
                                            $modified = date('d/m/Y H:i', filemtime($item_path));
                                            
                                            echo "<tr>";
                                            echo "<td>";
                                            if ($is_dir) {
                                                echo '<i class="fas fa-folder text-warning"></i> ';
                                                echo '<a href="index.php?path=' . urlencode($current_path . '/' . $item) . '">';
                                                echo htmlspecialchars($item);
                                                echo '</a>';
                                            } else {
                                                echo '<i class="fas fa-file text-primary"></i> ';
                                                echo htmlspecialchars($item);
                                            }
                                            echo "</td>";
                                            echo "<td>$type</td>";
                                            echo "<td>$size</td>";
                                            echo "<td>$modified</td>";
                                            echo "<td>";
                                            if (!$is_dir) {
                                                $relativePath = ($current_path ? $current_path . '/' : '') . $item;
                                                $downloads = $fileData[$relativePath] ?? 0;
                                                echo '<span class="badge bg-secondary">' . $downloads . '</span>';
                                            } else {
                                                echo '-';
                                            }
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<button class='btn btn-sm btn-warning' onclick='renameItem(\"$item\")'>Rinomina</button> ";
                                            echo "<button class='btn btn-sm btn-danger' onclick='deleteItem(\"$item\")'>Elimina</button>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function renameItem(oldName) {
        const newName = prompt('Inserisci il nuovo nome:', oldName);
        if (newName && newName !== oldName) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.innerHTML = `
                <input type="hidden" name="action" value="rename">
                <input type="hidden" name="old_name" value="${oldName}">
                <input type="hidden" name="new_name" value="${newName}">
            `;
            document.body.appendChild(form);
            form.submit();
        }
    }

    function deleteItem(name) {
        if (confirm('Sei sicuro di voler eliminare questo elemento?')) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.innerHTML = `
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="file_name" value="${name}">
            `;
            document.body.appendChild(form);
            form.submit();
        }
    }
    </script>
</body>
</html> 