<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="bg-sky-200">
    <!-- Navbar -->
    <nav class="bg-sky-300 shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="text-4xl font-bold text-white">Data Siswa</div>
            <div class="text-white flex font-bold items-center">
                {{ Auth::user()->name }}
                <form action="{{ route('logout') }}" method="POST" class="inline ml-4">|
                    @csrf
                    <button type="submit" class="text-red-500">Logout</button>
                </form>
            </div>
            <form method="GET" action="{{ url('/students') }}" class="flex items-center">
                <input type="text" name="search" placeholder="Cari nama siswa, tanggal lahir, sekolah, atau keterangan..." class="form-input w-48 px-4 py-2 border border-gray-300 rounded-md">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md ml-2">Cari</button>
            </form>
        </div>
    </nav>

    <div class="container mx-auto p-8">
        <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md mb-4" data-bs-toggle="modal" data-bs-target="#addModal">
            Tambah Data
        </button>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($students as $student)
                <div class="bg-sky-300 shadow-md rounded-md p-4 flex flex-col justify-between">
                    <div>
                        <p class="mb-2">Nama : {{ $student->name }}</p>
                        <p class="mb-2">Tanggal Lahir : {{ $student->dob }}</p>
                        <p class="mb-2">Sekolah : {{ $student->school }}</p>
                        <p class="mb-4">Keterangan : {{ $student->description }}</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md" data-bs-toggle="modal" data-bs-target="#editModal" data-id="{{ $student->id }}" data-name="{{ $student->name }}" data-dob="{{ $student->dob }}" data-school="{{ $student->school }}" data-description="{{ $student->description }}">
                            Edit
                        </button>
                        <form action="{{ url('/students/' . $student->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah kamu yakin ingin menghapus?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-5">
            {{ $students->links() }}
        </div>
    </div>

    <!-- Include Add Modal -->
    @include('add_modal')

    <!-- Include Edit Modal -->
    @include('edit_modal')

    @vite('resources/js/modal.js')
</body>
</html>
