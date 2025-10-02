<?php

use App\Controller\{
    AlunoController,
    InitialController
};

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        InitialController::index();
    break;
    case '/aluno':
        AlunoController::listar();
    break;
    case '/aluno/cadastrar':
        AlunoController::cadastrar();
    break;
    case '/aluno/delete':
        AlunoController::delete();
    break;
}