@extends('layouts.app')

<div class="bg-gray-300 w-full h-screen pt-[100px] pl-[350px]">
    <div class="container mx-auto p-10">
       <div class="flex justify-between items-center ">
        <h1 class="text-2xl font-bold mb-4">USUARIOS REGISTRADOS</h1>
       <a href="{{route('register')}}">
        <button  class="font-bold bg-sky-600 text-gray-100 p-2 rounded-xl hover:bg-blue-900" >
            REGISTRAR USUARIO
        </button>
       </a>
       </div>
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white border border-gray-300">
            <thead>
              <tr class="bg-gray-700" >
                <th class="py-2 px-4 text-gray-200 border-b">ID</th>
                <th class="py-2 px-4 text-gray-200 border-b">NOMBRE</th>
                <th class="py-2 px-4 text-gray-200 border-b">CÉDULA</th>
                <th class="py-2 px-4 text-gray-200 border-b">TELÉFONO</th>
                <th class="py-2 px-4 text-gray-200 border-b">DIRECCIÓN</th>
                <th class="py-2 px-4 text-gray-200 border-b">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $users as $user )
              <tr>

                <td class="py-2 text-center px-4 border-b">{{$user->id}}</td>
                <td class="py-2 text-center px-4 border-b">{{$user->nombre}}</td>
                <td class="py-2 text-center px-4 border-b">{{$user->cedula}}</td>
                <td class="py-2 text-center px-4 border-b">{{$user->telefono}}</td>
                <td class="py-2 text-center px-4 border-b">{{$user->direccion}}</td>
                <td class="py-2 text-center px-4 border-b">

                    <a href="{{route('user.update', $user->id)}}" class="text-white bg-blue-800 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Update</a>

                    <form action="{{ route('users.delete', $user->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            Delete
                        </button>
                    </form>


                    <a href="{{ route('user.pdf', $user->id) }}">
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold p-3 rounded-md pb-4  ">
                <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              </button>
                      </a>

            
        </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

</div>
