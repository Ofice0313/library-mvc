<?php

namespace App\Model;

use App\DAO\AlunoDAO;

final class Aluno
{
    public $Id, $Nome, $RA, $Curso;

    public function save() : Aluno //return instance of Aluno
    {
        return (new AlunoDAO())->save($this);
    }

    public function getById(int $id) : ?Aluno
    {
        return (new AlunoDAO())->selectById($id);
    }

    public function getAll() : array
    {
        return (new AlunoDAO())->select();
    }

    public function delete($id) : bool
    {
        return (new AlunoDAO())->delete($id);
    }
}