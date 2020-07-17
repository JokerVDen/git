<?php

use App\Controllers\ProductController;
use App\Repositories\ProductRepository;
use App\Services\ProductService;

require_once './vendor/autoload.php';

$productService = new ProductService(new ProductRepository());
$controller = new ProductController($productService);

$response = $controller->index();

system('clear');

var_dump($response);

echo PHP_EOL;