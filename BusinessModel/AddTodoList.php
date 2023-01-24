<?php

function AddTodoList(string $data)
{
    global $todo;

    $number = sizeof($todo) + 1;

    $todo[$number] = $data;
}