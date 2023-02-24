<?php
namespace dwesgram\controlador;

use dwesgram\controlador\Controlador;
use dwesgram\modelo\UsuarioBd;

class BusquedaControlador extends Controlador {

    public function search(): array|string|null
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: index.php?controlador=usuario&accion=login');
            exit();
        }

        $this->vista = 'buscador/buscador';

        if (!$_POST) {
            $this->vista = 'buscador/buscador';
            return [];
        }
        $resultado =  UsuarioBd::getUsuariosByName(trim($_POST['search']));
        return $resultado;
    }
}