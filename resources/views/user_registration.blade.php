<x-layout>
    <x-slot:title>
        Registro usuario
    </x-slot>
    @vite('resources/js/signature.js')
    <h1 class="text-2xl flex justify-center pt-10">Registro nuevo usuario</h1>
    <div class="flex justify-center p-10">
        <form action="/form-user" method="post">
            @csrf
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Nombres completos</legend>
                    <input type="text" class="input" placeholder="Ingresa tu nombre" id="name" name="name" required/>
                    <p class="label">* Obligatorio</p>
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Correo electrónico</legend>
                    <input type="email" class="input" placeholder="ejemplo@gmail.com" id="email" name="email" required/>
                    <p class="label">* Obligatorio</p>
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Cargo</legend>
                    <select class="select" name="position" id="position" required>
                        <option value="">Selecciona una opción</option>
                        <option value="Empleado">Empleado</option>
                        <option value="Jefe">Jefe</option>
                    </select>
                    <span class="label">* Obligatorio</span>
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Fecha de ingreso</legend>
                    <input type="date" class="input" placeholder="dd/mm/aaaa" id="entry_date" name="entry_date" required/>
                    <p class="label">* Obligatorio</p>
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Dibuje su firma</legend>
                    <canvas id="signature" width="320px" height="80px" style="border: 1px solid rgb(125, 125, 125)"></canvas>
                    <input type="hidden" id="id_signature" name="signature">
                    <p class="label">* Obligatorio</p>
                </fieldset>
                <button class="btn btn-soft btn-primary">Registrar usuario</button>
            </fieldset>
        </form>
    </div>
</x-layout>