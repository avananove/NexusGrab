<?php
require_once 'config/config.php';

$data = getFilesData();
$files = $data['files'];

// Ordina i file per data di upload
usort($files, function($a, $b) {
    return strtotime($b['upload_date']) - strtotime($a['upload_date']);
});

// Mostra solo gli ultimi 10 file
$files = array_slice($files, 0, 10);

if (!empty($files)) {
    foreach ($files as $file) {
        echo '<div class="card mb-2">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . htmlspecialchars($file['filename']) . '</h5>';
        echo '<p class="card-text">';
        echo 'Categoria: ' . htmlspecialchars($file['category']) . '<br>';
        echo 'Caricato il: ' . date('d/m/Y H:i', strtotime($file['upload_date'])) . '<br>';
        echo 'Dimensione: ' . formatFileSize($file['filesize']);
        echo '</p>';
        echo '<a href="download.php?file=' . urlencode($file['filename']) . '" class="btn btn-primary">Scarica</a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<div class="alert alert-info">Nessun file caricato recentemente.</div>';
}

function formatFileSize($bytes) {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= pow(1024, $pow);
    return round($bytes, 2) . ' ' . $units[$pow];
}
?> 