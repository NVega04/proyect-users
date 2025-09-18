<x-layout>
    <x-slot:title>
        Usuarios
    </x-slot>
    <h1 class="text-2xl flex justify-center pt-10">Usuarios registrados</h1>
    <div class="p-10">
        <table class="table">
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
                    <td>{{$user->entry_date->toDateString()}}</td>
                    <td>{{$user->workDays}}</td>
                    <td>
                        <a class="btn btn-soft btn-primary" href="/contract-user/{{ $user->id }}" target="_blank">Ver contrato</a>
                    </td>
                    <td>
                        <a href="/edit-user/{{ $user->id }}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <form action="/delete-user" method="POST" class="inline">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id_user" value="{{$user->id}}">
                            <button class="btn btn-error">Eliminar</button>
                        </form>   
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @session('mensaje')
        <div class="toast">
            <div class="alert alert-success">
                <span>{{$value}}</span>
            </div>
        </div>
    @endsession
</x-layout>