<?php
    if ($_POST) {
        $varTodoOK = true;
        if (strlen($_POST["nombre"]) < 5) {
            $varTodoOK = false;
            $errNombre = " <- Ingresa un Nombre de más de 5 caracteres.";
        } else {
            unset($errNombre);
            $nombre = $_POST["nombre"];
        }

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $varTodoOK = false;
            $errEmail = " <- Ingresa un correo electrónico válido.";
        } else {
            unset($errEmail);
            $email = $_POST["email"];
        }
        if ($varTodoOK) {
            header("Location: registrado.php?nombre=" . $nombre);exit;
        }
    }
?>

<!DOCTYPE HTML>
<html>

<body>
    <form action="formulario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?=$nombre?>"><?=$errNombre?>
        <br>
        <label for="email">E-mail:</label>
        <input type="text" name="email" value="<?=$email?>"><?=$errEmail?>
        <br>
        <input type="submit">
    </form>
</body>

</html>