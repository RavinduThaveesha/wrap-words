<?php

/**
 * Wraps a string to a given number of length.
 *
 * This function takes a string and a length as arguments, and returns the string with new lines added to ensure
 * that no line is longer than the specified length. If a line would exceed the specified length, the function breaks at word
 * boundaries, only breaking a word if it is longer than the specified length. 
 * 
 * Complexity of this function is O(n).
 *
 * @param string $string - The input string to wrap.
 * @param int $length [optional] - The maximum length of a line. Default is 100 characters.
 * @return string The wrapped string.
 */

function wrap(string $string = "", int $length = 100) : string {
    # return if string is empty and stop the process.
    if ($string === "") {
        return "Error: Input string cannot be empty.";
    } 

    # return if string is empty and stop the process.
    if (!is_int($length) || $length <= 0) {
        return "Error: Length must be a positive integer.";
    }

    # define necessary variables.
    $wrap = "";
    $space = " ";
    $break = "\n";
    $line = "";
    # this regular expression will match any sequence of one or more \n,\s characters.
    # if you want to extend to search other characters such as <br/> add them ex: /(\n|<br\/>)+/
    $filter = "/(\n)+/";
    
    # clean the string before tokenization.
    $cleanString = preg_replace($filter, $space, $string);
    # split string into an array of tokens.
    $tokens = explode($space, $cleanString);
    
    # loop through the tokens and create wrap string.
    foreach ($tokens as $token) {
        # if $line + $token length is less than the $length then add to $length and continue to next iteration.
        if (strlen($line.$token) <= $length) {
            $line .= $token.$space; 
            continue;
        } 
        
        # join the line to the wrap string and trim right side.
        if ($line) {
            $wrap .= rtrim($line).$break;
        }
        
        # if the $token length is grater than $length then split by $length.
        if (strlen($token) > $length) {
            $chunks = str_split($token, $length);
            # join the line to wrap string.
            $wrap .= implode($break, $chunks).$break;
            $line = "";
        } else {
            $line = $token.$space;
        }
    }

    # join the last line to wrap string and trim sides.
    $wrap .= $line;
    return trim($wrap);
}