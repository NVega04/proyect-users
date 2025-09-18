<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro usuarios</title>
    @vite('resources/js/signature.js')
</head>
<body>
    <h1>Registro de usuario</h1>
    <form action="/form-user" method="post">
        @csrf
        <label>Nombres</label>
        <input id="name" name="name" type="text" required>
        <label>Correo electrónico</label>
        <input id="email" name="email" type="email" required>
        <label>Cargo</label>
        <select name="position" id="position" required>
            <option value="">Selecciona una opción</option>
            <option value="Empleado">Empleado</option>
            <option value="Jefe">Jefe</option>
        </select>
        <label>Fecha de ingreso</label>
        <input type="date" id="entry_date" name="entry_date" required>
        <canvas id="signature" width="200px" height="80px" style="border: 1px solid black">
            Dibuja tu firma
        </canvas>
        <input type="hidden" id="id_signature" name="signature">
        <button>Registrar usuario</button>
    </form>
</body>
</html>