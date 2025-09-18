<x-layout>
    <x-slot:title>
        Editar registro
    </x-slot>
    @vite('resources/js/signature.js')
    <h1 class="text-2xl flex justify-center pt-10">Editar usuario</h1>
    <div class="flex justify-center p-10">
        <form action="/edit-register/{{ $user->id }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Nombres completos</legend>
                    <input type="text" class="input" placeholder="Ingresa tu nombre" id="name" name="name" value="{{ $user->name }}" required/>
                    <p class="label">* Obligatorio</p>
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Correo electrónico</legend>
                    <input type="email" class="input" placeholder="ejemplo@gmail.com" id="email" name="email" value="{{ $user->email }}" required/>
                    <p class="label">* Obligatorio</p>
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Cargo</legend>
                    <select class="select" name="position" id="position" required>
                        <option value="">Selecciona una opción</option>
                        <option value="Empleado" @selected($user->rol->nombre_cargo == "Empleado")>Empleado</option>
                        <option value="Jefe" @selected($user->rol->nombre_cargo == "Jefe")>Jefe</option>
                    </select>
                    <span class="label">* Obligatorio</span>
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Fecha de ingreso</legend>
                    <input type="date" class="input" placeholder="dd/mm/aaaa" id="entry_date" name="entry_date" value="{{ $user->entry_date->toDateString() }}" required/>
                    <p class="label">* Obligatorio</p>
                </fieldset>
                <button class="btn btn-soft btn-primary">Editar usuario</button>
            </fieldset>
        </form>
    </div>
</x-layout>