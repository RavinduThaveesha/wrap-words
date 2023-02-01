<?php

function wrap(string $string, int $length) : string {

    # return if string is empty and stop the process.
    if ($string === "") {
        return "Error: Input string cannot be empty.";
    } 

    $wrap_string = "";
    $line = "";
    $space = " ";

    $tokens = explode($space, $string);

    return $wrap_string;
}