<!-- Footer -->
<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <!-- Informazioni NexusGrab -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-section">
                    <h5 class="footer-title">
                        <i class="fas fa-download text-primary"></i> NexusGrab
                    </h5>
                    <p class="footer-description">
                        Sistema di gestione file avanzato per la condivisione e il download di contenuti digitali. 
                        Organizza, cataloga e condividi i tuoi file in modo semplice e sicuro.
                    </p>
                                         <div class="footer-social">
                         <a href="https://x.com/webbydesign1" target="_blank" rel="nofollow" class="social-link"><i class="fab fa-twitter"></i></a>
                         <a href="https://www.facebook.com/trebastone.webby" target="_blank" rel="nofollow" class="social-link"><i class="fab fa-facebook"></i></a>
                         <a href="https://www.instagram.com/gunpress/" target="_blank" rel="nofollow" class="social-link"><i class="fab fa-instagram"></i></a>
                         <a href="https://github.com/avananove" target="_blank" rel="nofollow" class="social-link"><i class="fab fa-github"></i></a>
                     </div>
                </div>
            </div>
            
            <!-- Link Rapidi -->
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-section">
                    <h6 class="footer-subtitle">Link Rapidi</h6>
                    <ul class="footer-links">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="browse.php"><i class="fas fa-folder-open"></i> Esplora</a></li>
                        <li><a href="admin/"><i class="fas fa-cog"></i> Admin</a></li>
                                                 <li><a href="info.php"><i class="fas fa-info-circle"></i> Info</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Statistiche -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-section">
                    <h6 class="footer-subtitle">Statistiche</h6>
                    <div class="footer-stats">
                        <div class="stat-item">
                            <i class="fas fa-file text-primary"></i>
                            <span class="stat-number"><?php echo isset($allFiles) ? count($allFiles) : 0; ?></span>
                            <span class="stat-label">File Totali</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-folder text-warning"></i>
                            <span class="stat-number"><?php echo isset($folders) ? count($folders) : 0; ?></span>
                            <span class="stat-label">Cartelle</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-download text-success"></i>
                            <span class="stat-number">0</span>
                            <span class="stat-label">Download</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contatti -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-section">
                    <h6 class="footer-subtitle">Contatti</h6>
                    <div class="footer-contact">
                        <div class="contact-item">
                            <i class="fas fa-envelope text-primary"></i>
                            <span>mail@mail.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone text-success"></i>
                            <span>+39 0000000</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt text-danger"></i>
                            <span>Italia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Separatore -->
        <hr class="footer-divider">
        
        <!-- Copyright -->
        <div class="row footer-bottom">
            <div class="col-md-6">
                <p class="copyright">
                    &copy; <?php echo date('Y'); ?> NexusGrab. Tutti i diritti riservati. versione 1.6
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="footer-bottom-links">
                                             <a href="privacy-policy.php" class="footer-link">Privacy Policy</a>
                         <a href="termini-servizio.php" class="footer-link">Termini di Servizio</a>
                         <a href="cookie-policy.php" class="footer-link">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>

</footer> 
