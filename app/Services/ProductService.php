<?php


namespace App\Services;


use App\Repositories\Repository;

class ProductService
{
    /**
     * @var Repository
     */
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getProductList()
    {
        $products = $this->repository->all();
        $discountedProducts = [];

        foreach ($products as $key => $product) {
            $product['price'] *= 0.85;
            $discountedProducts[] = $product;
        }

        return $discountedProducts;
    }
}