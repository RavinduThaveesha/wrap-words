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


assertWrapOutput("", 10, "Error: Input string cannot be empty.");
#assertWrapOutput("An example of a long word is: Supercalifragulistic", 15, "An example of a \n long word is \n Supercalifragulistic");