<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<form action="{{route('oficina.index')}}">
    @csrf
    <input type ="submit" value="Voltar para Começo">
</form>
    <body>
    <form action="{{route('oficina.store')}}" method="post">
        @csrf
            <label for="">Cliente:</label>
            <input type="cliente" name="cliente">

            <label for="">Valor Orçado:</label>
            <input type="valororcado" name="valororcado">

            <label for="">Data:</label>
            <input type="date" name="data">

            <label for="">Vendedor:</label>
            <input type="vendedor" name="vendedor">

            <label for="">Descrição:</label>
            <input type="descricao" name="descricao">

            <input type="submit" value="Cadastrar Usuário">
        </form>
    </body>
    </html>
