<?php

require_once "../Model/Todo.php";
require_once "../BusinessModel/RemoveTodoList.php";
require_once "../BusinessModel/AddTodoList.php";
require_once "../BusinessModel/ShowTodoList.php";


AddTodoList("Halim");
AddTodoList("Teguh");
AddTodoList("Saputro");

ShowTodoList();

RemoveTodoList(4);

ShowTodoList();