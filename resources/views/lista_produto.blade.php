<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produtos</title>
</head>

<body>
    @foreach ($produtos as $p )
        <div>
            Nome:{{ $p->nome }} - categoria: {{ $p->categoria }} - Preço: {{ $p->preco }} 
        </div>
    @endforeach
</body>

</html>
