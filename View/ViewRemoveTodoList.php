<?php

require_once __DIR__ . "/../BusinessModel/RemoveTodoList.php";
require_once __DIR__ . "/../BusinessModel/ShowTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function ViewRemoveTodoList()
{
    ShowTodoList();
    echo "\n";
    $request = Input("Pilih angka (x to cancel)");
    if (trim($request) == "x") {
        echo "Batal Menghapus Todo" . PHP_EOL;
        return false;
    } else {
        $success = RemoveTodoList(trim($request));
        echo "\n";

        if ($success) {
            echo "Success Menghapus Todo" . PHP_EOL;
        } else {
            echo "Failed Menghapus Todo" . PHP_EOL;
        }

    }
}