<?php

require_once __DIR__ . "/../BusinessModel/AddTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function ViewAddTodoList()
{
    echo "\n";
    $request = Input("To Do (x to cancel)");
    if (trim($request) == "x") {
        echo "Batal Menambahkan Todo" . PHP_EOL;
        return false;
    } else {
        AddTodoList(trim($request));
        echo "\n";
    }
}