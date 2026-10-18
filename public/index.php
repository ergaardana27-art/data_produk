<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/models/produk.php';
require_once __DIR__ . '/../app/controllers/produkcontroller.php';

$database = new Database();
$db = $database->connect();

$model = new Produk($db);
$controller = new ProdukController($model);

$page = $_GET['page'] ?? 'produk';
$action = $_GET['action'] ?? 'index';

if ($page !== 'produk') {
    http_response_code(404);
    exit('Halaman tidak ditemukan.');
}

match ($action) {
    'index' => $controller->index(),
    'create' => $controller->create(),
    'store' => $controller->store(),
    'edit' => $controller->edit(),
    'update' => $controller->update(),
    'delete' => $controller->delete(),
    default => (function () {
        http_response_code(404);
        exit('Action tidak ditemukan.');
    })()
};
?>