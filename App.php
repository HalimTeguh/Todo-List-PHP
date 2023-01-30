<?php

require_once __DIR__ . "\Entity\TodoList.php";
require_once __DIR__ . "\Helper\InputHelper.php";
require_once __DIR__ . "\Repository\TodoListRepository.php";
require_once __DIR__ . "\Services\TodoListServices.php";
require_once __DIR__ . "\View\TodoListView.php";
require_once __DIR__ . "\Config\Database.php";

use Repository\TodoListRepositoryImpl;
use Services\TodoListServicesImpl;
use View\TodoListView;
use Config\Database;


echo "APLIKASI TODO LIST" . PHP_EOL;

$connection = Database::getConnection();

$todoListRepository = new TodoListRepositoryImpl($connection);
$todoListServices = new TodoListServicesImpl($todoListRepository);
$todoListView = new TodoListView($todoListServices);

$todoListView->ShowTodoList();