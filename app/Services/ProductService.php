<?php


namespace App\Services;


use App\Enums\User\UserType;
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

    public function getProductList(array $user)
    {
        $products = $this->repository->all();

        $discount = 15;

        foreach ($products as $key => $product) {
            if ($user['type'] == UserType::VipClient) {
                $products[$key]['price'] = $discount > 5
                    ? $products[$key]['price'] * (100 - $discount) / 100
                    : $products[$key]['price'] * (100 - 5) / 100;
            }
        }

        return $products;
    }
}