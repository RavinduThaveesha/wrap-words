<?php

require 'function.php';

function assertWrapOutput($string, $length, $expectedOutput) {
    $actualOutput = wrap($string, $length);
    if ($actualOutput === $expectedOutput) {
        echo "Test passed\n";
    } else {
        echo "Test failed\n";
        echo "Input string: $string\n";
        echo "Line length: $length\n";
        echo "Expected output: $expectedOutput\n";
        echo "Actual output: $actualOutput\n";
    }
}

# test cases reference: 
# 1. https://www.php.net/manual/en/function.wordwrap.php
# 2. https://www.w3schools.com/php/func_string_wordwrap.asp
assertWrapOutput("", 10, "Error: Input string cannot be empty.");
assertWrapOutput("test testing", 0, "Error: Length must be a positive integer.");
assertWrapOutput("test testing", -1, "Error: Length must be a positive integer.");
assertWrapOutput("test testing", '0', "Error: Length must be a positive integer.");
assertWrapOutput("test testing", '-1', "Error: Length must be a positive integer.");
assertWrapOutput("test testing", 4, "test\ntest\ning");
assertWrapOutput("The quick brown fox jumped over the lazy dog.", 20, "The quick brown fox\njumped over the lazy\ndog.");
assertWrapOutput("A very long woooooooooooord.", 8, "A very\nlong\nwooooooo\nooooord.");
assertWrapOutput("A very long woooooooooooooooooord. and something", 8, "A very\nlong\nwooooooo\noooooooo\nooord.\nand\nsomethin\ng");
assertWrapOutput("An example of a long word is: Supercalifragulistic", 15, "An example of a\nlong word is:\nSupercalifragul\nistic");
assertWrapOutput("Lengthofthisistwenty", 20, "Lengthofthisistwenty");
assertWrapOutput("nospacesyetverylongword", 8, "nospaces\nyetveryl\nongword");
