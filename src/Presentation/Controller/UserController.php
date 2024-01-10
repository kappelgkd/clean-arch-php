<?php 
// src/Presentation/Controllers/UserController.php
namespace Presentation\Controllers;

use Application\UseCases\CreateUserUseCase;

class UserController
{
    private $createUserUseCase;

    public function __construct(CreateUserUseCase $createUserUseCase)
    {
        $this->createUserUseCase = $createUserUseCase;
    }

    public function createUser(string $name, string $email): void
    {
        $this->createUserUseCase->execute($name, $email);
        echo 'User created successfully.';
    }
}


?>