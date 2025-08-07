<?php
require_once 'config/config.php';

echo "<h1>Test Download File</h1>";

// Test 1: Verifica directory upload
echo "<h2>1. Test Directory Upload</h2>";
echo "UPLOAD_DIR: " . UPLOAD_DIR . "<br>";
echo "Directory esiste: " . (is_dir(UPLOAD_DIR) ? 'SÌ' : 'NO') . "<br>";

// Test 2: Lista file disponibili
echo "<h2>2. File Disponibili</h2>";
$files = scandir(UPLOAD_DIR);
foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        $full_path = UPLOAD_DIR . $file;
        if (is_file($full_path)) {
            echo "- File: " . $file . " (" . formatFileSize(filesize($full_path)) . ")<br>";
        } elseif (is_dir($full_path)) {
            echo "- Cartella: " . $file . "<br>";
            // Lista file nelle sottocartelle
            $sub_files = scandir($full_path);
            foreach ($sub_files as $sub_file) {
                if ($sub_file != '.' && $sub_file != '..' && is_file($full_path . '/' . $sub_file)) {
                    echo "  └─ " . $sub_file . " (" . formatFileSize(filesize($full_path . '/' . $sub_file)) . ")<br>";
                }
            }
        }
    }
}

// Test 3: Test percorsi di download
echo "<h2>3. Test Percorsi Download</h2>";
$test_files = [
    '1qwe',
    'prova/Screenshot 2025-05-20 115216.png',
    'prova/20220422_160729.jpg'
];

foreach ($test_files as $test_file) {
    $full_path = UPLOAD_DIR . $test_file;
    echo "Test file: " . $test_file . "<br>";
    echo "- Percorso completo: " . $full_path . "<br>";
    echo "- Esiste: " . (file_exists($full_path) ? 'SÌ' : 'NO') . "<br>";
    echo "- È file: " . (is_file($full_path) ? 'SÌ' : 'NO') . "<br>";
    if (file_exists($full_path) && is_file($full_path)) {
        echo "- Dimensione: " . formatFileSize(filesize($full_path)) . "<br>";
        echo "- Link download: <a href='download.php?file=" . urlencode($test_file) . "'>Scarica</a><br>";
    }
    echo "<br>";
}

// Test 4: Test URL encoding
echo "<h2>4. Test URL Encoding</h2>";
$test_path = 'prova/Screenshot 2025-05-20 115216.png';
echo "Percorso originale: " . $test_path . "<br>";
echo "URL encoded: " . urlencode($test_path) . "<br>";
echo "URL decoded: " . urldecode(urlencode($test_path)) . "<br>";

echo "<h2>Test Completato!</h2>";
echo "<p><strong>Se tutto funziona:</strong></p>";
echo "<ol>";
echo "<li>I file dovrebbero essere scaricabili correttamente</li>";
echo "<li>I contatori di download dovrebbero incrementare</li>";
echo "<li>I file non dovrebbero essere vuoti</li>";
echo "</ol>";
?> 