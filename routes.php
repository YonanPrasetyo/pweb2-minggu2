<?php
// routes.php

require_once 'app/controllers/ProductController.php';

$controller = new ProductController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/product/index' || $url == '/product') {
    $controller->index();
}elseif ($url == '/product/create') {
    $controller->create();
} elseif ($url == '/product/store') {
    $controller->store();
} elseif (preg_match('/\/product\/edit\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller->edit($id);
} elseif ($url == '/product/update') {
    $controller->update();
}
