<?php

namespace Database\Seeders;

use App\Models\Estados;
use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listaEstados = [
            ['nome' => 'Acre', 'abrev' => 'AC'],
            ['nome' => 'Alagoas', 'abrev' => 'AL'],
            ['nome' => 'Amapá', 'abrev' => 'AP'],
            ['nome' => 'Amazonas', 'abrev' => 'AM'],
            ['nome' => 'Bahia', 'abrev' => 'BA'],
            ['nome' => 'Ceará', 'abrev' => 'CE'],
            ['nome' => 'Espírito Santo', 'abrev' => 'ES'],
            ['nome' => 'Goiás', 'abrev' => 'GO'],
            ['nome' => 'Maranhão', 'abrev' => 'MA'],
            ['nome' => 'Mato Grosso', 'abrev' => 'MT'],
            ['nome' => 'Mato Grosso do Sul', 'abrev' => 'MS'],
            ['nome' => 'Minas Gerais', 'abrev' => 'MG'],
            ['nome' => 'Pará', 'abrev' => 'PA'],
            ['nome' => 'Paraíba', 'abrev' => 'PB'],
            ['nome' => 'Paraná', 'abrev' => 'PR'],
            ['nome' => 'Pernambuco', 'abrev' => 'PE'],
            ['nome' => 'Piauí', 'abrev' => 'PI'],
            ['nome' => 'Rio de Janeiro', 'abrev' => 'RJ'],
            ['nome' => 'Rio Grande do Norte', 'abrev' => 'RN'],
            ['nome' => 'Rio Grande do Sul', 'abrev' => 'RS'],
            ['nome' => 'Rondônia', 'abrev' => 'RO'],
            ['nome' => 'Roraima', 'abrev' => 'RR'],
            ['nome' => 'Santa Catarina', 'abrev' => 'SC'],
            ['nome' => 'São Paulo', 'abrev' => 'SP'],
            ['nome' => 'Sergipe', 'abrev' => 'SE'],
            ['nome' => 'Tocantins', 'abrev' => 'TO'],
            ['nome' => 'Distrito Federal', 'abrev' => 'DF']
        ];

        foreach ($listaEstados as $estado) {
            $novoEstado = new Estados();
            $novoEstado->nome = $estado['nome'];
            $novoEstado->abrev = $estado['abrev'];
            
            $novoEstado->save();
        }
        
    }
}
