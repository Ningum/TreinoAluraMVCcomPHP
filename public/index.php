<?php

switch ($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        require 'listar-cursos.php';
        break;
    case '/novo-curso':
        require 'formulario-novo-curso.php';
        break;
    default:
        require 'pagina-nao-encontrada.php';
        break;
}
