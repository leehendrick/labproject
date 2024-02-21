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
        form {
            /* Just to center the form on the page */
            margin: 0 auto;
            width: 400px;

            /* To see the limits of the form */
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
        }

        div + div {
            margin-top: 1em;
        }

        label {
            /* To make sure that all label have the same size and are properly align */
            display: inline-block;
            width: 90px;
            text-align: right;
        }

        input,
        textarea {
            /* To make sure that all text field have the same font settings
               By default, textarea are set with a monospace font */
            font: 1em sans-serif;

            /* To give the same size to all text field */
            width: 300px;

            -moz-box-sizing: border-box;
            box-sizing: border-box;

            /* To harmonize the look & feel of text field border */
            border: 1px solid #999;
        }

        input:focus,
        textarea:focus {
            /* To give a little highlight on active elements */
            border-color: #000;
        }

        textarea {
            /* To properly align multiline text field with their label */
            vertical-align: top;

            /* To give enough room to type some text */
            height: 5em;

            /* To allow users to resize any textarea vertically
               It works only on Chrome, Firefox and Safari */
            resize: vertical;
        }

        .button {
            /* To position the buttons to the same position of the text fields */
            padding-left: 90px; /* same size as the label elements */
        }

        button {
            /* This extra margin represent the same space as the space between
               the labels and their text fields */
            margin-left: 0.5em;
        }

    </style>
</head>
<body class="font-sans antialiased">
<form action="{{route('receita.store')}}" method="post">
    @csrf
    <div>
        <label for="id_turma">Id Turma:</label>
        <input type="number" id="name" name="id_turma" />
    </div>

    <div>
        <label for="data_recebimento">Data Recebimento:</label>
        <input type="date" id="mail" name="data_recebimento" />
    </div>

    <div>
        <label for="valor_arrecadado">Valor Arrecadado:</label>
        <input type="text" id="msg" name="valor_arrecadado"/>
    </div>

    <div>
        <label for="descricao">Descrição:</label>
        <textarea id="msg" name="descricao"></textarea>
    </div>

    <div class="button">
        <button type="submit">Salvar</button>
    </div>
</form>

</body>
</html>
