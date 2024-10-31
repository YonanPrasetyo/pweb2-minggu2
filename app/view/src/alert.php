

<script>
    // Fungsi untuk menampilkan alert konfirmasi hapus
    function showAlert($id) {
        const deleteAlert = document.getElementById('deleteAlert');
        deleteAlert.classList.remove('hidden');
        const deleteBtn = document.getElementById('deleteBtn');
        deleteBtn.setAttribute('href', $id);
    }

    // Fungsi untuk menutup alert konfirmasi hapus
    function closeAlert() {
        const deleteAlert = document.getElementById('deleteAlert');
        deleteAlert.classList.add('hidden');
    }
</script>