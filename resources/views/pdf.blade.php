<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
<div class="overflow-x-auto pt-10">
      <table class="min-w-full bg-white border border-gray-300">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b">ID</th>
            <th class="py-2 px-4 border-b">NOMBRE</th>
            <th class="py-2 px-4 border-b">CÉDULA</th>
            <th class="py-2 px-4 border-b">TELÉFONO</th>
            <th class="py-2 px-4 border-b">DIRECCIÓN</th>
          </tr>
        </thead>
        <tbody>

        @if ($user)
          <tr>
 
            <td class="py-2 px-4 border-b text-center">{{ $user->id }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $user->nombre }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $user->cedula }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $user->telefono }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $user->direccion }}</td>
           
          </tr>
          @endif
        </tbody>
      </table>
    </div>
</body>
</html>