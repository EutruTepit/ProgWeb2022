<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produto</title>
</head>

<body>
    <h1>Novo Produto</h1>
    <form action="{{ route('produtos_novo') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br>

        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria"><br>

        <label for="preco">Preço</label>
        <input type="text" name="preco" id="preco"><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>