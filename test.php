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

# test cases reference: https://www.php.net/manual/en/function.wordwrap.php
assertWrapOutput("", 10, "Error: Input string cannot be empty.");
assertWrapOutput("The quick brown fox jumped over the lazy dog.", 20, "The quick brown fox\njumped over the lazy\ndog.");
assertWrapOutput("Lengthofthisistwenty", 20, "Lengthofthisistwenty");
assertWrapOutput("A very long woooooooooooord.", 8, "A very\nlong\nwooooooo\nooooord.");
assertWrapOutput("A very long woooooooooooooooooord. and something", 8, "A very\nlong\nwooooooo\noooooooo\nooord.\nand\nsomethin\ng");
assertWrapOutput("nospacesyetverylongword", 8, "nospaces\nyetveryl\nongword");