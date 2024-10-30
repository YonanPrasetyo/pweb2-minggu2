    <?php include_once "../app/view/src/top.php" ?>
    <?php include_once "../app/view/src/sidebar.php" ?> <!-- Sidebar -->

    
    <!-- Content Start -->
    
    <div class="container p-10">

            <h1 class="text-2xl pb-6 font-bold">Daftar Product</h1>

            <a href="/product/create" class="btn btn-primary mb-6">Tambah Product</a>
            
            <div class="grid gap-4 grid-cols-1 lg:grid-cols-3 sm:grid-cols-2">
                <?php $no=1; foreach ($products as $product) : ?>

                    <div class="card rounded- border border-black border-solid w-full bg-base-100">
                        <div class="card-body p-6 bg-primary-100">
                            <div class="badge font-semibold badge-primary badge-outline"><?=$product['Kategori_Produk']?></div>
                            <h1 class="card-title text-2xl  font-serif "><?=$product['Nama']?></h1>
                            <p class="text-base-content mt-4"><?=$product['Deskripsi']?></p>
                            <div class="card-actions justify-between mt-4">
                                <div>Rp. <?= $product['Harga']; ?></div>
                                <div>
                                    <a href="/product/edit/<?= $product['ID_Produk']; ?>" class="btn btn-outline btn-warning">Edit</a>
                                    <a href="/product/delete/<?= $product['ID_Produk']; ?>" class="btn btn-outline btn-error ">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
<!-- Content End -->

<?php include_once "../app/view/src/bottom.php" ?>