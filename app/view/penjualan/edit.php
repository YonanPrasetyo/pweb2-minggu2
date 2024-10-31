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
                <span class="label-text" class="label-text">Nama Produk</span>
            </div>
            <select name="ID_Produk" class="input input-bordered w-full">
                <option value="">Pilih Produk</option>
                <?php foreach ($produk as $pilihan) : ?>
                    <option <?php if ($pilihan['ID_Produk'] == $penjualan['ID_Produk']) echo "selected"; ?> value="<?= $pilihan['ID_Produk']; ?>"><?= $pilihan['Nama']; ?></option>
                <?php endforeach; ?>
            </select>
    </label>

    <button type="submit" class="btn btn-success mt-4">Simpan</button>
</form>
</div>

<?php include_once "../app/view/src/bottom.php" ?>