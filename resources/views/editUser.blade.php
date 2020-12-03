<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edição de Orçamento</title>
</head>
<form action="{{route('oficina.index')}}">
    @csrf
    <input type ="submit" value="Voltar para Começo">
</form>
    <body>

    <form action="{{route('oficina.update', ['oficina' => $oficina->id])}}" method="post">
        @csrf
        @method('put')
        <label for="">Cliente:</label>
    <input type="cliente" name="cliente" value="{{$oficina->cliente}}">

        <label for="">Valor Orçado:</label>
        <input type="valororcado" name="valororcado" value="{{$oficina->valororcado}}">

        <label for="">Data:</label>
        <input type="date" name="data" value="{{$oficina->data}}">

        <label for="">Vendedor:</label>
        <input type="vendedor" name="vendedor" value="{{$oficina->vendedor}}">

        <label for="">Descrição:</label>
        <input type="descricao" name="descricao" value="{{$oficina->descricao}}">

        <input type="submit" value="Editar usuário">
    </form>
</body>
</html>
