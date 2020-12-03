<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Detalhes do Orçamento</title>
</head>
<form action="{{route('oficina.index')}}">
    @csrf
    <input type ="submit" value="Voltar para Começo">
</form>
<body>

<p> {{$oficina->cliente}} </p>
<p> {{$oficina->valororcado}} </p>
<p> {{$oficina->data}} </p>
<p> {{$oficina->vendedor}} </p>
<p> {{$oficina->descricao}} </p>
<p>{{date('d/m/Y H:i', strtotime($oficina->created_at))}}</p>

</body>
</html>
