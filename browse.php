<?php
require_once 'config/config.php';

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
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esplora File - NexusGrab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="container mt-4">
        <h2>Esplora File</h2>
        
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="browse.php">Home</a>
                </li>
                <?php foreach ($breadcrumbs as $crumb): ?>
                    <li class="breadcrumb-item">
                        <a href="browse.php?path=<?php echo urlencode($crumb['path']); ?>">
                            <?php echo htmlspecialchars($crumb['name']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ol>
        </nav>

        <!-- Lista file e cartelle -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
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
                                                echo '<a href="browse.php?path=' . urlencode($current_path . '/' . $item) . '">';
                                                echo htmlspecialchars($item);
                                                echo '</a>';
                                            } else {
                                                // Icona in base all'estensione
                                                $ext = strtolower(pathinfo($item, PATHINFO_EXTENSION));
                                                $icon = '<i class="fas fa-file text-primary"></i>';
                                                if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp'])) {
                                                    $icon = '<i class="fas fa-file-image text-success"></i>';
                                                } elseif ($ext === 'pdf') {
                                                    $icon = '<i class="fas fa-file-pdf text-danger"></i>';
                                                } elseif (in_array($ext, ['zip', 'rar', '7z', 'tar', 'gz'])) {
                                                    $icon = '<i class="fas fa-file-archive text-warning"></i>';
                                                } elseif (in_array($ext, ['exe', 'msi', 'apk', 'app', 'bat', 'sh'])) {
                                                    $icon = '<i class="fas fa-file-code text-secondary"></i>';
                                                } elseif (in_array($ext, ['doc', 'docx'])) {
                                                    $icon = '<i class="fas fa-file-word text-primary"></i>';
                                                } elseif (in_array($ext, ['xls', 'xlsx', 'csv'])) {
                                                    $icon = '<i class="fas fa-file-excel text-success"></i>';
                                                } elseif (in_array($ext, ['ppt', 'pptx'])) {
                                                    $icon = '<i class="fas fa-file-powerpoint text-warning"></i>';
                                                }
                                                echo $icon . ' ' . htmlspecialchars($item);
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
                                            if (!$is_dir) {
                                                echo '<a href="download.php?file=' . urlencode($current_path . '/' . $item) . '" class="btn btn-sm btn-primary">Scarica</a>';
                                            }
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
</body>
</html> 