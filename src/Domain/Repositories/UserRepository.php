<?php
// src/Domain/Repositories/UserRepository.php
namespace Domain\Repositories;

use Domain\Entities\User;

interface UserRepository
{
    public function save(User $user): void;

    public function getById(int $userId): ?User;
}


?>