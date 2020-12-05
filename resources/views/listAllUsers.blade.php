<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<form action="{{route('oficina.create')}}">
    @csrf
    <input type ="submit" value="Novo Orçamento">
</form>
<form action="{{route('search')}}">
    @csrf
    <input type ="submit" value="Pesquisar Orçamento">
</form>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('success2'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('success3'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
</td>
    <body>
        <table>
            <td>ID</td>
            <td>Cliente:</td>
            <td>Valor Orçado:</td>
            <td>Data:</td>
            <td>Vendedor:</td>
            <td>Descrição:</td>
            <td>Criado em:</td>
        </tr>

        @foreach($oficinas as $oficina)
        <tr>
        <td> {{ $oficina->id }}</td>
        <td>{{ $oficina->cliente}}</td>
        <td>{{$oficina->valororcado}}</td>
        <td>{{$oficina->data}}</td>
        <td>{{$oficina->vendedor}}</td>
        <td>{{$oficina->descricao}}</td>
        <td>{{ date_format($oficina->created_at, 'j M Y') }}</td>
            <td>
            <a href="{{route('oficina.show', ['oficina' => $oficina->id])}}">Ver Usuário</a>
            <form action="{{route('oficina.destroy', ['oficina' => $oficina->id])}}" method="post">
                @csrf
                @method('delete')
                <input type ="submit" value="Remover">
            </form>
            <form action="{{route('oficina.edit', ['oficina' => $oficina->id])}}" method="get">
                @csrf
                <input type ="submit" value="Editar">
            </form>
        </td>
    </tr>
    @endforeach
        </table>
    </body>
</html>
