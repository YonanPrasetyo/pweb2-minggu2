<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?>

<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">Tambah Penjualan</h1>

    <form method="POST" action="/penjualan/store" class="form-control w-full">
        <label for="Pembeli">
            <div class="label">
                <span class="label-text">Pembeli</span>
            </div>
            <input type="text" name="Pembeli" class="input input-bordered w-full">
        </label>

        <label for="ID_Produk" class="form-label w-full mt-4">
            <div class="label">
                <span class="label-text" class="label-text">Nama Produk</span>
            </div>
            <select name="ID_Produk" class="input input-bordered w-full">
                <option value="">Pilih Produk</option>
                <?php foreach ($produk as $pilihan) : ?>
                    <option value="<?= $pilihan['ID_Produk']; ?>"><?= $pilihan['Nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </label>

        <label for="Jumlah">
            <div class="label">
                <span class="label-text">Masukan Jumlah Barang</span>
            </div>
            <input type="text" name="Jumlah" class="input input-bordered w-full">
        </label>

        <button type="submit" class="btn btn-success mt-4">Simpan</button>
    </form>

</div>
<?php include_once "../app/view/src/bottom.php" ?>