<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

echo "<h2>Bienvenido, " . $_SESSION['username'] . "</h2>";
echo "<p>Rol: " . $_SESSION['rol'] . "</p>";
echo '<a href="logout.php">Cerrar sesión</a>';
?>
