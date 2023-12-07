@extends('layouts.app')

<div class="bg-gray-300 w-full h-screen pt-[100px] pl-[350px] flex justify-center items-center" >
    <form class="flex flex-col w-[400px] gap-3 bg-gray-800 p-5 rounded-xl"
    action="" method="post">
    @csrf
    
    @method('PUT')
        <label class="text-gray-200 font-bold text-lg" for="nombre">Nombre:</label>
        <input class="rounded-xl p-1" type="text" id="nombre" name="nombre" value="{{$user->nombre}}" required>

        <label class="text-gray-200 font-bold text-lg" for="cedula">Cédula:</label>
        <input class="rounded-xl p-1" type="text" id="cedula" name="cedula" value="{{$user->cedula}}" required>

        <label class="text-gray-200 font-bold text-lg" for="telefono">Teléfono:</label>
        <input class="rounded-xl p-1" type="tel" id="telefono" name="telefono" value="{{$user->telefono}}" required>

        <label class="text-gray-200 font-bold text-lg" for="direccion">Dirección:</label>
        <input class="rounded-xl p-1" type="text" id="direccion" name="direccion" value="{{$user->direccion}}" required>

        <button class="bg-sky-500 rounded-xl p-2 mt-2 text-white font-bold"
         type="submit">ACTUALIZAR</button>
    </form>
</div>
