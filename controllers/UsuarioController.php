<?php

class UsuarioController {

    public function mostrarTodos()
    {
        require_once 'models/Usuario.php';

        $usuario = new Usuario();
        $usuarios = $usuario->conseguirTodos('usuarios');

        require_once 'views/usuario/mostrar_todos.php';
    }

    public function crear()
    {
        require_once 'views/usuario/crear.php';
    }
}