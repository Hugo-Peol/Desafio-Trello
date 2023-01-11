<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sprint;

class Projeto extends Model
{

    protected $guarded = ['id'];

    public function sprints()
    {
        return $this->belongsToMany(Sprint::class, 'projetos_sprints', 'projeto_id');
    }


    //Projeto tem um relacionamento com sprints (será?)
    public function temSprints()
    {
        return $this->hasMany(Sprint::class, 'projetos_sprints');
    }

}
