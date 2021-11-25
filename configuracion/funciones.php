<?php
function obtenerEmpleados(){
    //incliye base de datos
    require 'database.php';
    $db=conectarDB();
    //SQL
    $query="SELECT * FROM employees;";
    //consulta
    $consulta=mysqli_query($db,$query);

    // Almacena los numeros valores
    $empleados=[];
    // Contador
    $i=0;
    // Leer los resultados
    while($row=mysqli_fetch_assoc($consulta)){
        $empleados[$i]["employee_id"]=$row["employee_id"];
        $empleados[$i]["first_name"]=$row["first_name"];
        $empleados[$i]["last_name"]=$row["last_name"];
        $empleados[$i]["email"]=$row["email"];
        $empleados[$i]["phone_number"]=$row["phone_number"];
        $empleados[$i]["hire_date"]=$row["hire_date"];
        $empleados[$i]["job_id"]=$row["job_id"];
        $empleados[$i]["salary"]=$row["salary"];
        $empleados[$i]["commission_pct"]=$row["commission_pct"];
        $empleados[$i]["manager_id"]=$row["manager_id"];
        $empleados[$i]["department_id"]=$row["department_id"];

        $i++;
    }
        
}

obtenerEmpleados();
