<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = 'enderecos';

    # cada endereco possui um estado
    public function estado(){
        return $this->belongsTo(Estados::class);
    }

    # Cliente pode ter mais de um cliente
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

}
