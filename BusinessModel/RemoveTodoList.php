<?php

function RemoveTodoList(int $data)
{
    global $todo;

    // 1. Halim
    // 2. Teguh
    // 3. Saputro

    if ($data > sizeof($todo)) {
        return False;
    }

    for ($data; $data < sizeof($todo); $data++) {
        $todo[$data] = $todo[$data + 1];
    }

    unset($todo[$data]);
    return true;
}