<?php
// Assicurati che non ci sia output prima degli header
ob_start();
require_once 'config/config.php';

if (isset($_GET['file'])) {
    // Decodifica il percorso del file
    $file_path = urldecode($_GET['file']);
    
    // Costruisci il percorso completo
    $full_path = UPLOAD_DIR . $file_path;
    
    // Debug: log per verificare il percorso
    error_log("Download request - File: " . $file_path);
    error_log("Full path: " . $full_path);
    error_log("File exists: " . (file_exists($full_path) ? 'YES' : 'NO'));
    
    // Verifica che il file esista e sia un file (non una cartella)
    if (file_exists($full_path) && is_file($full_path)) {
        // Aggiorna il contatore dei download
        $data = getFilesData();
        $file_found = false;
        foreach ($data['files'] as &$file) {
            if ($file['filename'] === $file_path) {
                $file['downloads'] = isset($file['downloads']) ? $file['downloads'] + 1 : 1;
                $file_found = true;
                break;
            }
        }
        
        // Se il file non è nel JSON, aggiungilo
        if (!$file_found) {
            $data['files'][] = [
                'filename' => $file_path,
                'category' => dirname($file_path),
                'filesize' => filesize($full_path),
                'upload_date' => date('Y-m-d H:i:s'),
                'downloads' => 1
            ];
        }
        saveFilesData($data);
        
        // Ottieni il nome del file
        $file_name = basename($full_path);
        
        // Imposta gli header per il download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file_name . '"');
        header('Content-Length: ' . filesize($full_path));
        header('Cache-Control: no-cache, must-revalidate');
        header('Pragma: no-cache');
        header('Expires: 0');
        
        // Pulisci l'output buffer prima di inviare il file
        if (ob_get_level()) {
            ob_end_clean();
        }
        
        // Leggi e invia il file
        readfile($full_path);
        exit();
    } else {
        error_log("File not found: " . $full_path);
    }
}

// Se il file non esiste o non è valido, reindirizza alla home
header('Location: index.php');
exit(); 