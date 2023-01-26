<?php


namespace View {
    require_once __DIR__ . "\..\Helper\InputHelper.php";

    use Helper\InputHelper;
    use Services\TodoListServices;


    class TodoListView
    {

        private TodoListServices $todoListServices;

        function __construct(TodoListServices $todoListServices)
        {
            $this->todoListServices = $todoListServices;
        }

        function ShowTodoList(): void
        {
            while (true) {
                $this->todoListServices->ShowTodoList();

                echo "=====MENU=====" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar Program" . PHP_EOL;
                $pilihan = InputHelper::Input("Pilih Menu");

                if ($pilihan == "1") {
                    $this->AddTodoList();
                } else if ($pilihan == "2") {
                    $this->RemoveTodoList();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Maaf, Input tidak sesuai" . PHP_EOL;
                }
            }

            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        function AddTodoList(): void
        {
            $request = InputHelper::Input("To Do (x to cancel)");
            if (trim($request) == "x") {
                echo "Batal Menambahkan Todo" . PHP_EOL;
            } else {
                $this->todoListServices->AddTodoList(trim($request));
            }
        }

        function RemoveTodoList(): void
        {
            $request = InputHelper::Input("Pilih angka (x to cancel)");
            if (trim($request) == "x") {
                echo "Batal Menghapus Todo" . PHP_EOL;
            } else {
                $this->todoListServices->RemoveTodoList($request);
            }
        }
    }
}