<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?> <!-- Sidebar -->

<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">Edit Penjualan</h1>

    <form method="POST" action="/penjualan/update" class="form-control w-full">
    <input type="hidden" name="ID_Penjualan" value="<?= $penjualan['ID_Penjualan']; ?>">

    <label for="Pembeli" class="form-label w-full mt-4">
        <div class="label">
            <span class="label-text">Pembel</span>
        </div>
        <input type="text" name="Pembeli" value="<?= $penjualan['Pembeli']; ?>" class="input input-bordered w-full">
    </label>

    <label for="ID_Produk" class="form-label w-full mt-4">
            <div class="label">
                <span class="label-text" class="label-text">Nama Produk *anda tidak dapat mengubhanya</span>
            </div>
            <select name="ID_Produk" class="input input-bordered w-full">
                <option value="<?= $penjualan['ID_Produk']; ?>" selected><?= $produk['Nama'] ?></option>
            </select>
    </label>

    <label for="Jumlah" class="form-label w-full mt-4">
        <div class="label">
            <span class="label-text">Masukan Jumlah Barang</span>
        </div>
        <input type="number" name="Jumlah" value="<?= $penjualan['Jumlah']; ?>" class="input input-bordered w-full">
    </label>

    <button type="submit" class="btn btn-success mt-4">Simpan</button>
</form>
</div>

<?php include_once "../app/view/src/bottom.php" ?>