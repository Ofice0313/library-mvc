<?php

namespace App\Controller;
use App\Model\Aluno;

class AlunoController
{

    public static function index(){
        echo "Página incial dos alunos";
    }
    public static function cadastrar()
    {
        echo "Página de cadastro de alunos";
    }

    public static function listar()
    {
        echo "Listagem de alunos";
        $aluno = new Aluno();
        $aluno->getAll();
    }
}