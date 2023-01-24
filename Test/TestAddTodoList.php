<?php

require_once "../Model/Todo.php";
require_once "../BusinessModel/AddTodoList.php";
require_once "../BusinessModel/ShowTodoList.php";




AddTodoList("halim");
AddTodoList("Teguh");
AddTodoList("Saputro");

ShowTodoList();