<?php require_once '../app/view/src/top.php' ?>
<?php require_once '../app/view/src/sidebar.php' ?>

<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">Dashboard</h1>

    <hr>
    <div class="grid gap-4 grid-cols-1 lg:grid-cols-3 sm:grid-cols-2 mt-4">

        <div class="card w-32 bg-blue-100 shadow-lg p-4 rounded-lg shadow-lg shadow-blue-500/50">
            <div class="text-center text-xl font-bold text-gray-700"><?= $jumlahproduct; ?></div>
            <div class="text-center text-2xl text-gray-500">PRODUCT</div>
            <a href="/product/index" class="btn btn-primary mt-4">Lihat Detail</a>
        </div>
        
        <div class="card w-32 bg-blue-100 shadow-lg p-4 rounded-lg shadow-lg shadow-blue-500/50">
            <div class="text-center text-xl font-bold text-gray-700"><?= $jumlahkategori; ?></div>
            <div class="text-center text-2xl text-gray-500">KATEGORI</div>
            <a href="/product/index" class="btn btn-primary mt-4">Lihat Detail</a>
        </div>
        
        <div class="card w-32 bg-blue-100 shadow-lg p-4 rounded-lg shadow-lg shadow-blue-500/50">
            <div class="text-center text-xl font-bold text-gray-700"><?= $jumlahpenjualan; ?></div>
            <div class="text-center text-2xl text-gray-500">PENJUALAN</div>
            <a href="/product/index" class="btn btn-primary mt-4">Lihat Detail</a>
        </div>

    </div>
</div>

<?php require_once '../app/view/src/bottom.php' ?>