<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 5px;
        }
    </style>
</head>

<body>
    <table class="table">
        <tr>
            <th>Numero de Usuario</th>
            <th>Nickname</th>
        </tr>
        
        @foreach($nicknames as $nickname)
        <tr>
            <td>{{$nickname->id}}</td>
             
            <td>
                <a href="{{url('/perfil/'.$nickname->id)}}">{{$nickname->nickname}}</a>
            </td>
            
        </tr>
        @endforeach
    </table>
</body>

</html>