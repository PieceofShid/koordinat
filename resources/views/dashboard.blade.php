@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-2 gap-2 m-12">
        <div class="container">
            <div class="grid grid-cols-5">
                @foreach($coords[0] as $coord)
                    <div class="w-auto h-12 border border-sm border-gray-700 mx-0.5 my-0.5 {{ $coord->getSelectedChair($x, $y)}}">
                        {{-- <span>{{ $coord->x }}, {{ $coord->y}}</span> --}}
                    </div>
                @endforeach
            </div>
            <div class="grid grid-cols-5 mt-8">
                @foreach($coords[1] as $coord)
                    <div class="w-auto h-12 border border-sm border-gray-700 mx-0.5 my-0.5 {{ $coord->getSelectedChair($x, $y)}}">
                        {{-- <span>{{ $coord->x }}, {{ $coord->y}}</span> --}}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="m-12">
            <form action="{{ route('dashboard.find') }}" method="post">
                @csrf
                <div class="mb-6">
                    <label for="rssi_2" class="block mb-2 text-sm font-medium text-gray-900">RSSI 1</label>
                    <input type="text" id="rssi_1" name="rssi_1"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           autocomplete="off" required>
                </div>
                <div class="mb-6">
                    <label for="rssi_2" class="block mb-2 text-sm font-medium text-gray-900">RSSI 2</label>
                    <input type="text" id="rssi_2" name="rssi_2"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           autocomplete="off" required>
                </div>
                <div class="mb-6">
                    <label for="rssi_3" class="block mb-2 text-sm font-medium text-gray-900">RSSI 3</label>
                    <input type="text" id="rssi_3" name="rssi_3"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           autocomplete="off" required>
                </div>
                <div class="mb-6">
                    <button
                        class="uppercase block text-center py-2 px-4 w-full mt-4 bg-blue-700 text-white rounded-xl text-lg">
                        Periksa
                    </button>
                </div>
            </form>
            @error('error')
            <div class="mx-24 mt-12 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
            @enderror
            @if(! blank($x, $y))
                <div class="mx-24 mt-12 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">Koordinat {{ $x }}, {{ $y }}</span>
                </div>
            @endif
        </div>
    </div>
@endsection
