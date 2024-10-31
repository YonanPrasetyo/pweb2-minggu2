<?php
// routes.php

require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/KategoriController.php';
require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/PenjualanController.php';
require_once 'app/controllers/StockController.php';

$url = $_SERVER['REQUEST_URI'];

$controllerHome = new HomeController();
$controllerKategori = new KategoriController();
$controllerProduct = new ProductController();
$controllerPenjualan = new PenjualanController();
$controllerStock = new StockController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/') {
    $controllerHome->index();
}elseif ($url == '/kategori/index') {
    $controllerKategori->index();  
}elseif ($url == '/kategori/create') {
    $controllerKategori->create();
}elseif ($url == '/kategori/store') {
    $controllerKategori->store();
}elseif (preg_match('/\/kategori\/edit\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controllerKategori->edit($id);
}elseif ($url == '/kategori/update') {
    $controllerKategori->update();
}elseif (preg_match('/\/kategori\/delete\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controllerKategori->delete($id);
}elseif ($url == '/product/index') {
    $controllerProduct->index();
}elseif ($url == '/product/create') {
    $controllerProduct->create();
}elseif ($url == '/product/store') {
    $controllerProduct->store();
}elseif (preg_match('/\/product\/edit\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controllerProduct->edit($id);
}elseif ($url == '/product/update') {
    $controllerProduct->update();
}elseif (preg_match('/\/product\/delete\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controllerProduct->delete($id);
}elseif ($url == '/penjualan/index') {
    $controllerPenjualan->index();
}elseif ($url == '/penjualan/create') {
    $controllerPenjualan->create();
}elseif ($url == '/penjualan/store') {
    $controllerPenjualan->store();
}elseif (preg_match('/\/penjualan\/edit\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controllerPenjualan->edit($id);
}elseif ($url == '/penjualan/update') {
    $controllerPenjualan->update();
}elseif (preg_match('/\/penjualan\/delete\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controllerPenjualan->delete($id);
}elseif ($url == '/stock/index') {
    $controllerStock->stock();
}elseif ($url == '/stock/tambah') {
    $controllerStock->tambah();
}elseif ($url == '/stock/simpan') {
    $controllerStock->simpan($_POST);
}elseif (preg_match('/\/stock\/edit\/(\d+)/', $url,$matches)) {
    $ID_Stock_Produk = $matches[1];
    $controllerStock->edit($ID_Stock_Produk);
}elseif ($url == '/stock/update') {
    $controllerStock->update($_POST);
}elseif (preg_match('/\/stock\/hapus\/(\d+)/', $url,$matches)) {
    $ID_Stock_Produk = $matches[1];
    $controllerStock->hapus($ID_Stock_Produk);
}else {
    echo '404 Not Found';
}
