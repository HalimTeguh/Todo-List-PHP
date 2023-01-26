<?php

namespace Repository {

    use Entity\TodoList;

    interface TodoListRepository
    {

        function save(TodoList $input): void;

        function remove(int $number): bool;

        function findAll(): array;

    }

    class TodoListRepositoryImpl implements TodoListRepository
    {

        public array $todolist = array();

        public function save(TodoList $input): void
        {
            $number = sizeof($this->todolist) + 1;

            $this->todolist[$number] = $input;
        }

        public function remove(int $number): bool
        {
            if ($number > sizeof($this->todolist)) {
                return False;
            } else {
                for ($number; $number < sizeof($this->todolist); $number++) {
                    $this->todolist[$number] = $this->todolist[$number + 1];
                }
                unset($this->todolist[$number]);
                return true;
            }
        }


        public function findAll(): array
        {
            return $this->todolist;
        }
    }

}