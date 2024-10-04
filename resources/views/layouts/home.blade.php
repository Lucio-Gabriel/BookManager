<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Inicio - BookManager</title>
</head>
<body class="bg-cinza-claro">


    <div class="container mx-auto">
        <div class="bg-amarelo p-4">
            <img class="" src="/assests/image/book.png" alt="" width="150" height="150">

            <a class="flex justify-center items-center py-2 bg-white px-6 mt-4  rounded-full font-semibold" href="{{route('book.create')}}"> Adicionar um novo livro </a>
            <a class="flex justify-center items-center py-2 bg-white px-6 mt-4  rounded-full font-semibold" href="#"> Sair </a>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <h1 class="text-4xl font-semibold">Bem vindo a sua <span class="text-amarelo">Biblioteca</span> User</h1>
    </div>

    <div class="container mx-auto">
        <div class="bg-white w-1/3 h-96 rounded-lg shadow-xl">
            <div>
                <div class="text-end">
                    <h3>Essencialismo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, ipsam.</p>
                </div>

                <img class="py-14 px-5" class="rounded-lg" src="/assests/image/essencialismo.png" alt="" width="200" height="200">
            </div>


        </div>
    </div>


</body>
</html>
