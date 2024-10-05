<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Adicionar Livro - BookManager</title>
</head>
<body class="bg-cinza-claro">

    <div class="bg-amarelo py-4 px-20 flex justify-between items-center">
        <img class="" src="/assests/image/book.png" alt="" width="150" height="150">
        <div class="flex gap-3 items-center">
            <a class="flex justify-center items-center py-2 bg-white px-6 mt-4  rounded-full font-semibold"
                href="{{route('home')}}"> Voltar para a biblioteca </a>

        </div>

    </div>


    <div class="flex items-center justify-center flex-col">
        <h1 class="text-4xl pt-10 pb-8 font-bold">Adicione sua nova <span class="text-amarelo">leitura </span> aqui</h1>
        <img class="pb-8" src="/assests/image/bookLivro.png" alt="" width="250" height="250">


            <form class="flex flex-col gap-5"  method="POST" action="{{route('book.create_action')}}">
                @csrf

                <input class="bg-cinza rounded text-white font-semibold p-2" type="text" name="title" placeholder="Nome do seu livro" required>

                <textarea class="bg-cinza resize-none rounded text-white font-semibold p-2"  placeholder="Descrição do seu livro (opcional)" type="text" name="description" rows="4" cols="50"></textarea>


                <button type="submit" class="flex justify-center items-center py-2 mx-auto bg-amarelo px-11 mt-4 rounded-full font-semibold">Salvar meu livro</button>
            </form>

    </div>

</body>
</html>
