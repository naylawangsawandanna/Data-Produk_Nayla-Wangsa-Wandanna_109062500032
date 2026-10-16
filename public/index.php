
<?php

require '../config/database.php';
require '../app/models/Produk.php';
require '../app/controllers/ProdukController.php';

$db = (new Database())->connect();
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
