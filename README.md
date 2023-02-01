# Wrap() 

This function takes a string and a length as arguments, and returns the string with new lines added to ensure
that no line is longer than the specified length. If a line would exceed the specified length, the function breaks at word
boundaries, only breaking a word if it is longer than the specified length. Any whitespace between two words that
are broken into separate lines is replaced with a \n character.

#### Function Flow Diagarm
![flow-diagarm](image.png)

#### Complexity
Complexity of this function is O(n).

#### Requirements
- PHP 7.4 or above

#### How to use
- Intall PHP 7.4 or avobe in you system.
- Clone the project form the repository.
- Open your terminal and `cd` to the project folder
- Run `php ./example.php`

#### Example
```
require 'function.php';

$string = "Flexible talent development software, shaped by you. Totara combines skills and performance development to create lasting employee success.";
$length = 52;

$wrapString = wrap($string, $length);
echo $wrapString;
```

Output:
```
Flexible talent development software, shaped by you.
Totara combines skills and performance development
to create lasting employee success.
```




