<?php

namespace App\DAO;
use App\Model\Aluno;

class AlunoDAO extends DAO
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function save(Aluno $model) : Aluno
    {
        return ($model->id == null) ? $this->insert($model) : $this->update($model);
    }

    public function insert(Aluno $model) : Aluno
    {
        var_dump($model);
        return new Aluno();
    }

    public function update(Aluno $model) : Aluno
    {
        var_dump($model);
        return new Aluno();
    }

    public function selectById(int $id) : ?Aluno
    {
        return new Aluno();
    }

    public function select() : array
    {
        return [];
    }

    public function delete(int $id) : bool
    {
        return false;
    }
    
}