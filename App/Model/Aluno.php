<?php

namespace App\Model;
class Aluno
{
    public $id, $nome, $ra, $curso;

    public function save() : Aluno //return instance of Aluno
    {
        return new Aluno();
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