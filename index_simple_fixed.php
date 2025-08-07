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
                    try {
                        require_once 'config/config.php';
                        
                        // Test semplice senza scandir
                        $test_folders = ['33', '@eaDir', 'Applicazioni', 'Guide', 'prova'];
                        
                        foreach ($test_folders as $folder) {
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
                    } catch (Exception $e) {
                        echo '<div class="col-12">';
                        echo '<div class="alert alert-danger">';
                        echo '<strong>Errore:</strong> ' . htmlspecialchars($e->getMessage());
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        
        <!-- Test semplice -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Test CSS Semplice</h5>
                    </div>
                    <div class="card-body">
                        <p>Se vedi questa card con ombreggiatura e bordi arrotondati, il CSS funziona.</p>
                        <button class="btn btn-primary">Pulsante Test</button>
                        <button class="btn btn-warning">Pulsante Warning</button>
                        <button class="btn btn-danger">Pulsante Danger</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 