<?php

require_once __DIR__ . "\..\Entity\TodoList.php";
require_once __DIR__ . "\..\Repository\TodoListRepository.php";
require_once __DIR__ . "\..\Services\TodoListServices.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Services\TodoListServicesImpl;

function testShowTodoList()
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListServices = new TodoListServicesImpl($todoListRepository);

    $todoListRepository->todolist[1] = "Belajar PHP Dasar";
    $todoListRepository->todolist[2] = "Belajar PHP OOP";
    $todoListRepository->todolist[3] = "Belajar PHP Database";

    $todoListServices->ShowTodoList();
}

function testAddTodoList()
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListServices = new TodoListServicesImpl($todoListRepository);

    $todoListServices->AddTodoList("Belajar PHP");
    $todoListServices->AddTodoList("Belajar PHP OOP");
    $todoListServices->AddTodoList("Belajar PHP Database");

    $todoListServices->ShowTodoList();
}

function testRemoveTodoList()
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListServices = new TodoListServicesImpl($todoListRepository);
    $todoListServices->AddTodoList("Belajar PHP");
    $todoListServices->AddTodoList("Belajar PHP OOP");
    $todoListServices->AddTodoList("Belajar PHP Database");

    $todoListServices->ShowTodoList();

    $todoListServices->RemoveTodoList(2);

    $todoListServices->ShowTodoList();
}



testRemoveTodoList();