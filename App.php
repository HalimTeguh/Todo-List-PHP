<?php

require_once __DIR__ . "/Model/Todo.php";
require_once __DIR__ . "/BusinessModel/AddTodoList.php";
require_once __DIR__ . "/BusinessModel/RemoveTodoList.php";
require_once __DIR__ . "/BusinessModel/ShowTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";


echo "APLIKASI TODO LIST" . PHP_EOL;

ViewShowTodoList();