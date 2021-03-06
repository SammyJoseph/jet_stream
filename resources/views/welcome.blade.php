<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}} {{-- lo mismo de arriba (versión actual de tailwind en app.css) --}}
        {{-- <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet"> --}} {{-- otra versión de tailwind --}}
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    @php
        $color = "green";
        $alert = "alerta"; //contenido dinámico, puede ser alerta o alerta2
    @endphp
    <body>
        <div class="container mx-auto">
            <x-alerta :color="$color" class="mb-4"> {{--no dejar espacios en color="red" (fue cambiado por una variable)--}}
                <x-slot name="title">
                    Título lorem
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta eaque odit consequuntur id error consequatur dicta blanditiis tempora libero, ut ratione incidunt. Labore voluptas quo dolore sequi corrupti facere adipisci.
            </x-alerta>
            <x-alerta> {{--si no se especifica el color, toma el que está por defecto en el constructor--}}
                <x-slot name="title">
                    Título hw
                </x-slot>
                hola mundo
            </x-alerta>

            {{-- <x-alerta2 color="blue" />
            <x-alerta2 /> --}}
            <x-alerta2 color="blue" class="my-4">
                <x-slot name="title">Hola mundo</x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum asperiores repellendus sit, neque doloribus fuga qui aspernatur eius atque dolore. Ipsa asperiores quaerat in ipsam iure optio voluptates quidem quos.
            </x-alerta2>
            <x-alerta2 color="pink" class="my-4">
                <x-slot name="title">Hola mundo</x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum asperiores repellendus sit, neque doloribus fuga qui aspernatur eius atque dolore. Ipsa asperiores quaerat in ipsam iure optio voluptates quidem quos.
            </x-alerta2>

            <x-dynamic-component color="yellow" :component="$alert">
                <x-slot name="title">Hola mundo</x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum asperiores repellendus sit, neque doloribus fuga qui aspernatur eius atque dolore. Ipsa asperiores quaerat in ipsam iure optio voluptates quidem quos.
            </x-dynamic-component>
        </div>
    </body>
</html>
