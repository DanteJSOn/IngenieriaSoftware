<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['rol'])) {
    header("Location: ../index.php");
    exit();
}

$rol = $_SESSION['rol'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Panel - <?php echo $rol; ?></title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }
        aside {
            width: 220px;
            background-color: #333;
            color: white;
            height: 100vh;
            padding-top: 20px;
        }
        aside h3 {
            text-align: center;
        }
        aside a {
            display: block;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
        }
        aside a:hover {
            background-color: #555;
        }
        main {
            padding: 20px;
            flex-grow: 1;
        }
    </style>
</head>
<body>
    <aside>
        <h3><?php echo $rol; ?></h3>
        <?php
        // Cargar el menú correspondiente
        if ($rol === "Administrador") {
            include "../menu/menu_admin.php";
        } elseif ($rol === "Tatuador") {
            include "../menu/menu_tatuador.php";
        } elseif ($rol === "Piercing") {
            include "../menu/menu_piercing.php";
        }
        ?>
        <a href="../login/logout.php">🔓 Cerrar sesión</a>
    </aside>

    <main>
        <h2>Bienvenido, <?php echo $_SESSION['username']; ?></h2>
        <p>Este es el panel principal para el rol: <strong><?php echo $rol; ?></strong></p>
    </main>
</body>
</html>
