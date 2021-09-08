<?php

class UsuarioController {

    public function mostrarTodos()
    {
        require_once 'models/Usuario.php';

        $usuario = new Usuario();
        $todos_los_usuarios = $usuario->conseguirTodos();

        require_once 'views/usuario/mostrar_todos.php';
    }

    public function crear()
    {
        require_once 'views/usuario/crear.php';
    }
}