<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-3">LIST STOCK PRODUK</h1>
    <a href="/stock/tambah" class="btn btn-primary mb-3">Add New Product</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID_Stock_Produk</th>
                <th>ID_Produk</th>
                <th>Jumlah_Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stocks as $stock): ?>
            <tr>
                <td><?= $stock['ID_Stock_Produk'] ?></td>
                <td><?= $stock['ID_Produk'] ?></td>
                <td><?= $stock['Jumlah_Stock'] ?></td>
                <td>
                    <a href="/stock/tampil<?= $stock['ID_Stock_Produk'] ?>" class="btn btn-info btn-sm">View</a>
                    <a href="/stock/edit/<?= $stock['ID_Stock_Produk'] ?>" class="btn btn-warning btn-sm">Update</a>
                    <a href="/stock/hapus/<?= $stock['ID_Stock_Produk']; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>