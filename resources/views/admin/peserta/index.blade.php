<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Peserta') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10">
        <div class="mb-3">
            <a href="{{ route('admin.peserta.create') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Tambah</a>
        </div>

        <div class="overflow-x-auto">
            <table id="pesertaTable" class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="py-2 px-4 border">No</th>
                        <th class="py-2 px-4 border">Nama</th>
                        <th class="py-2 px-4 border">NIK</th>
                        <th class="py-2 px-4 border">Alamat</th>
                        <th class="py-2 px-4 border">No Telepon</th>
                        <th class="py-2 px-4 border">Jenis Kelamin</th>
                        <th class="py-2 px-4 border">Asal Sekolah</th>
                        <th class="py-2 px-4 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesertas as $index => $peserta)
                        <tr class="text-gray-700 text-center">
                            <td class="py-2 px-4 border">{{ $index + 1 }}</td>
                            <td class="py-2 px-4 border">{{ $peserta->nama }}</td>
                            <td class="py-2 px-4 border">{{ $peserta->nik }}</td>
                            <td class="py-2 px-4 border">{{ $peserta->alamat }}</td>
                            <td class="py-2 px-4 border">{{ $peserta->no_telepon }}</td>
                            <td class="py-2 px-4 border">{{ $peserta->jenis_kelamin }}</td>
                            <td class="py-2 px-4 border">{{ $peserta->asal_sekolah }}</td>
                            <td class="py-2 px-4 border text-center">
                                <div class="flex justify-center space-x-2">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.peserta.edit', $peserta->id) }}"
                                        class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-700 transition">Edit</a>

                                    <!-- Tombol Delete -->
                                    <form action="{{ route('admin.peserta.destroy', $peserta->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-700 transition"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tambahkan jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- Tambahkan DataTables JS -->
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.tailwindcss.js"></script>
    <!-- Inisialisasi DataTables -->
    <script>
        $(document).ready(function() {
            $('#pesertaTable').DataTable();
        });
    </script> --}}
</x-app-layout>
