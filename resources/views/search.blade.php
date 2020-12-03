<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Procura de Orçamento</title>
</head>
<form action="{{route('oficina.index')}}">
    @csrf
    <input type ="submit" value="Voltar para Começo">
</form>
    <body>
        <form action="{{ route('search') }}" method="GET">
            <table>
            <input type="text" name="search" placeholder="Nome Vendedor" required/>
            <button type="submit">Procurar por Vendedor</button>
        </form>
        <form action="{{ route('searchcliente') }}" method="GET">
            <table>
            <input type="text" name="searchcliente" placeholder="Nome Cliente" required/>
            <button type="submit">Procurar por Cliente</button>
        </form>
        <form action="{{ route('searchdata') }}" method="GET">
            <table>
            <input type="date" name="data" placeholder="Data Inicial" required/>
            <input type="date" name="data" placeholder="Data Final" required/>
            <button type="submit">Procurar por Data</button>
        </form>
        @if($oficinas->isNotEmpty())
        <td>ID</td>
        <td>Cliente:</td>
        <td>Valor Orçado:</td>
        <td>Data:</td>
        <td>Vendedor:</td>
        <td>Descrição:</td>
        <td>Criado em:</td>
    </tr>
        @foreach ($oficinas as $oficina)
            <div class="post-list">
                <tr>
                <td>{{ $oficina->id }}</td>
                <td>{{ $oficina->cliente }}</td>
                <td>{{ $oficina->valororcado }}</td>
                <td>{{ $oficina->data }}</td>
                <td>{{ $oficina->vendedor }}</td>
                <td>{{ $oficina->descricao }}</td>
                <td>{{ date_format($oficina->created_at, 'j M Y') }}</td>
                </tr>
            </div>
        @endforeach
    @else
        <div>
            <h2>Não foram encontrados orçamentos</h2>
        </div>
    @endif
    </table>
    </body>
    </html>



