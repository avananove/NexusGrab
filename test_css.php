<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test CSS - NexusGrab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="container mt-4">
        <h1>Test CSS NexusGrab</h1>
        
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
                                    <tr>
                                        <td><i class="fas fa-file-archive text-warning"></i> archivio.zip</td>
                                        <td>Archivio</td>
                                        <td>15.7 MB</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Scarica</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Test Forms -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Test Form</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="testInput" class="form-label">Input di Test</label>
                                <input type="text" class="form-control" id="testInput" placeholder="Inserisci testo...">
                            </div>
                            <div class="mb-3">
                                <label for="testSelect" class="form-label">Select di Test</label>
                                <select class="form-select" id="testSelect">
                                    <option>Opzione 1</option>
                                    <option>Opzione 2</option>
                                    <option>Opzione 3</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Invia</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Test Alert</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i> Questo è un messaggio di successo!
                        </div>
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-triangle"></i> Questo è un messaggio di errore!
                        </div>
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-circle"></i> Questo è un messaggio di avvertimento!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Test Breadcrumb -->
        <div class="row mb-4">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Cartella</a></li>
                        <li class="breadcrumb-item active">Test</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 