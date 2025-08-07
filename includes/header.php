<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="index.php">NexusGrab</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="browse.php">Esplora File</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php if(isset($_SESSION['admin'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/">Pannello Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/login.php">Login Admin</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav> 