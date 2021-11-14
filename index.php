<?php

include('conex.php');

if (isset($_POST['form'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 ) 
    {
        $name = trim($_POST['name']); 
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $sexo = $_POST['sex'];
        $cantReg = 0;

        $consulta = "INSERT INTO `users`(Nombres, Apellidos, Correo, Clave, Sexo) VALUES ('$name', '$lastname', '$email', '$password', '$sexo')";
        
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) 
        {
            echo '<h2>El registro fue exitoso</h2>';
        } else {
            echo '<h2>A ocurrido un error</h2>';
        }
    } else
    {
        echo '<h2>No ha ingresado datos</h2>';
    }
}

?>