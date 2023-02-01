<?php

function wrap(string $string = "", int $length = 100) : string {
    # return if string is empty and stop the process.
    if ($string === "") {
        return "Error: Input string cannot be empty.";
    } 

    # define necessary variables.
    $wrapString = "";
    $line = "";
    $space = " ";
    $break = "\n";
    # split string into an array of tokens.
    $tokens = explode($space, $string);
    
    # loop through the tokens and create wrap string.
    foreach ($tokens as $token) {
        # check wether line length and current word length exceed the break length.
        if (strlen($line) + strlen($token) <= $length) { 
            $line .= trim($token).$space;
        } else {
            # join the line to wrap string.
            $wrapString .= trim($line).$break;
            $line = trim($token).$space;
        }
    }

    # join the last line to wrap string.
    $wrapString .= trim($line);
    return $wrapString;
}