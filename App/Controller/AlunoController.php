<?php

namespace App\Controller;
use App\Model\Aluno;

final class AlunoController
{

    public static function index(){
        echo "Página incial dos alunos";
    }
    public static function cadastrar() : void
    {
        //echo "Página de cadastro de alunos";
        $model = new Aluno();
        //$model->id = 6;
        $model->nome = "Caleb";
        $model->ra = "123456";
        $model->curso = "Sistemas de Informação";
        $model->save();
        echo "aluno inserido!";
    }

    public static function listar() : void
    {
        echo "Listagem de alunos";
        $aluno = new Aluno();
        $lista = $aluno->getAll();
        var_dump($lista);
    }
}