# NexusGrab - File Manager

NexusGrab è un moderno file manager web sviluppato in PHP che permette di gestire e condividere file in modo semplice ed efficiente.

## Caratteristiche

- Interfaccia moderna e responsive
- Gestione file e cartelle
- Sistema di categorie per i file
- Pannello di amministrazione protetto
- Visualizzazione degli ultimi download
- Supporto multilingua (italiano)

## Requisiti

- PHP 7.4 o superiore
- MySQL 5.7 o superiore
- Server web (Apache/Nginx)
- Estensione PHP per MySQL
- Estensione PHP per file upload

## Installazione

1. Clona il repository nel tuo server web:
```bash
git clone https://github.com/tuousername/nexusgrab.git
```

2. Crea un database MySQL e importa la struttura:
```bash
mysql -u root -p < database.sql
```

3. Configura il database:
   - Apri `config/database.php`
   - Modifica le credenziali del database secondo la tua configurazione

4. Crea la cartella uploads e imposta i permessi:
```bash
mkdir uploads
chmod 777 uploads
```

5. Accedi al pannello di amministrazione:
   - URL: `http://tuodominio/admin/login.php`
   - Username: `admin`
   - Password: `admin123`

## Struttura delle Cartelle

```
nexusgrab/
├── admin/
│   ├── index.php
│   └── login.php
├── assets/
│   └── css/
│       └── style.css
├── config/
│   └── database.php
├── includes/
│   ├── header.php
│   ├── recent_downloads.php
│   └── categories.php
├── uploads/
├── index.php
├── database.sql
└── README.md
```

## Sicurezza

- Cambia immediatamente la password dell'amministratore dopo la prima installazione
- Mantieni aggiornato il sistema PHP
- Configura correttamente i permessi delle cartelle
- Utilizza HTTPS per la connessione sicura

## Licenza
per info progetto net-plus.it

Questo progetto è rilasciato sotto licenza MIT. Vedi il file LICENSE per maggiori dettagli. 
