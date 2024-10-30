<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?>

<div class="container p-10">

    <h1 class="text-2xl pb-6 font-bold">Edit Produk</h1>

    <form method="POST" action="/product/update" class="form-control w-full">

        <input type="hidden" name="ID_Produk" value="<?= $product['ID_Produk']; ?>">

        <label for="Nama" class="form-label w-full mt-4">
            <div class="label">
                <span class="label-text">Masukan Nama Produk</span>
            </div>
            <input type="text" name="Nama" value="<?= $product['Nama']; ?>" class="input input-bordered w-full">
        </label>

        <label for="Deskripsi" class="form-label w-full mt-4">
            <div class="label">
                <span class="label-text">Deskripsi Produk</span>
            </div>
            <input type="text" name="Deskripsi" value="<?= $product['Deskripsi']; ?>" class="input input-bordered w-full">
        </label>

        <label for="Harga" class="form-label w-full mt-4">
        <div class="label">
                <span class="label-text">Harga Produk</span>
            </div>
            <input type="number" name="Harga" value="<?= $product['Harga']; ?>" class="input input-bordered w-full">
        </label>

        <label for="ID_Kategori" class="form-label w-full mt-4">
        <div class="label">
                <span class="label-text">Kategori Produk</span>
            </div>
        <input type="text" name="ID_Kategori" value="<?= $product['ID_Kategori']; ?>" class="input input-bordered w-full">
        </label>

        <button type="submit" class="btn btn-success mt-4">Simpan</button>
    </form>
</div>
<?php include_once "../app/view/src/bottom.php" ?>