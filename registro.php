<?php
if (empty($_POST["usuario"]) || empty($_POST["password"])) {
    echo "Error: Todos los campos son obligatorios.";
} else {
    echo "Usuario registrado correctamente.";
}
?>
