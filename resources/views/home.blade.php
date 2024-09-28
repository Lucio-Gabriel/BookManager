
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Book Manager</title>
</head>
<body>

    <section >

        <div class="flex  items-center justify-center p-40 m-20">

            <img src="/assests/image/leitorImg.png" alt="" width="300" height="300">
            <div class="flex flex-col items-center">

                <h1 class="text-4xl font-serif">Bem vindo ao <br> <span class="text-amarelo font-bold">Book Manager</span></h1>

                <a class="flex justify-center items-center py-2 bg-amarelo px-11 mt-4 rounded-full font-semibold" href="{{ route('login') }}"> Já Possui Conta </a>
                <a class="flex justify-center items-center py-2 bg-black text-amarelo px-11 mt-4 rounded-full font-semibold" href="{{ route('register') }}"> Cadastrar-se </a>

            </div>

        </div>
    </section>






</body>
</html>
