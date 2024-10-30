<html>
<div class="container mt-4">
    <h1 class="mb-3">Tambah Stock Produk</h1>
    <form action="/stock/tambah" method="POST">
        <div class="mb-3">
            <label>ID Produk:</label>
            <input type="number" name="ID_Produk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah Stock:</label>
            <input type="number" name="Jumlah_Stock" class="form-control" required>
        </div>
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
    </form>
</div>
</html>