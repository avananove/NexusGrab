<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - NexusGrab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="container mt-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Info</li>
            </ol>
        </nav>
        
        <!-- Titolo Pagina -->
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="text-center mb-4">
                    <i class="fas fa-info-circle text-primary"></i> Informazioni su NexusGrab
                </h1>
            </div>
        </div>
        
        <!-- Sezione Informazioni Principali -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-download text-primary"></i> Cos'è NexusGrab?</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            NexusGrab è un sistema avanzato di gestione file progettato per la condivisione e il download di contenuti digitali in modo semplice, sicuro e organizzato.
                        </p>
                        <p>
                            Il sistema permette di organizzare i file in cartelle, catalogarli con categorie personalizzate e tenere traccia dei download. 
                            Ideale per aziende, sviluppatori e chiunque abbia bisogno di condividere file in modo professionale.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Caratteristiche -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="text-center mb-4">Caratteristiche Principali</h2>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-folder-open fa-3x text-warning mb-3"></i>
                        <h5 class="card-title">Gestione Cartelle</h5>
                        <p class="card-text">
                            Organizza i tuoi file in cartelle e sottocartelle per una navigazione intuitiva e ordinata.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-search fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Ricerca Avanzata</h5>
                        <p class="card-text">
                            Trova rapidamente i file che ti servono con il sistema di ricerca integrato.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-line fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Statistiche Download</h5>
                        <p class="card-text">
                            Monitora i download dei tuoi file con statistiche dettagliate e aggiornate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tecnologie Utilizzate -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-code text-info"></i> Tecnologie Utilizzate</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Backend</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fab fa-php text-primary"></i> PHP 7.4+</li>
                                    <li><i class="fas fa-database text-warning"></i> JSON per il database</li>
                                    <li><i class="fas fa-server text-info"></i> Apache/Nginx</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Frontend</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fab fa-html5 text-danger"></i> HTML5</li>
                                    <li><i class="fab fa-css3-alt text-primary"></i> CSS3</li>
                                    <li><i class="fab fa-js text-warning"></i> JavaScript</li>
                                    <li><i class="fab fa-bootstrap text-info"></i> Bootstrap 5</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contatti -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-envelope text-primary"></i> Contattaci</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Informazioni di Contatto</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-envelope text-primary"></i> Email: info@nexusgrab.com</li>
                                    <li><i class="fas fa-phone text-success"></i> Telefono: +39 123 456 7890</li>
                                    <li><i class="fas fa-map-marker-alt text-danger"></i> Località: Italia</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Social Media</h5>
                                <div class="d-flex gap-3">
                                    <a href="https://x.com/webbydesign1" target="_blank" rel="nofollow" class="btn btn-outline-primary">
                                        <i class="fab fa-twitter"></i> X (Twitter)
                                    </a>
                                    <a href="https://www.facebook.com/trebastone.webby" target="_blank" rel="nofollow" class="btn btn-outline-primary">
                                        <i class="fab fa-facebook"></i> Facebook
                                    </a>
                                    <a href="https://www.instagram.com/gunpress/" target="_blank" rel="nofollow" class="btn btn-outline-primary">
                                        <i class="fab fa-instagram"></i> Instagram
                                    </a>
                                    <a href="https://github.com/avananove" target="_blank" rel="nofollow" class="btn btn-outline-primary">
                                        <i class="fab fa-github"></i> GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 