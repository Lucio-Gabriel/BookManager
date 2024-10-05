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


    <div class="bg-amarelo py-4 px-20 flex justify-between items-center">
        <img class="" src="/assests/image/book.png" alt="" width="150" height="150">
        <div class="flex gap-3 items-center">
            <a class="flex justify-center items-center py-2 bg-white px-6 mt-4  rounded-full font-semibold"
                href="{{ route('book.create') }}"> Adicionar um novo livro </a>
            <a class="flex justify-center items-center py-2 bg-white px-6 mt-4  rounded-full font-semibold"
                href="#"> Sair </a>
        </div>

    </div>


    <div class="flex justify-center items-center pt-10 pb-20">
        <h1 class="text-4xl font-semibold">Bem vindo a sua <span class="text-amarelo">Biblioteca</span> User</h1>
    </div>

    <div class="container mx-auto">
        <div class="bg-white w-1/3 h-96 rounded-2xl shadow-xl flex pt-16 gap-10 px-10">

            <img class="rounded-2xl w-[200px] h-[250px]" src="/assests/image/essencialismo.png" alt="" >

            <div class="text-start">
                <h2 class="font-semibold text-3xl">Essencialismo</h2>
                <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptates voluptate facere hic architecto, aspernatur sint modi odio dicta porro, perferendis magnam pariatur, harum assumenda doloribus distinctio quo perspiciatis fugiat! </p>

                <div class="w-full flex flex-col items-center">
                 <a class="flex justify-center items-center py-2 bg-black text-white px-6 mt-4  rounded-full font-semibold" href="#"> Iniciar modo leitor </a>

                 <div class="flex items-center gap-4">
                    <a class="flex justify-center items-center py-2 bg-amarelo text-white px-6 mt-4  rounded-full font-semibold" href="#"> Editar </a>
                    <a class="flex justify-center items-center py-2 bg-amarelo text-white px-6 mt-4  rounded-full font-semibold" href="#"> Deletar </a>
                 </div>

                </div>

            </div>



        </div>
    </div>


</body>

</html>
