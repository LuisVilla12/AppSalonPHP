<?
    $db=mysqli_connect('localhost','root','qazqazqaz9','Appsalon');
    // Valida si se conecto
    if(!$db){
        echo "Error en la conexion";
    }else{
        echo "Conexion correcta";
    }
?>