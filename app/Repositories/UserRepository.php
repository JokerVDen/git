<?php


namespace App\Repositories;


use App\Enums\User\UserType;
use MongoDB\Driver\Manager;

class UserRepository implements Repository
{
    /**
     * @var array|array[]
     */
    private $users = [
        UserType::Manager => [
            'type' => UserType::Manager,
            'name' => 'Главный менеджер',
        ],
        UserType::Client => [
            'type' => UserType::Client,
            'name' => 'Клиент',
        ],
        UserType::VipClient => [
            'type' => UserType::VipClient,
            'name' => 'Вип клиент',
        ],

    ];

    /**
     * @return array|array[]
     */
    public function all(): array
    {
        return $this->users;
    }

    /**
     * @param int $id
     * @return array|null
     */
    public function one(int $id): ?array
    {
        return $this->users[$id] ?? null;
    }
}