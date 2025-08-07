<?php
require_once 'config/config.php';

echo "<h1>Test Configurazione Dinamica Directory Upload</h1>";

// Test 1: Verifica configurazione JSON
echo "<h2>1. Test Configurazione JSON</h2>";
$data = getFilesData();
echo "File JSON: " . print_r($data, true) . "<br>";

// Test 2: Verifica impostazioni
echo "<h2>2. Test Impostazioni</h2>";
$settings = getSettings();
echo "Impostazioni: " . print_r($settings, true) . "<br>";

// Test 3: Verifica directory upload
echo "<h2>3. Test Directory Upload</h2>";
$uploadDir = getUploadDir();
echo "Directory Upload: " . $uploadDir . "<br>";
echo "Esiste: " . (is_dir($uploadDir) ? 'SÌ' : 'NO') . "<br>";

// Test 4: Verifica contenuto directory
echo "<h2>4. Test Contenuto Directory</h2>";
if (is_dir($uploadDir)) {
    $items = scandir($uploadDir);
    echo "Elementi trovati: " . count($items) . "<br>";
    foreach ($items as $item) {
        if ($item != '.' && $item != '..') {
            $itemPath = $uploadDir . $item;
            $isDir = is_dir($itemPath);
            echo "- " . $item . " (" . ($isDir ? 'Cartella' : 'File') . ")<br>";
        }
    }
} else {
    echo "❌ Directory non esiste!<br>";
}

// Test 5: Test directory alternative
echo "<h2>5. Test Directory Alternative</h2>";
$testDirectories = ['uploads', 'files', 'downloads'];
foreach ($testDirectories as $testDir) {
    $fullPath = __DIR__ . '/' . $testDir;
    echo "Test directory '$testDir': " . (is_dir($fullPath) ? 'ESISTE' : 'NON ESISTE') . "<br>";
}

echo "<h2>Test Completato!</h2>";
echo "<p><strong>Per testare la modifica della directory:</strong></p>";
echo "<ol>";
echo "<li>Vai al pannello admin: <a href='admin/login.php'>Login Admin</a></li>";
echo "<li>Accedi con admin/admin123</li>";
echo "<li>Trova la sezione 'Configurazione Directory Upload'</li>";
echo "<li>Prova a cambiare il percorso in 'files' o 'downloads'</li>";
echo "</ol>";
?> 