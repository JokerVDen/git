<?php

use App\Controllers\ProductController;
use App\Enums\User\UserType;
use App\Repositories\ProductRepository;
use App\Repositories\UserRepository;
use App\Services\ProductService;

require_once './vendor/autoload.php';

$productService = new ProductService(new ProductRepository());
$controller = new ProductController($productService);

$userRepository = new UserRepository;
$user = $userRepository->one(UserType::VipClient);

$response = $controller->index($user);

system('clear');

var_dump($response);

echo PHP_EOL;