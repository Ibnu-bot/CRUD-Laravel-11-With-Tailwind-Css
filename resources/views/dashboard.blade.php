<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center items-center">
        <div class="text-center">
            <h1 class="text-2xl font-bold">Welcome JWP TIKOM</h1>
            <p class="mt-4 text-gray-600">website sederhana ini dibuat untuk pendataan peserta</p>
            <div class="mt-6">
                <a href="{{ route('admin.peserta.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Pendaftaran</a>
                <a href="{{ route('admin.peserta.index') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Peserta</a>
            </div>
        </div>
    </div>
</x-app-layout>
