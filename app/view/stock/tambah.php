<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?>

<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">Tambah Stock Produk</h1>
    <form action="/stock/simpan" method="POST" class="form-control w-full">
        
        <label class="form-label w-full mt-4">
            <div class="label">
                <span class="label-text">ID Produk:</span>
            </div>
            <input type="number" name="ID_Produk" class="input input-bordered w-full">
        </label>
        
        <label class="form-label w-full mt-4">
            <div class="label">
                <span class="label-text">Jumlah Stock:</span>
            </div>
            <input type="number" name="Jumlah_Stock" class="input input-bordered w-full">
        </label>

        <button type="submit" class="btn btn-success mt-4">Simpan</button>
    </form>
</div>

<?php include_once "../app/view/src/bottom.php" ?>