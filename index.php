<h1>Bienvenido a mi web con MVC</h1>

<?php
require_once 'controllers/UsuarioController.php';

$controlador = new UsuarioController();
// $controlador->mostrarTodos();

// $controlador->crear();


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $controlador->$action();
}