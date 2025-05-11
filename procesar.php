<?php
$nombre = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .response-box {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-left: 5px solid #f57c00;
            border-radius: 8px;
            padding: 25px 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            max-width: 500px;
            text-align: left;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #f57c00;
        }

        p {
            font-size: 16px;
            margin: 8px 0;
        }

        .highlight {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="response-box">
        <h1>Datos Recibidos</h1>
        <?php if (!empty($nombre) && !empty($email)) : ?>
            <p>Hola, su mensaje ha sido recibido correctamente.</p>
            <p>Le mandamos el mensaje por aquí porque el envío por email está en mantenimiento.</p>
            <p>Nombre: <span class="highlight"><?= $nombre ?></span></p>
            <p>Correo: <span class="highlight"><?= $email ?></span></p>
        <?php else : ?>
            <p>No se recibieron datos.</p>
        <?php endif; ?>
    </div>
</body>
</html>
