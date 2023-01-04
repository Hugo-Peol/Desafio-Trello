<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;

    public function projetos()
    {
        return $this->belongsToMany(Projeto::class, 'projetos_tem_sprints');
    }

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
}
