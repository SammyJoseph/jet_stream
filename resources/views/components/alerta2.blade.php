@props(['color' => 'red']) {{-- inicializa la variable en rojo por si no recibe un valor --}}

<div {{$attributes}}>
    <div class="text-sm text-left text-{{$color}}-600 bg-{{$color}}-200 border border-{{$color}}-400 h-12 flex items-center p-4 rounded-sm" role="alert">
        <b class="mr-2">{{$title}}</b>
        {{$slot}}
    </div>
</div>