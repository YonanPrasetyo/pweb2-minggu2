<html>
<div class="container mt-4">
    <h1 class="mb-3">Edit Stock Produk</h1>
    <form action="/stock/update" method="POST">
        <div class="mb-3">
            <input type="hidden" name="ID_Stock_Produk" class="form-control" required value="<?= $stock['ID_Stock_Produk'] ?>">
        </div>
        <div class="mb-3">
            <label>ID Produk:</label>
            <input type="number" name="ID_Produk" class="form-control" required value="<?= $stock['ID_Produk'] ?>">
        </div>
        <div class="mb-3">
            <label>Jumlah Stock:</label>
            <input type="number" name="Jumlah_Stock" class="form-control" required value="<?= $stock['Jumlah_Stock'] ?>">
        </div>
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
    </form>
</div>
</html>