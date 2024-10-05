
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Conecte-se - BookManager</title>
</head>
<body>

    <section>

        <div class="flex items-center justify-center flex-col p-40">
            <h1 class="text-3xl font-bold">Login do <span class="text-amarelo">Book Manager</span></h1>
            <img src="/assests/image/leitorImg.png" alt="" width="250" height="250">

            <div>
                <form method="POST" action="{{route('user.login_action')}}" >
                    @csrf

                    <label class="font-semibold">Email</label> <br>
                    <input class="bg-cinza rounded text-white font-semibold p-2" type="email" name="email" placeholder="Digite seu email..." required>

                    <br><br>

                    <label class="font-semibold">Senha</label> <br>
                    <input class="bg-cinza rounded text-white font-semibold p-2" type="password" name="password" placeholder="********" required>

                    <button type="submit" class="flex justify-center items-center py-2 mx-auto bg-amarelo px-11 mt-4 rounded-full font-semibold">Acessar</button>
                </form>
            </div>
                <a href="{{route('register')}}" class="text-cinza pt-4">Ainda não possui conta? Cadastre-se</a>
        </div>

    </section>



</body>
</html>
