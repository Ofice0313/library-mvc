<?php

namespace App\Model;

use App\DAO\AlunoDAO;

class Aluno
{
    public $id, $nome, $ra, $curso;

    public function save() : Aluno //return instance of Aluno
    {
        return (new AlunoDAO())->save($this);
    }

    public function getById(int $id) : ?Aluno
    {
        return new Aluno();
    }

    public function getAll() : array
    {
        return [];
    }

    public function delete($id) : bool
    {
        return false;
    }
}