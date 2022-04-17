<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = "produtos";

    public function fornecedor(){
        # por algum motivo ele n consegue resolver sozinho como em outros casos, sendo assim é necessário especificar os campos
        return $this->hasOne(Fornecedores::class, 'id', 'fornecedores_id');
    }
}
