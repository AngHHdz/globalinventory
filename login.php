<?php
// Cargar archivo de usuarios
$usuarios = file('usuarios.txt', FILE_IGNORE_NEW_LINES);

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Validar usuario
$autenticado = false;
foreach ($usuarios as $usuario) {
    list($usuario_txt, $password_txt) = explode(':', trim($usuario));
    if ($usuario_txt == $username && $password_txt == $password) {
        $autenticado = true;
        break;
    }
}

// Redireccionar según autenticación
if ($autenticado) {
    echo "Inicio de sesión exitoso. ¡Bienvenido, $username!";
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>
