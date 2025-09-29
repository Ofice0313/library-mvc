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
        //echo "Página de cadastro de alunos";
        $model = new Aluno();
        $model->id = 6;
        $model->nome = "Caleb";
        $model->ra = "123456";
        $model->curso = "Sistemas de Informação";
        $model->save();
    }

    public static function listar()
    {
        echo "Listagem de alunos";
        $aluno = new Aluno();
        $aluno->getAll();
    }
}