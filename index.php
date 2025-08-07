<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusGrab - File Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container mt-4">
        <!-- Cartelle principali -->
        <div class="row mb-4">
            <div class="col-12">
                <h2>Cartelle Principali</h2>
                <div class="row">
                    <?php
                    require_once 'config/config.php';
                    $folders = scandir(UPLOAD_DIR);
                    foreach ($folders as $folder) {
                        if ($folder != '.' && $folder != '..' && is_dir(UPLOAD_DIR . $folder)) {
                            echo '<div class="col-md-3 mb-3">';
                            echo '<div class="card h-100">';
                            echo '<div class="card-body text-center">';
                            echo '<i class="fas fa-folder fa-3x text-warning mb-3"></i>';
                            echo '<h5 class="card-title">' . htmlspecialchars($folder) . '</h5>';
                            echo '<a href="browse.php?path=' . urlencode($folder) . '" class="btn btn-primary">Apri</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <h2>Tutti i File</h2>
                <!-- Filtri e ricerca -->
                <div class="row mb-3">
                    <div class="col-md-4 mb-2">
                        <input type="text" id="searchInput" class="form-control" placeholder="Cerca per nome...">
                    </div>
                    <div class="col-md-2 mb-2">
                        <button id="searchBtn" class="btn btn-primary w-100">Cerca</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="filesTable">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Percorso</th>
                                       <th>.</th> 
                                        <th>Dimensione</th>
                                        <th>Data</th>
                                        <th>Download</th>
                                        <th>Scarica</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Funzione ricorsiva per trovare tutti i file
                                    function getAllFiles($dir, $base = '') {
                                        $result = [];
                                        try {
                                            $items = scandir($dir);
                                            foreach ($items as $item) {
                                                if ($item != '.' && $item != '..') {
                                                    $fullPath = $dir . '/' . $item;
                                                    $relativePath = ltrim($base . '/' . $item, '/');
                                                    if (is_dir($fullPath)) {
                                                        $result = array_merge($result, getAllFiles($fullPath, $base . '/' . $item));
                                                    } else {
                                                        if (file_exists($fullPath) && is_readable($fullPath)) {
                                                            $result[] = [
                                                                'filename' => $item,
                                                                'relative' => $relativePath,
                                                                'size' => filesize($fullPath),
                                                                'date' => filemtime($fullPath)
                                                            ];
                                                        }
                                                    }
                                                }
                                            }
                                        } catch (Exception $e) {
                                            // Log error but continue
                                            error_log("Error in getAllFiles: " . $e->getMessage());
                                        }
                                        return $result;
                                    }
                                    
                                    try {
                                        $allFiles = getAllFiles(UPLOAD_DIR);
                                    } catch (Exception $e) {
                                        $allFiles = [];
                                        error_log("Error getting files: " . $e->getMessage());
                                    }
                                    // Per ogni file, cerca la categoria e i download dal JSON
                                    try {
                                        $data = getFilesData();
                                        $fileData = [];
                                        foreach ($data['files'] as $f) {
                                            $fileData[$f['filename']] = [
                                                'category' => $f['category'] ?? '',
                                                'downloads' => $f['downloads'] ?? 0
                                            ];
                                        }
                                    } catch (Exception $e) {
                                        $fileData = [];
                                        error_log("Error getting file data: " . $e->getMessage());
                                    }
                                    
                                    foreach ($allFiles as $file) {
                                        try {
                                            echo '<tr>';
                                            // Icona in base all'estensione
                                            $ext = strtolower(pathinfo($file['filename'], PATHINFO_EXTENSION));
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
                                            echo '<td>' . $icon . ' ' . htmlspecialchars($file['filename']) . '</td>';
                                            echo '<td>' . htmlspecialchars(dirname($file['relative'])) . '</td>';
                                            $fileInfo = $fileData[$file['relative']] ?? ['category' => '', 'downloads' => 0];
                                            echo '<td>' . htmlspecialchars($fileInfo['category']) . '</td>';
                                            echo '<td>' . formatFileSize($file['size']) . '</td>';
                                            echo '<td>' . date('d/m/Y H:i', $file['date']) . '</td>';
                                            echo '<td><span class="badge bg-secondary">' . $fileInfo['downloads'] . '</span></td>';
                                            echo '<td><a href="download.php?file=' . urlencode($file['relative']) . '" class="btn btn-sm btn-primary">Scarica</a></td>';
                                            echo '</tr>';
                                        } catch (Exception $e) {
                                            error_log("Error processing file: " . $e->getMessage());
                                            continue;
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
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const searchBtn = document.getElementById('searchBtn');
        const table = document.getElementById('filesTable');
        const rows = table.querySelectorAll('tbody tr');

        function filterTable() {
            const search = searchInput.value.toLowerCase();
            rows.forEach(row => {
                const name = row.cells[0].textContent.toLowerCase();
                let show = true;
                if (search && !name.includes(search)) show = false;
                row.style.display = show ? '' : 'none';
            });
        }
        searchBtn.addEventListener('click', function(e) {
            e.preventDefault();
            filterTable();
        });
    });
    </script>
</body>
</html> 