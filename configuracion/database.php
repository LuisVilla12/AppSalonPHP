<?php
function conectarDB(){
    $db=mysqli_connect('localhost','root','qazqazqaz9','hr');
    // Valida si se conecto
    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }
    return $db;
} 