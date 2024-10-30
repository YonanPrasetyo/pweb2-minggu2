<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?>

<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">Tambah Kategori Baru</h1>

    <form method="POST" action="/kategori/store" class="form-control w-full">

        <label for="Kategori_Produk" class="form-label w-full mt-4">
            <div class="label">
                <span class="label-text">Nama Kategori:</span>
            </div>
            <input type="text" id="Kategori_Produk" name="Kategori_Produk" class="input input-bordered w-full">
        </label>
        <button type="submit" class="btn btn-success mt-4">Simpan</button>

    </form>
</div>

<?php include_once "../app/view/src/bottom.php" ?>
