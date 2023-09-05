<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Filmes</title>
</head>
<body>
    <table>
        <thead>            
            <tr>
                <th>Titulo</th>
                <th>Ano</th>
            </tr>    
        </thead>
        <tbody>
            <tr>
                @foreach($filmes as $filme)
                <td>{{$filme}}</td>
                @endforeach
                @foreach($anos as $ano)
                <td>{{$ano}}</td>
                @endforeach
            </tr>    
        </tbody>
    </table>
</body>
</html>