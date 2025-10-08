<?php
    define("SITE_NAME", "TaskFlow");
    $pageTitle = SITE_NAME . " - Página de Inicio";

    $userName = "Lolo Calvo"; // Tipo String
    $userAge = 35;             // Tipo Integer
    $isPremiumUser = true;     // Tipo Boolean
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <header>
        <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
    </header>

    <main>
        <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>
    </main>
</body>
</html>