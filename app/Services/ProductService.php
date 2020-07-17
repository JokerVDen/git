<?php


namespace App\Services;


use App\Repositories\Repository;

class ProductService
{
    /**
     * @var Repository
     */
    private Repository $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getProductList()
    {
        $products = $this->repository->all();

        return $products;
    }
}