<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar usuario</title>
</head>
<body>
    <h1>Editar usuario</h1>
    <form action="/edit-register/{{ $user->id }}" method="post">
        @csrf
        @method('PATCH')
        <label>Nombres</label>
        <input id="name" name="name" type="text" value="{{ $user->name }}" required>
        <label>Correo electrónico</label>
        <input id="email" name="email" type="email" value="{{ $user->email }}" required>
        <label>Cargo</label>
        <select name="position" id="position" required>
            <option value="">Selecciona una opción</option>
            <option value="Empleado" @selected($user->rol->nombre_cargo == "Empleado")>Empleado</option>
            <option value="Jefe" @selected($user->rol->nombre_cargo == "Jefe")>Jefe</option>
        </select>
        <label>Fecha de ingreso</label>
        <input type="date" id="entry_date" name="entry_date" value="{{ $user->entry_date->toDateString() }}" required>
        <button>Editar usuario</button>
    </form>
</body>
</html>