<?php
include("conn.php");
if ($conn){
    $nombre_completo = $_POST['nombre_completo']; 
    $edad = $_POST['edad'];  
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $nombreArchivo = $_FILES['archivo']['name'];
    $ruta = "images/";
    $nombre = trim($nombreArchivo);
    $nombre = mb_ereg_replace(" ","",$nombre);
    $upload = $ruta . $nombre;

    move_uploaded_file($_FILES['archivo']['tmp_name'], $upload);

    $sql = "INSERT INTO usuario(id, nombre_completo, edad, dni,     email, archivo) VALUES (NULL,'$nombre_completo','$edad','$dni', '$email','$upload')";

    mysqli_query($conn,$sql);

    echo $upload;

}else{

}
?>