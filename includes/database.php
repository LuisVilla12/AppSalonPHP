<?
    $db=mysqli_connect('localhost','root','qazqazqaz9','appsalon',3306);
    // Valida si se conecto
    if(!$db){
        echo "Error No se conecto";
    }else{
		echo "Exito";
	}
?>