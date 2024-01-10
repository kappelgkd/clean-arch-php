<?php 
// PARA DEBUG - RETIRAR EM PRODUÇÃO
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

// index.php
require_once '../vendor/autoload.php';

use Application\UseCases\CreateUserUseCase;
use Infrastructure\Persistence\InMemoryUserRepository;
use Presentation\Controllers\UserController;

$userRepository = new InMemoryUserRepository();
$createUserUseCase = new CreateUserUseCase($userRepository);
$userController = new UserController($createUserUseCase);

$userController->createUser('John Doe', 'john@example.com');
