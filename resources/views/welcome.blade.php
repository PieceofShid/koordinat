@extends('layouts.app')

@section('content')
    <div class="text-center">
        <div class="mt-32">
            <h1 class="text-2xl font-bold">APLIKASI KOORDINAT</h1>
        </div>
        <div class="mt-32">
            <a href="{{ route('dashboard') }}" class="uppercase py-4 px-8 bg-blue-500 text-white rounded-xl text-xl text-uppercase">Get Started</a>
        </div>

        <div class="absolute right-0 left-0 bottom-0 z-10">
            <div class="flex justify-center gap-2 mb-8">
                <div>
                    <img class="w-12 h-12" src="{{ asset('logo.png') }}" alt="Logo">
                </div>
                <div class="my-auto">
                    <h1 class="text-bold text-left text-white">Fakultas <br/> Teknologi Industri</h1>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 w-full z-0">
            <img class="w-full h-72" src="{{ asset('bg.png') }}" alt="Bg">
        </div>

    </div>
@endsection
