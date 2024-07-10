// resources/js/modal.js
document.addEventListener('DOMContentLoaded', function () {
    var editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var name = button.getAttribute('data-name');
        var dob = button.getAttribute('data-dob');
        var school = button.getAttribute('data-school');
        var description = button.getAttribute('data-description');

        var form = document.getElementById('editForm');
        form.action = '/students/' + id;
        form.querySelector('#edit-name').value = name;
        form.querySelector('#edit-dob').value = dob;
        form.querySelector('#edit-school').value = school;
        form.querySelector('#edit-description').value = description;
    });
});
