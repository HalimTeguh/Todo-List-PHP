<?php

require_once __DIR__ . "\Entity\TodoList.php";
require_once __DIR__ . "\Helper\InputHelper.php";
require_once __DIR__ . "\Repository\TodoListRepository.php";
require_once __DIR__ . "\Services\TodoListServices.php";
require_once __DIR__ . "\View\TodoListView.php";

use Repository\TodoListRepositoryImpl;
use Services\TodoListServicesImpl;
use View\TodoListView;


echo "APLIKASI TODO LIST" . PHP_EOL;

$todoListRepository = new TodoListRepositoryImpl();
$todoListServices = new TodoListServicesImpl($todoListRepository);
$todoListView = new TodoListView($todoListServices);

$todoListView->ShowTodoList();