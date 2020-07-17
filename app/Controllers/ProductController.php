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
    public function index()
    {
        $products = $this->service->getProductList();

        return $products;
    }
}