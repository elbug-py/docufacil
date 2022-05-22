<?php
    $con = mysqli_connect('localhost', 'root');

    if($con) {
        echo "Connection Successful";
    }
    else {
        echo "ERROR";
    }

    mysqli_select_db($con, 'docufacil');

    $name = $_POST['name'];
    $lname = $_POST['Lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $key = $_POST['key'];

    $query = "INSERT INTO usuarios (claveU, nombre, apellido, email, contraseña) VALUES ('$key','$name','$lname','$email','$password')";

    mysqli_query($con, $query);
    header('location:index.php#contacto');
    
?>