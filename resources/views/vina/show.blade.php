<x-layout>
@include('partials._search')
<a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i>Nazad</a>
<div class="mx-4">
    <x-card>
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6" src="{{$vino->slika ? asset('storage/'.$vino->slika) : asset('/images/bottle.png')}}" alt=""/>
            <h3 class="text-2xl mb-2">{{$vino->ime}}</h3>
            <div class="text-xl font-bold mb-4">{{$vino->vinarija}}</div>
            <x-vino-tags :vino="$vino"/>
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{$vino->adresa}}, {{$vino->grad}}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
        <div>
        <h3 class="text-3xl font-bold mb-4">Opis</h3>
        <div class="text-lg space-y-6">
            {{$vino->opis}}
            <a href="{{$vino->email}}" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80">
                <i class="fa-solid fa-envelope"></i>Kontakt
            </a>
            <a href="{{$vino->strana}}" target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80">
                <i class="fa-solid fa-globe"></i>Web Strana
            </a>
        </div>
    </div>
</div>
</x-card>
{{--<x-card class="mt-4 p-2 flex space-x-6">
    <a href="/vina/{{$vino->id}}/izmeni">
        <i class="fa-solid fa-pencil"></i> Izmeni
    </a>
    <form method="POST" action="/vina/{{$vino->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Izbrishi </button>
    </form>
</x-card>--}}
</div>
</x-layout>