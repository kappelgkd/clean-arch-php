<?php
// src/Application/UseCases/CreateUserUseCase.php
namespace Application\UseCases;

use Domain\Entities\User;
use Domain\Repositories\UserRepository;

class CreateUserUseCase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(string $name, string $email): void
    {
        $user = new User($name, $email);
        $this->userRepository->save($user);
    }
}

?>