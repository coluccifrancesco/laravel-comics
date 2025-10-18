@extends("layouts.master")

@section("title")
    Laravel DC Comics
@endsection

@php
// Dai file config importo comics
$comics = config("comics");

// "var_dump()" di Laravel
// dd($comics);
@endphp

@section("content")

    <img  src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron background" class="w-100" id="jumbotron">

    {{-- Componente --}}
    {{-- <x-comic-in-grid> --}}
        {{-- Per inserire nel componente ciò che sta tra i due tag: {{ $slot }} oppure {{ $nome-slot }} nel componente --}}
        
        {{-- 
            Invece nella view della pagina, per inserire più elementi da passare, utilizziamo per esempio:
            <x-slot:title>
                Titolo
            </x-slot:title>

            <x-slot:subtitle>
                Sottotitolo
            </x-slot:subtitle>
        --}}
    {{-- </x-comic-in-grid> --}}

    <div class="bg-dark p-5 pb-3 position-relative">

        <x-badge>
            <x-slot:classes>px-4 py-2 blue-bg text-white position-absolute top-0 left-0</x-slot:classes>
            <x-slot:title>CURRENT SERIES</x-slot:title>
        </x-badge>

        <div class="row comics-grid mx-auto pt-4 pb-5">
        
            @foreach ($comics as $comic)
        
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">

                <x-comic-in-grid>
            
                    <x-slot:image>{{ $comic["thumb"] }}</x-slot:image>
                    <x-slot:title>{{ $comic["title"] }}</x-slot:title>

                </x-comic-in-grid>

            </div>
    
            @endforeach
        
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <x-badge>
                <x-slot:classes>px-5 py-2 blue-bg text-white</x-slot:classes>
                <x-slot:title>Load More</x-slot:title>
            </x-badge>
        </div>

    </div>

@endsection