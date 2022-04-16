<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
    use HasFactory;
    protected $table = "clientes";

    # Cliente pode ter mais de um cliente
    public function enderecos(){
        return $this->hasMany(Endereco::class);
    }
}
