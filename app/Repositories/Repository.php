<?php


namespace App\Repositories;


interface Repository
{
    /**
     * @return array
     */
    public function all(): array;

    /**
     * @param int $id
     * @return array
     */
    public function one(int $id): ?array;
}