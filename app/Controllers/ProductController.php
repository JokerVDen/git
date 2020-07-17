<?php


namespace App\Controllers;


use App\Services\ProductService;

class ProductController
{
    /**
     * @var ProductService
     */
    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    /**
     * @return array
     */
    public function index(array $user)
    {
        $products = $this->service->getProductList($user);

        return $products;
    }
}