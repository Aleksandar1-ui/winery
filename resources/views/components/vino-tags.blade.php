@props(['vino'])
<ul class="flex">
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?godina={{$vino->godina}}">{{$vino->godina}} god.</a>
        </li>
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?cena={{$vino->cena}}">{{$vino->cena}} MKD</a>
        </li>
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?tip={{$vino->tip}}">{{$vino->tip}}</a>
        </li>
</ul>
