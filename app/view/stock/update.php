<html>
<div class="container mt-4">
    <h1 class="mb-3">Edit Product</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label>ID Stock Produk:</label>
            <input type="number" name="ID_Stock_Produk" class="form-control" value="<?= $product['ID_Stock_Produk'] ?>" required>
        </div>
        <div class="mb-3">
            <label>ID Produk:</label>
            <input type="number" name="ID_Produk" class="form-control" value="<?= $product['ID_Produk'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Jumlah Stock:</label>
            <input type="number" name="Jumlah_Stock" class="form-control" value="<?= $product['Jumlah_Stock'] ?>" required>
        </div>
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
    </form>
    <a href="stock.php" class="btn btn-secondary">Cancel</a>
</div>
</html>