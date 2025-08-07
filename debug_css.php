<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debug CSS - NexusGrab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        .debug-panel {
            position: fixed;
            top: 10px;
            right: 10px;
            background: rgba(0,0,0,0.8);
            color: white;
            padding: 15px;
            border-radius: 5px;
            font-family: monospace;
            font-size: 12px;
            z-index: 9999;
            max-width: 300px;
        }
        .css-test {
            background: var(--primary-color);
            color: white;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="debug-panel">
        <strong>Debug CSS</strong><br>
        - Bootstrap: <span id="bootstrap-status">Caricamento...</span><br>
        - FontAwesome: <span id="fontawesome-status">Caricamento...</span><br>
        - Custom CSS: <span id="custom-status">Caricamento...</span><br>
        - CSS Variables: <span id="variables-status">Caricamento...</span><br>
        <hr>
        <button onclick="testCSS()">Test CSS</button>
    </div>
    
    <div class="container mt-4">
        <h1>Debug CSS Homepage</h1>
        
        <div class="css-test">
            Test CSS Variables - Se vedi questo con sfondo blu scuro, il CSS funziona
        </div>
        
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
        
        <!-- Test Table -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Test Tabella</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Tipo</th>
                                        <th>Dimensione</th>
                                        <th>Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="fas fa-file-image text-success"></i> immagine.jpg</td>
                                        <td>Immagine</td>
                                        <td>2.5 MB</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Scarica</button>
                                            <button class="btn btn-sm btn-warning">Modifica</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-file-pdf text-danger"></i> documento.pdf</td>
                                        <td>PDF</td>
                                        <td>1.2 MB</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Scarica</button>
                                            <button class="btn btn-sm btn-danger">Elimina</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Test Bootstrap
        if (typeof bootstrap !== 'undefined') {
            document.getElementById('bootstrap-status').textContent = '✅ Caricato';
            document.getElementById('bootstrap-status').style.color = 'green';
        } else {
            document.getElementById('bootstrap-status').textContent = '❌ Non caricato';
            document.getElementById('bootstrap-status').style.color = 'red';
        }
        
        // Test FontAwesome
        if (document.querySelector('.fas')) {
            document.getElementById('fontawesome-status').textContent = '✅ Caricato';
            document.getElementById('fontawesome-status').style.color = 'green';
        } else {
            document.getElementById('fontawesome-status').textContent = '❌ Non caricato';
            document.getElementById('fontawesome-status').style.color = 'red';
        }
        
        // Test Custom CSS
        const testElement = document.querySelector('.css-test');
        if (testElement && getComputedStyle(testElement).backgroundColor !== 'rgba(0, 0, 0, 0)') {
            document.getElementById('custom-status').textContent = '✅ Caricato';
            document.getElementById('custom-status').style.color = 'green';
        } else {
            document.getElementById('custom-status').textContent = '❌ Non caricato';
            document.getElementById('custom-status').style.color = 'red';
        }
        
        // Test CSS Variables
        if (getComputedStyle(document.documentElement).getPropertyValue('--primary-color')) {
            document.getElementById('variables-status').textContent = '✅ Funzionanti';
            document.getElementById('variables-status').style.color = 'green';
        } else {
            document.getElementById('variables-status').textContent = '❌ Non funzionanti';
            document.getElementById('variables-status').style.color = 'red';
        }
    });
    
    function testCSS() {
        const styles = getComputedStyle(document.documentElement);
        console.log('CSS Variables:');
        console.log('--primary-color:', styles.getPropertyValue('--primary-color'));
        console.log('--secondary-color:', styles.getPropertyValue('--secondary-color'));
        console.log('--warning-color:', styles.getPropertyValue('--warning-color'));
        
        const cards = document.querySelectorAll('.card');
        console.log('Cards found:', cards.length);
        cards.forEach((card, index) => {
            const style = getComputedStyle(card);
            console.log(`Card ${index + 1}:`, {
                backgroundColor: style.backgroundColor,
                boxShadow: style.boxShadow,
                borderRadius: style.borderRadius
            });
        });
        
        alert('Controlla la console per i dettagli del test CSS');
    }
    </script>
</body>
</html> 