<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sprint;

class Projeto extends Model
{
    
    protected $guarded = ['id'];

    public function sprint()
    {
        return $this->hasMany(Sprint::class, 'projetos_id', 'id');
    }
    
}
