<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termini di Servizio - NexusGrab</title>
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
                <li class="breadcrumb-item active" aria-current="page">Termini di Servizio</li>
            </ol>
        </nav>
        
        <!-- Titolo Pagina -->
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="text-center mb-4">
                    <i class="fas fa-file-contract text-primary"></i> Termini di Servizio
                </h1>
                <p class="text-center text-muted">Ultimo aggiornamento: <?php echo date('d/m/Y'); ?></p>
            </div>
        </div>
        
        <!-- Introduzione -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-info-circle text-primary"></i> Accettazione dei Termini</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            Utilizzando NexusGrab, accetti di essere vincolato da questi Termini di Servizio.
                        </p>
                        <p>
                            Se non accetti questi termini, ti preghiamo di non utilizzare il nostro servizio. 
                            Continuando a utilizzare NexusGrab, confermi di aver letto, compreso e accettato questi termini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Descrizione Servizio -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-download text-success"></i> Descrizione del Servizio</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            NexusGrab è una piattaforma di gestione e condivisione file che permette agli utenti di:
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Funzionalità Principali</h5>
                                <ul>
                                    <li>Caricare e organizzare file</li>
                                    <li>Creare cartelle e sottocartelle</li>
                                    <li>Condividere file tramite link</li>
                                    <li>Monitorare statistiche di download</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Caratteristiche Tecniche</h5>
                                <ul>
                                    <li>Interfaccia web responsive</li>
                                    <li>Sistema di ricerca integrato</li>
                                    <li>Gestione categorie personalizzate</li>
                                    <li>Pannello di amministrazione</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Responsabilità Utente -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-user-shield text-warning"></i> Responsabilità dell'Utente</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><i class="fas fa-check text-success"></i> Cosa Puoi Fare</h5>
                                <ul>
                                    <li>Caricare file legittimi e autorizzati</li>
                                    <li>Utilizzare il servizio per scopi legali</li>
                                    <li>Rispettare i diritti di proprietà intellettuale</li>
                                    <li>Mantenere la sicurezza del tuo account</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-times text-danger"></i> Cosa Non Puoi Fare</h5>
                                <ul>
                                    <li>Caricare contenuti illegali o dannosi</li>
                                    <li>Violare diritti d'autore o marchi</li>
                                    <li>Utilizzare il servizio per spam o phishing</li>
                                    <li>Tentare di compromettere la sicurezza</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Limitazioni di Responsabilità -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Limitazioni di Responsabilità</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="text-center">
                                    <i class="fas fa-server fa-2x text-primary mb-2"></i>
                                    <h6>Disponibilità del Servizio</h6>
                                    <p class="small">Il servizio è fornito "così com'è" senza garanzie di disponibilità continua</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="text-center">
                                    <i class="fas fa-shield-alt fa-2x text-success mb-2"></i>
                                    <h6>Sicurezza dei Dati</h6>
                                    <p class="small">Non garantiamo la sicurezza assoluta dei file caricati</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="text-center">
                                    <i class="fas fa-tools fa-2x text-info mb-2"></i>
                                    <h6>Manutenzione</h6>
                                    <p class="small">Il servizio può essere temporaneamente non disponibile per manutenzione</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Proprietà Intellettuale -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-copyright text-primary"></i> Proprietà Intellettuale</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>I Tuoi Contenuti</h5>
                                <p>
                                    Mantieni la proprietà dei file che carichi. 
                                    Non rivendichiamo alcun diritto sui tuoi contenuti.
                                </p>
                                <ul>
                                    <li>Sei responsabile del contenuto caricato</li>
                                    <li>Devi avere i diritti sui file condivisi</li>
                                    <li>Puoi rimuovere i tuoi file in qualsiasi momento</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Il Nostro Software</h5>
                                <p>
                                    NexusGrab e il suo software sono protetti da copyright e diritti di proprietà intellettuale.
                                </p>
                                <ul>
                                    <li>Non puoi copiare o modificare il software</li>
                                    <li>Non puoi ingegnerizzare inversamente il codice</li>
                                    <li>Non puoi utilizzare il servizio per scopi commerciali non autorizzati</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Terminazione -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-ban text-danger"></i> Terminazione del Servizio</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            Ci riserviamo il diritto di sospendere o terminare l'accesso al servizio in caso di:
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Violazioni dei Termini</h5>
                                <ul>
                                    <li>Utilizzo improprio del servizio</li>
                                    <li>Caricamento di contenuti illegali</li>
                                    <li>Violazione dei diritti di proprietà intellettuale</li>
                                    <li>Attività fraudolente o dannose</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Altre Cause</h5>
                                <ul>
                                    <li>Inattività prolungata dell'account</li>
                                    <li>Richieste delle autorità competenti</li>
                                    <li>Problemi tecnici o di sicurezza</li>
                                    <li>Chiusura del servizio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modifiche ai Termini -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-edit text-info"></i> Modifiche ai Termini</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            Ci riserviamo il diritto di modificare questi Termini di Servizio in qualsiasi momento. 
                            Le modifiche saranno effettive immediatamente dopo la pubblicazione.
                        </p>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i>
                            <strong>Notifica:</strong> Ti informeremo di eventuali modifiche sostanziali tramite email 
                            o tramite un avviso sul sito web.
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
                        <p>
                            Per qualsiasi domanda riguardo questi Termini di Servizio, contattaci a:
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Informazioni di Contatto</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-envelope text-primary"></i> Email: legal@nexusgrab.com</li>
                                    <li><i class="fas fa-phone text-success"></i> Telefono: +39 123 456 7890</li>
                                    <li><i class="fas fa-map-marker-alt text-danger"></i> Località: Italia</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Risposta</h5>
                                <p class="small">
                                    Risponderemo alle tue domande entro 5 giorni lavorativi. 
                                    Per questioni urgenti, utilizza il numero di telefono.
                                </p>
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