<h1>Bienvenido a mi web con MVC</h1>

<?php
require_once 'controllers/UsuarioController.php';
if ($_GET['controller']) {
    $nombre_controller = $_GET['controller'].'Controller';
}else {
    echo "La página que buscas no existe";
    exit();
}
if (isset($nombre_controller) && class_exists($nombre_controller)) {
    $controlador = new $nombre_controller();
    if (isset($_GET['action']) && method_exists($controlador,$_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    }else {
        echo "La página que buscas no existe";
    }
}else {
    echo "La página que buscas no existe";
}
// $controlador = new UsuarioController();
// $controlador->mostrarTodos();

// $controlador->crear();

