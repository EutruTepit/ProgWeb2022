<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produto</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="conteiner-fluid">
        <div class="row pt-4">
            <h1 class="text-center">
                Novo Produto
            </h1>
        </div>
        
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col">
                <form action="{{ route('produtos_novo') }}" method="post">
                    @csrf
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control"><br>
            
                    <label for="categoria" class="form-label">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control"><br>
            
                    <label for="preco" class="form-label">Preço (R$)</label>
                    <input type="text" name="preco" id="preco" class="form-control"><br>
            
                    <!-- text-center necessário para centralizar (não achei metodo melhor na doc) -->
                    <p class="text-center">
                        <a href="{{ route('produto_listar') }}" class="btn btn-primary">Listar</a>
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </p>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <!-- Option 1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>