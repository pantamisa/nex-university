<?php

spl_autoload_register(function ($class) {
    // Reemplazar backslashes por el separador de directorios
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    // Añadir la extensión .php al final
    $file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';

    // Verificar si el archivo existe y requerirlo
    if (file_exists($file)) {
        require_once $file;
    } else {
        // Manejo de errores si el archivo no se encuentra
    }
});