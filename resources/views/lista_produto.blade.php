<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produtos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="conteiner-fluid">
        <div class="row pt-4">
            <h1 class="text-center">
                Lista de Produtos
            </h1>
        </div>

        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table">
                    <thead>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Preço</th>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $p )
                            <tr>
                                <td> {{ $p->id }} </td>
                                <td> {{ $p->nome }} </td>
                                <td> {{ $p->categoria }} </td>
                                <td> {{ $p->preco }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('produto_cadastro') }}" class="btn btn-primary">Novo</a>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <!-- Option 1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
