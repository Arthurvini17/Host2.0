<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planos extends Model
{

    protected $table = 'planos';
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    
   
}
