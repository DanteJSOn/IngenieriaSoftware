<?php
session_start();
include '../conexion/conexion.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuario WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $usuario = $resultado->fetch_assoc();
    
    if (password_verify($password, $usuario['password'])) {
        $_SESSION['username'] = $usuario['username'];
        $_SESSION['rol'] = $usuario['rol'];
        
        header("Location: ../pagina/index.php");
        exit();
    } else {
        echo "❌ Contraseña incorrecta.";
    }
} else {
    echo "❌ Usuario no encontrado.";
}
?>
