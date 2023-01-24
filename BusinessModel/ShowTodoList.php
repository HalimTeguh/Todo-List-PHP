<?php


function ShowTodoList()
{
    global $todo;

    echo "=====TODO LIST=====" . PHP_EOL;

    foreach ($todo as $key => $value) {
        echo "$key. $value" . PHP_EOL;
    }
}