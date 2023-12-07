@extends('layouts.app')

<div class="bg-gray-300 w-full h-screen pt-[100px] pl-[350px] flex justify-center items-center" >
    <form class="flex flex-col w-[400px] gap-3 bg-gray-800 p-5 rounded-xl"
    action="{{route('store')}}" method="POST">
    @csrf

        <label class="text-gray-200 font-bold text-lg" for="nombre">Nombre:</label>
        <input class="rounded-xl p-1" type="text" id="nombre" name="nombre" required>

        <label class="text-gray-200 font-bold text-lg" for="cedula">Cédula:</label>
        <input class="rounded-xl p-1" type="text" id="cedula" name="cedula" required>

        <label class="text-gray-200 font-bold text-lg" for="telefono">Teléfono:</label>
        <input class="rounded-xl p-1" type="tel" id="telefono" name="telefono" required>

        <label class="text-gray-200 font-bold text-lg" for="direccion">Dirección:</label>
        <input class="rounded-xl p-1" type="text" id="direccion" name="direccion" required>

        <button class="bg-sky-500 rounded-xl p-2 mt-2"
         type="submit">Registrar</button>
    </form>
</div>
