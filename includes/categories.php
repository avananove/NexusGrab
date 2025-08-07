<?php
require_once 'config/config.php';

$data = getFilesData();
$categories = [];

// Conta i file per categoria
foreach ($data['files'] as $file) {
    $category = $file['category'] ?? '';
    if ($category !== '') {
        if (!isset($categories[$category])) {
            $categories[$category] = 0;
        }
        $categories[$category]++;
    }
}

// Ordina le categorie per numero di file
arsort($categories);

if (!empty($categories)) {
    echo '<div class="list-group">';
    foreach ($categories as $category => $count) {
        echo '<a href="browse.php?category=' . urlencode($category) . '" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">';
        echo htmlspecialchars($category);
        echo '<span class="badge bg-primary rounded-pill">' . $count . '</span>';
        echo '</a>';
    }
    echo '</div>';
}
// Se non ci sono categorie, non stampo nulla
?> 