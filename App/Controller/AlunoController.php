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

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $model = new Aluno();
            $model->Id = !empty($_POST['id']) ? $_POST['id'] : null;
            $model->Nome = $_POST['nome'];
            $model->RA = $_POST['ra'];
            $model->Curso = $_POST['curso'];
            $model->save();

            header('Location: /aluno');
        }else
        {
            $model = new Aluno();
            if(isset($_GET['id']))
            {
               $model = $model->getById( (int) $_GET['id'] ); 
            } 
             
            include VIEWS . '/Aluno/form_aluno.php';
        }

    }

    public static function listar() : void
    {
        //echo "Listagem de alunos";
        $aluno = new Aluno();
        $lista = $aluno->getAll();
        //var_dump($lista);
        include VIEWS . '/Aluno/lista_aluno.php';
    }

    public static function delete() : void
    {
        $aluno = new Aluno();

        $aluno->delete((int) $_GET['id']);

        header("Location: /aluno");
    }
}