<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Policy - NexusGrab</title>
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
                <li class="breadcrumb-item active" aria-current="page">Cookie Policy</li>
            </ol>
        </nav>
        
        <!-- Titolo Pagina -->
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="text-center mb-4">
                    <i class="fas fa-cookie-bite text-warning"></i> Cookie Policy
                </h1>
                <p class="text-center text-muted">Ultimo aggiornamento: <?php echo date('d/m/Y'); ?></p>
            </div>
        </div>
        
        <!-- Introduzione -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-info-circle text-primary"></i> Cosa sono i Cookie?</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            I cookie sono piccoli file di testo che vengono memorizzati sul tuo dispositivo quando visiti un sito web.
                        </p>
                        <p>
                            Questi file aiutano il sito a ricordare le tue preferenze e a migliorare la tua esperienza di navigazione. 
                            Su NexusGrab utilizziamo solo cookie tecnici essenziali per il funzionamento del servizio.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tipi di Cookie -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-list text-success"></i> Tipi di Cookie Utilizzati</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-header bg-primary text-white">
                                        <h5><i class="fas fa-shield-alt"></i> Cookie Tecnici Essenziali</h5>
                                    </div>
                                    <div class="card-body">
                                        <p><strong>Scopo:</strong> Necessari per il funzionamento del sito</p>
                                        <ul>
                                            <li>Mantenere la sessione di login</li>
                                            <li>Ricordare le preferenze di navigazione</li>
                                            <li>Garantire la sicurezza del sistema</li>
                                            <li>Migliorare le performance del sito</li>
                                        </ul>
                                        <p class="text-muted small">
                                            <i class="fas fa-info-circle"></i> 
                                            Questi cookie non possono essere disabilitati senza compromettere il funzionamento del sito.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-header bg-info text-white">
                                        <h5><i class="fas fa-chart-line"></i> Cookie di Performance</h5>
                                    </div>
                                    <div class="card-body">
                                        <p><strong>Scopo:</strong> Analizzare l'utilizzo del sito</p>
                                        <ul>
                                            <li>Monitorare le pagine più visitate</li>
                                            <li>Analizzare i tempi di caricamento</li>
                                            <li>Identificare problemi tecnici</li>
                                            <li>Migliorare l'esperienza utente</li>
                                        </ul>
                                        <p class="text-muted small">
                                            <i class="fas fa-info-circle"></i> 
                                            Questi cookie ci aiutano a migliorare il servizio.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Cookie Specifici -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-cogs text-warning"></i> Cookie Specifici di NexusGrab</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Nome Cookie</th>
                                        <th>Scopo</th>
                                        <th>Durata</th>
                                        <th>Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>PHPSESSID</code></td>
                                        <td>Mantenere la sessione di login</td>
                                        <td>Sessione</td>
                                        <td><span class="badge bg-primary">Tecnico</span></td>
                                    </tr>
                                    <tr>
                                        <td><code>nexusgrab_prefs</code></td>
                                        <td>Salvare le preferenze utente</td>
                                        <td>1 anno</td>
                                        <td><span class="badge bg-primary">Tecnico</span></td>
                                    </tr>
                                    <tr>
                                        <td><code>nexusgrab_lang</code></td>
                                        <td>Ricordare la lingua preferita</td>
                                        <td>1 anno</td>
                                        <td><span class="badge bg-primary">Tecnico</span></td>
                                    </tr>
                                    <tr>
                                        <td><code>nexusgrab_theme</code></td>
                                        <td>Salvare il tema preferito</td>
                                        <td>1 anno</td>
                                        <td><span class="badge bg-primary">Tecnico</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Gestione Cookie -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-sliders-h text-info"></i> Come Gestire i Cookie</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><i class="fas fa-browser text-primary"></i> Impostazioni del Browser</h5>
                                <p>
                                    Puoi controllare e gestire i cookie attraverso le impostazioni del tuo browser:
                                </p>
                                <ul>
                                    <li><strong>Chrome:</strong> Impostazioni > Privacy e sicurezza > Cookie</li>
                                    <li><strong>Firefox:</strong> Opzioni > Privacy e sicurezza > Cookie</li>
                                    <li><strong>Safari:</strong> Preferenze > Privacy > Cookie</li>
                                    <li><strong>Edge:</strong> Impostazioni > Cookie e autorizzazioni sito</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-exclamation-triangle text-warning"></i> Attenzione</h5>
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <strong>Importante:</strong> Disabilitare i cookie tecnici può compromettere il funzionamento del sito.
                                </div>
                                <p class="small">
                                    Ti consigliamo di mantenere abilitati almeno i cookie tecnici essenziali per una migliore esperienza di utilizzo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Cookie di Terze Parti -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-external-link-alt text-danger"></i> Cookie di Terze Parti</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i>
                            <strong>Informazione:</strong> NexusGrab non utilizza cookie di terze parti per il tracciamento o la pubblicità.
                        </div>
                        <p>
                            I servizi esterni che potrebbero impostare cookie sono:
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h6><i class="fab fa-google text-danger"></i> Google Fonts</h6>
                                <p class="small">
                                    Utilizziamo Google Fonts per i caratteri del sito. 
                                    Google potrebbe impostare cookie per statistiche di utilizzo.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6><i class="fab fa-bootstrap text-primary"></i> Bootstrap CDN</h6>
                                <p class="small">
                                    Utilizziamo Bootstrap CDN per i file CSS e JavaScript. 
                                    Non imposta cookie di tracciamento.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Diritti GDPR -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-gavel text-success"></i> I Tuoi Diritti GDPR</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            Ai sensi del GDPR (Regolamento Generale sulla Protezione dei Dati), hai i seguenti diritti:
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5><i class="fas fa-eye text-primary"></i> Diritto di Accesso</h5>
                                <p class="small">
                                    Puoi richiedere informazioni sui cookie che utilizziamo e sui dati che raccogliamo.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-eraser text-warning"></i> Diritto di Cancellazione</h5>
                                <p class="small">
                                    Puoi richiedere la cancellazione dei tuoi dati personali e dei cookie associati.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-ban text-danger"></i> Diritto di Opposizione</h5>
                                <p class="small">
                                    Puoi opporti al trattamento dei tuoi dati per finalità specifiche.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-download text-success"></i> Diritto di Portabilità</h5>
                                <p class="small">
                                    Puoi richiedere una copia dei tuoi dati in formato strutturato.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contatti Cookie -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-envelope text-primary"></i> Contattaci per i Cookie</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            Per qualsiasi domanda riguardo questa Cookie Policy o per esercitare i tuoi diritti GDPR, contattaci a:
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Informazioni di Contatto</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-envelope text-primary"></i> Email: privacy@nexusgrab.com</li>
                                    <li><i class="fas fa-phone text-success"></i> Telefono: +39 123 456 7890</li>
                                    <li><i class="fas fa-map-marker-alt text-danger"></i> Località: Italia</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Tempi di Risposta</h5>
                                <p class="small">
                                    Risponderemo alle tue richieste entro 30 giorni dalla ricezione. 
                                    Per richieste urgenti, utilizza il numero di telefono.
                                </p>
                                <div class="alert alert-success">
                                    <i class="fas fa-check-circle"></i>
                                    <strong>Gratuito:</strong> L'esercizio dei tuoi diritti GDPR è completamente gratuito.
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