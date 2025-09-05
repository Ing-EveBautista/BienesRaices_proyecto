<?php
function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud_');

    if (!$db) {
        echo "error no se pudo conectar";
        exit;
    }

    return $db;
}
