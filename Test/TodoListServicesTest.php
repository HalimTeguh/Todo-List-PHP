<?php

require_once __DIR__ . "\..\Entity\TodoList.php";
require_once __DIR__ . "\..\Repository\TodoListRepository.php";
require_once __DIR__ . "\..\Services\TodoListServices.php";
require_once __DIR__ . "\..\Config\Database.php";


use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Services\TodoListServicesImpl;

function testShowTodoList()
{
    $connection = \Config\Database::getConnection();

    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListServices = new TodoListServicesImpl($todoListRepository);

    $todoListServices->ShowTodoList();
}

function testAddTodoList()
{
    $connection = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListServices = new TodoListServicesImpl($todoListRepository);

    $todoListServices->AddTodoList("Belajar PHP");
    $todoListServices->AddTodoList("Belajar PHP OOP");
    $todoListServices->AddTodoList("Belajar PHP Database");

    //$todoListServices->ShowTodoList();
}

function testRemoveTodoList()
{
    $connection = \Config\Database::getConnection();

    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListServices = new TodoListServicesImpl($todoListRepository);

    $todoListServices->RemoveTodoList(2);
    //$todoListServices->ShowTodoList();


}


testShowTodoList();