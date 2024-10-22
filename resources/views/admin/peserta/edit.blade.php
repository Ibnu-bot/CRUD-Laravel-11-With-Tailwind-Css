<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight text-center">
            {{ __('Edit Data Peserta') }}
        </h2>
    </x-slot>

    <div class="bg-white shadow-md rounded-lg p-10">
        <!-- Form untuk mengedit data peserta -->
        <form action="{{ route('admin.peserta.update', $pesertum->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" required
                    value="{{ old('nama', $pesertum->nama) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-500
                           focus:ring-opacity-50">
            </div>

            <div class="mb-4">
                <label for="nik" class="block text-gray-700">NIK</label>
                <input type="text" id="nik" name="nik" required
                    value="{{ old('nik', $pesertum->nik) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-500
                           focus:ring-opacity-50">
            </div>

            <div class="mb-4">
                <label for="alamat" class="block text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-500
                           focus:ring-opacity-50">{{ old('alamat', $pesertum->alamat) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="no_telepon" class="block text-gray-700">No Telepon</label>
                <input type="text" id="no_telepon" name="no_telepon" required
                    value="{{ old('no_telepon', $pesertum->no_telepon) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-500
                           focus:ring-opacity-50">
            </div>

            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-gray-700">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-500
                           focus:ring-opacity-50">
                    <option value="Laki-laki" {{ old('jenis_kelamin', $pesertum->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin', $pesertum->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="asal_sekolah" class="block text-gray-700">Asal Sekolah</label>
                <input type="text" id="asal_sekolah" name="asal_sekolah" required
                    value="{{ old('asal_sekolah', $pesertum->asal_sekolah) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-500
                           focus:ring-opacity-50">
            </div>

            <div class="flex justify-between">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold py-2 px-4 rounded
                           hover:bg-blue-600">
                    Update
                </button>
                <a href="{{ route('admin.peserta.index') }}"
                    class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded
                           hover:bg-gray-400">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
