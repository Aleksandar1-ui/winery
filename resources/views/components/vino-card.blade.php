@props(['vino'])
<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$vino->slika ? asset('storage/'.$vino->slika) : asset('/images/bottle.png')}}" alt="" />
    <div>
        <h3 class="text-2xl">
            <a href="/vina/{{$vino->id}}">{{$vino->ime}}</a>
        </h3> <br>
        <x-vino-tags :vino="$vino"/>
        <div class="text-lg mt-4">
            <i class="fa-solid fa-location-dot"></i>{{$vino->adresa}}, {{$vino->grad}}
        </div>
    </div>
</div>
</x-card>