<x-layout>
@include('partials._hero')
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@unless (count($vina) == 0)
@foreach($vina as $vino)
    <x-vino-card :vino="$vino"/>
@endforeach
@else
    <p>Ne se pronajdeni vina</p>
@endunless
</div>
<div class="mt-6 p-4">
    {{$vina->links()}}
</div>
</x-layout>