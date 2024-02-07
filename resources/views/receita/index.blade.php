<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .btn{
            background-color: royalblue;
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
        }
        .primary{
            margin-left: 93%;
            background-color: #4CAF50;
        }
        .secondary{
            background-color: red;
        }

        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body class="font-sans antialiased">

<h2>HTML Table</h2>
<hr>
    <form action="{{ route('receita.create') }}" method="get">
        <button type="submit" class="btn primary">Adicionar</button>
    </form>

<hr>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Id Turma</th>
            <th>Data Recebimento</th>
            <th>Valor Arrecadado</th>
            <th>Descrição</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($receitas as $receita)
            <tr>
                <td>{{ $receita->id }}</td>
                <td>{{ $receita->id_turma }}</td>
                <td>{{ $receita->data_recebimento }}</td>
                <td>{{ $receita->valor_arrecadado }}</td>
                <td>{{ $receita->descricao  }}</td>
                <td>
                    <button class="btn secondary">
                        <a href="{{route('receita.destroy', $receita->id)}}" onclick="event.preventDefault();
                            document.getElementById('delete-form-{{ $receita->id }}').submit();">
                            Eliminar
                        </a>
                    </button>
                    <button class="btn"><a href="{{route('receita.update', $receita->id)}}">Editar</a></button>
                </td>
            </tr>

            <form id="delete-form-{{ $receita->id }}" action="{{ route('receita.destroy', $receita->id) }}" method="post" style="display: none;">
                @csrf
                @method('delete')
            </form>
        @endforeach
    </tbody>
</table>
</body>
</html>
