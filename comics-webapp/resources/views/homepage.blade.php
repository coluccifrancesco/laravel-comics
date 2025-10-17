@extends("layouts.master")

@section("title")
    Laravel DC Comics
@endsection

@section("content")
    <h1>Homepage</h1>

    <p>Ecco i magazines</p>

    {{-- Componente --}}
    <x-comics-list>
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
    </x-comics-list>
@endsection