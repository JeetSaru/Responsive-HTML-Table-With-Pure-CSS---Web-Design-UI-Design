<?php
include("conn.php");

$sql = "SELECT id,nombre_completo,edad,dni,email,archivo FROM usuario";

$resultado = mysqli_query($conn,$sql);
$datos = mysqli_fetch_all($resultado,MYSQLI_ASSOC);

if(!empty($resultado)){
    echo json_encode($datos);
}else{
    echo json_encode([]);
};

$conn->close();
?>