<?php

require 'function.php';

function assertWrapOutput(string $string, int $length, string $expectedOutput) {
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
assertWrapOutput("", 0, "Error: Input string cannot be empty.");
assertWrapOutput("The quick brown fox jumped over the lazy dog.", 20, "The quick brown fox\njumped over the lazy\ndog.");
assertWrapOutput("A very long woooooooooooord.", 8, "A very\nlong\nwooooooo\nooooord.");
assertWrapOutput("A very long woooooooooooooooooord. and something", 8, "A very\nlong\nwooooooo\noooooooo\nooord.\nand\nsomethin\ng");
assertWrapOutput("An example of a long word is: Supercalifragulistic", 15, "An example of a\nlong word is:\nSupercalifragul\nistic");
assertWrapOutput("Lengthofthisistwenty", 20, "Lengthofthisistwenty");
assertWrapOutput("Lengthof thisistwenty", 5, "Lengt\nhof\nthisi\nstwen\nty");
assertWrapOutput("nospacesyetverylongword", 8, "nospaces\nyetveryl\nongword");
assertWrapOutput("test\ntesting", 4, "test\ntest\ning");
assertWrapOutput("test\n\ntesting", 4, "test\ntest\ning");
assertWrapOutput("test testing", 4, "test\ntest\ning");
assertWrapOutput("test  testing", 4, "test\ntest\ning");
assertWrapOutput(12345678910, 4, "1234\n5678\n910");
assertWrapOutput("12345678910", 4, "1234\n5678\n910");
assertWrapOutput("1234567891 0", 4, "1234\n5678\n91\n0");
assertWrapOutput("test<br/>testing", 4, "test\ntest\ning");
assertWrapOutput("test test<br/>ing", 4, "test\ntest\ning");
assertWrapOutput("This is a test string", 10, "This is a\ntest\nstring");
assertWrapOutput("This is another test string", 12, "This is\nanother test\nstring");
assertWrapOutput("This string is quite long", 8, "This\nstring\nis quite\nlong");
