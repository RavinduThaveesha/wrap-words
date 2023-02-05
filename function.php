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
    $fillLength = $previousLength = 0;
    # this regular expression will match any sequence of one or more \n,\s characters.
    # if you want to extend to search other characters such as <br/> add them ex: /(\n|<br\/>)+/
    $filter = "/(\n)+/";
    
    # clean the string before tokenization.
    $cleanString = preg_replace($filter, $space, $string);
    # split string into an array of tokens.
    $tokens = str_split($cleanString, $length);
    
    # loop through the tokens and create wrap string.
    foreach ($tokens as $key => $token) {
        # reset fill.
        $fill = "";

        # remove whitespace if the first character is a whitespace to avoid empty spaces in left side.
        if ($token[0] == $space) {
            $token = substr($token, 1);
        }
      
        # remove previously selected part form the string.
        if ($previousLength) {
            $token = substr($token, $previousLength);

            # remove whitspaces between characters, ex: "g  w" to avoid <space>w situations.
            if ($token && $token[0] == $space) {
                $token = substr($token, 1);
            }
        }
      
        # get the filling length.
        $fillLength = $length - strlen($token);
      
        # select filling chunk from the next token.
        if ($fillLength > 0 && count($tokens) - 1 > $key) {
            $fill = substr($tokens[$key+1], 0, $fillLength);
        }
      
        # update previous length with new length.
        $previousLength = $fillLength;
        
        # join the line into wrap string.
        $wrap .= $token.$fill.$break;
    }

    return trim($wrap);
}