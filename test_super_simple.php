<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Super Semplice - NexusGrab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container mt-4">
        <h1>Test Super Semplice</h1>
        
        <!-- Test Cards -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fas fa-folder text-warning"></i> Test Card</h5>
                    </div>
                    <div class="card-body">
                        <p>Questa è una card di test per verificare gli stili.</p>
                        <button class="btn btn-primary">Pulsante Primario</button>
                        <button class="btn btn-warning">Pulsante Warning</button>
                        <button class="btn btn-danger">Pulsante Danger</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fas fa-file text-primary"></i> Test File</h5>
                    </div>
                    <div class="card-body">
                        <p>Test per i file e le icone.</p>
                        <span class="badge bg-secondary">5 Download</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fas fa-cog text-info"></i> Test Config</h5>
                    </div>
                    <div class="card-body">
                        <p>Test per le configurazioni.</p>
                        <button class="btn btn-success">Pulsante Success</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Test PHP semplice -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Test PHP Semplice</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        try {
                            require_once 'config/config.php';
                            echo '<p><strong>✅ Config caricato correttamente</strong></p>';
                            echo '<p>UPLOAD_DIR: ' . UPLOAD_DIR . '</p>';
                            
                            if (is_dir(UPLOAD_DIR)) {
                                echo '<p><strong>✅ Directory upload esiste</strong></p>';
                                
                                $folders = scandir(UPLOAD_DIR);
                                echo '<p><strong>✅ Scandir completato</strong></p>';
                                echo '<p>Numero elementi: ' . count($folders) . '</p>';
                                
                                echo '<ul>';
                                foreach ($folders as $folder) {
                                    if ($folder != '.' && $folder != '..') {
                                        $full_path = UPLOAD_DIR . $folder;
                                        $is_dir = is_dir($full_path);
                                        echo '<li>' . htmlspecialchars($folder) . ' - ' . ($is_dir ? 'Cartella' : 'File') . '</li>';
                                    }
                                }
                                echo '</ul>';
                            } else {
                                echo '<p><strong>❌ Directory upload non esiste</strong></p>';
                            }
                        } catch (Exception $e) {
                            echo '<p><strong>❌ Errore PHP:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 