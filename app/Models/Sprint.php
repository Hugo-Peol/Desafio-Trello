<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;

    public function projetos()
    {
        return $this->belongsTo(Projeto::class);
    }

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
}
