<?php
// Test download senza output
ob_start();
require_once 'config/config.php';

// Simula un download
$test_file = 'prova/Screenshot 2025-05-20 115216.png';
$full_path = UPLOAD_DIR . $test_file;

echo "<h1>Debug Download</h1>";
echo "Test file: " . $test_file . "<br>";
echo "Full path: " . $full_path . "<br>";
echo "File exists: " . (file_exists($full_path) ? 'YES' : 'NO') . "<br>";
echo "Is file: " . (is_file($full_path) ? 'YES' : 'NO') . "<br>";
echo "File size: " . (file_exists($full_path) ? filesize($full_path) : 'N/A') . " bytes<br>";
echo "Readable: " . (file_exists($full_path) ? (is_readable($full_path) ? 'YES' : 'NO') : 'N/A') . "<br>";

// Test URL encoding
echo "<h2>URL Encoding Test</h2>";
echo "Original: " . $test_file . "<br>";
echo "Encoded: " . urlencode($test_file) . "<br>";
echo "Decoded: " . urldecode(urlencode($test_file)) . "<br>";

// Test percorso costruito
echo "<h2>Path Construction Test</h2>";
$decoded_file = urldecode($test_file);
$constructed_path = UPLOAD_DIR . $decoded_file;
echo "Decoded file: " . $decoded_file . "<br>";
echo "Constructed path: " . $constructed_path . "<br>";
echo "Path exists: " . (file_exists($constructed_path) ? 'YES' : 'NO') . "<br>";

// Test link di download
echo "<h2>Download Link Test</h2>";
echo "<a href='download.php?file=" . urlencode($test_file) . "'>Test Download</a><br>";

$output = ob_get_clean();
echo $output;
?> 