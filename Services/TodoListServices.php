<?php

namespace Services {
    use Entity\TodoList;
    use Repository\TodoListRepository;

    interface TodoListServices
    {
        function ShowTodoList(): void;

        function AddTodoList(string $todo): void;

        function RemoveTodoList(int $number): void;
    }

    class TodoListServicesImpl implements TodoListServices
    {
        private TodoListRepository $todolistRepository;

        public function __construct(TodoListRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        public function ShowTodoList(): void
        {
            echo "=====TODO LIST=====" . PHP_EOL;

            foreach ($this->todolistRepository->findAll() as $key => $value) {
                echo "$key. " . $value->getTodo() . PHP_EOL;
            }
        }

        public function AddTodoList(string $todo): void
        {
            $this->todolistRepository->save(new TodoList($todo));
            echo "Sukses Menambah Todo" . PHP_EOL;
        }

        public function RemoveTodoList(int $number): void
        {
            $success = $this->todolistRepository->remove($number);

            if ($success) {
                echo "Success Menghapus Todo" . PHP_EOL;
            } else {
                echo "Failed Menghapus Todo" . PHP_EOL;
            }
        }
    }
}