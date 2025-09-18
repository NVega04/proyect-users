<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <h1>Usuarios registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cargo</th>
            <th>Correo electrónico</th>
            <th>Fecha ingreso</th>
            <th>Días trabajados</th>
            <th>Contrato</th>
            <th>Acciones</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->rol->nombre_cargo}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->entry_date}}</td>
                <td>{{$user->workDays}}</td>
                <td>
                    <a href="/contract-user/{{ $user->id }}" target="_blank">Ver contrato</a>
                </td>
                <td>
                    <a href="/edit-user/{{ $user->id }}">
                         <button>Editar</button>
                    </a>
                    <form action="/delete-user" method="POST">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id_user" value="{{$user->id}}">
                        <button>Eliminar</button>
                    </form>
                    
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>