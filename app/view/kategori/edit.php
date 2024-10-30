<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?>

<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">Ubah Kategori</h1>

    <form method="POST" action="/kategori/update" class="form-control w-full">
        <input type="hidden" name="ID_Kategori" value="<?=$kategori['ID_Kategori']?>">

        <label for="Kategori_Produk" class="form-label w-full mt-4">
            <div class="label">
                <span class="label-text">Nama Kategori:</span>
            </div>
            <input type="text" id="Kategori_Produk" name="Kategori_Produk" value="<?=$kategori['Kategori_Produk']?>" class="input input-bordered w-full">
        </label>

        <button type="submit" class="btn btn-success mt-4">Simpan Perubahan</button>
    </form>
</div>
<?php include_once "../app/view/src/bottom.php" ?>