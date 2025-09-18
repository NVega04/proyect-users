<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contrato</title>
</head>
<body>
    <img src="/resources/img/logo.jpeg" alt="Logo" style="width: 110px">
    <center><h1>CONTRATO A TÉRMINO INDEFINIDO</h1></center>
    <p>
        Entre los suscritos, SYSCOM COLOMBIA, identificada con NIT 900.000.000-0, con domicilio en Bogotá D.C., 
        quien en adelante se denominará EL EMPLEADOR y por otra parte {{ $user->name }}, quien en adelante se denominará 
        EL TRABAJADOR, hemos convenido en celebrar el presente contrato laboral el día {{ $user->entry_date }}, 
        para el cargo de {{ $user->rol->nombre_cargo }}, el cual se regirá por las siguientes cláusulas:
    </p>
    <h4>Obligaciones del trabajador</h4>
    <p>
        Son obligaciones del TRABAJADOR: Cumplir las funciones asignadas con eficiencia y responsabilidad, observar las normas de higiene 
        y seguridad en el trabajo, guardar confidencialidad sobre los procesos de la empresa, respetar los reglamentos internos de la empresa.
    </p>
    <h4>Prestaciones sociales</h4>
    <p>
        EL EMPLEADOR afilia al TRABAJADOR a una EPS, a un fondo de pensiones, a una ARL y a una caja de compensación familiar. Asimismo, 
        reconocerá y pagará las prestaciones sociales de ley: cesantías, intereses a las cesantías, prima de servicios y vacaciones.
    </p>
    <h4>Terminación de contrato</h4>
    <p>
        El contrato terminará por las causas establecidas en el artículo 61 del Código Sustantivo del Trabajo, por vencimiento del término 
        pactado o por justa causa conforme a la ley. En constancia, se firma en Bogotá D.C., el {{ $user->entry_date }}, 
        en dos ejemplares de igual tenor.
    </p>
    <h4>Datos e información personal</h4>
    <ul>
        <li>Nombres completos: {{$user->name}}</li>
        <li>Correo electrónico: {{$user->email}}</li>
        <li>Cargo: {{$user->rol->nombre_cargo}}</li>
        <li>Fecha ingreso: {{$user->entry_date}}</li>
    </ul>
    <h4>Firma del trabajador</h4>
    <img src="{{ $user->signature }}" alt="Firma usuario" style="border-bottom: 1px solid black; padding-bottom: 10px">
    <p>{{$user->name}}</p>
</body>
</html>