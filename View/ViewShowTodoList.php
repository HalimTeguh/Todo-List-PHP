<?php

require_once __DIR__ . "/../Model/Todo.php";
require_once __DIR__ . "/../BusinessModel/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function ViewShowTodoList()
{

    while (true) {
        ShowTodoList();

        echo "=====MENU=====" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar Program" . PHP_EOL;
        $pilihan = Input("Pilih Menu");

        if ($pilihan == "1") {
            ViewAddTodoList();
        } else if ($pilihan == "2") {
            ViewRemoveTodoList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Maaf, Input tidak sesuai" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
}