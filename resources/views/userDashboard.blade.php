<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h1 class="text-3xl  text-center font-bold mt-10 ">Welcome to Dshboard</h1>
    <div class="container mx-auto mt-10">
      

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="#" class="text-blue-500 hover:underline" >View</a>
                        <a href=" {{ route('user.EditUser',['id'=>$user->id]) }}" class="text-blue-500 hover:underline ml-4">Edit</a>
                        <a href="" class="text-red-500 hover:underline ml-4">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    
</body>
</html>