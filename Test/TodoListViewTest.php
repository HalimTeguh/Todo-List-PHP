<?php
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Services/TodoListServices.php";
require_once __DIR__ . "/../View/TodoListView.php";




use Repository\TodoListRepositoryImpl;
use Services\TodoListServicesImpl;
use View\TodoListView;

function testTodoListView()
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListServices = new TodoListServicesImpl($todoListRepository);
    $todoListView = new TodoListView($todoListServices);

    $todoListServices->AddTodoList("Belajar PHP");
    $todoListServices->AddTodoList("Belajar PHP OOP");
    $todoListServices->AddTodoList("Belajar PHP Database");

    $todoListView->ShowTodoList();
}

testTodoListView();