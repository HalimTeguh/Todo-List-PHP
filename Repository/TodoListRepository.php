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

        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        public function save(TodoList $input): void
        {
            $sql = "INSERT INTO todolist (todo) VALUES (?)";
            $statment = $this->connection->prepare($sql);
            $statment->execute([$input->getTodo()]);
        }

        public function remove(int $number): bool
        {
            $sql = "SELECT * FROM todolist WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            if ($statement->fetch()) {
                $sql = "DELETE FROM todolist WHERE id = ?";
                $statment = $this->connection->prepare($sql);
                return $statment->execute([$number]);
            } else {
                return false;
            }

        }


        public function findAll(): array
        {
            $sql = "SELECT id, todo FROM todolist";

            $statement = $this->connection->prepare($sql);
            $statement->execute();

            $result = [];

            foreach ($statement as $row) {
                $todolist = new TodoList();
                $todolist->setId($row["id"]);
                $todolist->setTodo($row["todo"]);

                $result[$todolist->getId()] = $todolist;
            }

            return $result;
        }
    }

}