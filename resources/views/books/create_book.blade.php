<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Adicionar Livro - BookManager</title>
</head>
<body>

    <div class="container mx-auto">
        <div class="bg-amarelo p-4">
            <img class="" src="/assests/image/book.png" alt="" width="150" height="150">

            <a class="flex justify-center items-center py-2 bg-white px-6 mt-4  rounded-full font-semibold" href="{{route('home')}}"> Voltar para a biblioteca </a>

        </div>
    </div>


    <div class="flex items-center justify-center flex-col">
        <h1 class="text-3xl font-bold">Adicione sua nova <span class="text-amarelo">leitura </span> aqui</h1>
        <img src="/assests/image/bookLivro.png" alt="" width="250" height="250">

        <div>
            <form  method="post" action="{{route('user.register_action')}}">
                @csrf

                <label class="font-semibold">Nome do seu livro</label> <br>
                <input class="bg-cinza rounded text-white font-semibold p-2" type="name" name="name" placeholder="Nome do seu livro" required>

                <br><br>

                <label class="font-semibold" >Descrição do seu livro</label>
                <textarea  class="bg-cinza rounded text-white font-semibold p-2"  placeholder="Descrição do seu livro (opcional)" type="text" name="text" rows="4" cols="50"></textarea>


                <button type="submit" class="flex justify-center items-center py-2 mx-auto bg-amarelo px-11 mt-4 rounded-full font-semibold">Salvar meu livro</button>


            </form>
        </div>

    </div>

</body>
</html>
