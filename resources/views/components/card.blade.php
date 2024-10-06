<div class="bg-white w-1/3 h-96 rounded-2xl shadow-xl flex pt-16 gap-10 px-10">

            <img class="rounded-2xl w-[200px] h-[250px]" src="/assests/image/book2.png" alt="" >

            <div class="text-start">
                <h2 class="font-semibold text-3xl">{{$data['title'] ?? ''}}</h2>
                <p class="text-xs"> {{$data['description'] ?? ''}} </p>

                <div class="w-full flex flex-col items-center">
                 <a class="flex justify-center items-center py-2 bg-black text-white px-6 mt-4  rounded-full font-semibold" href="{{route('book.room')}}"> Iniciar modo leitor </a>

                 <div class="flex items-center gap-4">
                    <a class="flex justify-center items-center py-2 bg-amarelo text-white px-6 mt-4  rounded-full font-semibold" href="{{route('book.edit', ['id' => $data['id']])}}"> Editar </a>
                    <a class="flex justify-center items-center py-2 bg-amarelo text-white px-6 mt-4  rounded-full font-semibold" href="{{route('book.delete', ['id' => $data['id']])}}" onclick="return confirm('Tem certeza que deseja deletar este livro?');"> Deletar </a>


                 </div>

                </div>

            </div>
        </div>
