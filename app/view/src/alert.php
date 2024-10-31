

<script>
    // Fungsi untuk menampilkan alert konfirmasi hapus
    function showAlert() {
        const deleteAlert = document.getElementById('deleteAlert');
        deleteAlert.classList.remove('hidden');
    }

    // Fungsi untuk menutup alert konfirmasi hapus
    function closeAlert() {
        const deleteAlert = document.getElementById('deleteAlert');
        deleteAlert.classList.add('hidden');
    }
</script>