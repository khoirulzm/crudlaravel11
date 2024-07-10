<!-- resources/views/add_modal.blade.php -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-bold" id="addModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/students') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-input w-full px-3 py-2 border border-gray-300 rounded-md" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-input w-full px-3 py-2 border border-gray-300 rounded-md" name="dob" id="dob">
                    </div>
                    <div class="mb-3">
                        <label for="school" class="form-label">Sekolah</label>
                        <input type="text" class="form-input w-full px-3 py-2 border border-gray-300 rounded-md" name="school" id="school">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Keterangan</label>
                        <input type="text" class="form-input w-full px-3 py-2 border border-gray-300 rounded-md" name="description" id="description">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md" data-bs-dismiss="modal">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
