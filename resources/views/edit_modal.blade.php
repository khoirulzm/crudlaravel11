<!-- resources/views/edit_modal.blade.php -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-bold" id="editModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="edit-name" class="form-label">Nama</label>
                        <input type="text" class="form-input w-full px-3 py-2 border border-gray-300 rounded-md" name="name" id="edit-name">
                    </div>
                    <div class="mb-3">
                        <label for="edit-dob" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-input w-full px-3 py-2 border border-gray-300 rounded-md" name="dob" id="edit-dob">
                    </div>
                    <div class="mb-3">
                        <label for="edit-school" class="form-label">Sekolah</label>
                        <input type="text" class="form-input w-full px-3 py-2 border border-gray-300 rounded-md" name="school" id="edit-school">
                    </div>
                    <div class="mb-3">
                        <label for="edit-description" class="form-label">Keterangan</label>
                        <input type="text" class="form-input w-full px-3 py-2 border border-gray-300 rounded-md" name="description" id="edit-description">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md" data-bs-dismiss="modal">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
