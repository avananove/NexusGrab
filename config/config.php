<?php
// Configurazione del sistema
define('UPLOAD_DIR', __DIR__ . '/../uploads/');
define('DATA_FILE', __DIR__ . '/../data/files.json');

// Assicurati che non ci sia output
// if (ob_get_level()) {
//     ob_clean();
// }

// Funzioni di utilità
function getFilesData() {
    if (!file_exists(DATA_FILE)) {
        return ['files' => [], 'categories' => []];
    }
    return json_decode(file_get_contents(DATA_FILE), true);
}

function saveFilesData($data) {
    file_put_contents(DATA_FILE, json_encode($data, JSON_PRETTY_PRINT));
}

function formatFileSize($bytes) {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= pow(1024, $pow);
    return round($bytes, 2) . ' ' . $units[$pow];
}

// Configurazione admin
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'); // password: admin123
?> 