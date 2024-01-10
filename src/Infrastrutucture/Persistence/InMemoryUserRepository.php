<?php 
// src/Infrastructure/Persistence/InMemoryUserRepository.php
namespace Infrastructure\Persistence;

use Domain\Entities\User;
use Domain\Repositories\UserRepository;

class InMemoryUserRepository implements UserRepository
{
    private $users = [];

    public function save(User $user): void
    {
       
    }

    public function getById(int $userId): ?User
    {
        
    }
}


?>