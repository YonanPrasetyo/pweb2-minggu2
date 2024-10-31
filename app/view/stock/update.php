<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?>

<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">Edit Stock Produk</h1>
    <form action="/stock/update" method="POST" class="form-control w-full">

        
            <input type="hidden" name="ID_Stock_Produk" value="<?= $stock['ID_Stock_Produk'] ?>">

            <label for="ID_Produk" class="form-label w-full mt-4">
                <div class="label">
                    <span class="label-text" class="label-text">Nama Produk</span>
                </div>
                <select name="ID_Produk" class="input input-bordered w-full">
                    <?php foreach ($products as $product) : ?>
                        <option <?php if ($product['ID_Produk'] == $stock['ID_Produk']) echo "selected"; ?> value="<?= $product['ID_Produk']; ?>"><?= $product['Nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </label>

            <label>
                <div class="label" class="form-label w-full mt-4">
                    <span class="label-text">Jumlah Stock:</span>
                </div>
                <input type="number" name="Jumlah_Stock" value="<?= $stock['Jumlah_Stock'] ?>" class="input input-bordered w-full">
            </label>

        <button type="submit" class="btn btn-success mt-4">Simpan</button>
    </form>
</div>

<?php include_once "../app/view/src/bottom.php" ?>