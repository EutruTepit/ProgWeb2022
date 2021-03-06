<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;
    protected $table = 'fornecedores';

    public function estado(){
        return $this->belongsTo(Estados::class);
    }

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
