<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Sala de Leitura - BookManager</title>
</head>
<body class="bg-cinza-claro">

    <div class="bg-amarelo py-4 px-20 flex justify-between items-center">
        <img class="" src="/assests/image/book.png" alt="" width="150" height="150">
        <div class="flex gap-3 items-center">
            <a class="flex justify-center items-center py-2 bg-white px-6 mt-4  rounded-full font-semibold"
                href="{{ route('home') }}"> Voltar para biblioteca </a>
            <a class="flex justify-center items-center py-2 bg-white px-6 mt-4  rounded-full font-semibold"
                href="{{route('book.create')}}"> Adicionar um novo livro </a>
        </div>
    </div>

    <div class="flex justify-center items-center pt-10 pb-20">
        <h1 class="text-4xl font-semibold">Sala de<span class="text-amarelo"> Leitura</span></h1>
    </div>

</body>
</html>
