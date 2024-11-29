<?php

//On définis ici un autoloader

spl_autoload_register(function ($class) {
    $prefix = 'lib\\';  // Le namespace principal
    $base_dir = '/var/www/SLCVED-beta/lib/';  // Répertoire où se trouvent les classes

    // Vérifier si la classe appartient à notre namespace
    if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
        return;
    }

    // Obtenez le nom de la classe relative à notre namespace
    $relative_class = substr($class, strlen($prefix));

    // Créez le chemin du fichier
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Si le fichier existe, l'inclure
    if (file_exists($file)) {
        require_once $file;
    }
});