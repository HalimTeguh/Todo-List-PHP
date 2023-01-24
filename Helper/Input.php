<?php

function Input(string $data): string
{
    echo "$data\t: ";

    $request = fgets(STDIN);
    return trim($request);
}