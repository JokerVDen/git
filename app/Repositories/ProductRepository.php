<?php


namespace App\Repositories;


class ProductRepository implements Repository
{
    /**
     * @var array|array[]
     */
    private array $products = [
        1 => [
            'id'    => 1,
            'name'  => 'Рубашка',
            'price' => 400,
        ],
        2 => [
            'id'    => 2,
            'name'  => 'Брюки',
            'price' => 500,
        ],
        3 => [
            'id'    => 3,
            'name'  => 'Пиджак',
            'price' => 500,
        ],

    ];

    public function all(): array
    {
        return $this->products;
    }

    public function one(int $id): ?array
    {
        return $this->products[$id] ?? null;
    }

}