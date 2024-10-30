<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <h1>LIST STOCK PRODUK</h1>
    <a href="/stock/tambah">Add New Product</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID_Produk</th>
                <th>Jumlah_Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $No = 1; foreach ($stocks as $stock): ?>
            <tr>
                <td><?= $No++ ?></td>
                <td><?= $stock['ID_Produk'] ?></td>
                <td><?= $stock['Jumlah_Stock'] ?></td>
                <td>
                    <a href="/stock/edit/<?= $stock['ID_Stock_Produk'] ?>" >Update</a>
                    <a href="/stock/hapus/<?= $stock['ID_Stock_Produk']; ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</>
</body>
</html>