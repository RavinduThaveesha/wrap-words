# Wrap() 

This function takes a string and a length as arguments, and returns the string with new lines added to ensure
that no line is longer than the specified length. If a line would exceed the specified length, the function breaks at word
boundaries, only breaking a word if it is longer than the specified length.

#### Files
| Name            | Description                                 | 
| :---            | :---                                       | 
| function.php    | Contains the wrap function.                 |
| test.php        | Contains the test cases.                    |
| example.php     | Contains the sample implementation.         |

#### Function Flow Diagarm
![flow-diagarm](https://github.com/RavinduThaveesha/wrap-words/blob/main/images/flow-diagram.jpg)

#### Time Complexity
- Time complexity of this function is O(n).

![big-o](https://github.com/RavinduThaveesha/wrap-words/blob/main/images/big-o.jpg)

#### Requirements
- PHP 7.4 or above

#### How to use
- Intall PHP 7.4 or avobe in you system.
- Clone the project form the repository.
- Open your terminal and `cd` to the project folder.
- Run `php ./example.php`.

#### Examples
```
$string = "Flexible talent development software, shaped by you. Totara combines skills and performance development to create lasting employee success.";
$length = 52;
```

Output:
```
Flexible talent development software, shaped by you.
Totara combines skills and performance development
to create lasting employee success.
```

```
$string = "A very long woooooooooooooooooord. and something";
$length = 8;
```

Output:
```
A very
long
wooooooo
oooooooo
ooord.
and
somethin
g
```

#### How to Run Test
- Add your test case on `test.php`.
- Open your terminal and `cd` to the project folder.
- Run `php ./test.php`.

Example:
```
assertWrapOutput("The quick brown fox jumped over the lazy dog.", 20, "The quick brown fox\njumped over the lazy\ndog.");
```

Output:

- Test Passed

![test-passed](https://github.com/RavinduThaveesha/wrap-words/blob/main/images/test-passed.png)

- Test Failed

![test-failed](https://github.com/RavinduThaveesha/wrap-words/blob/main/images/test-failed.png)


#### Future Enhancements
- Add support for more $length break parameters. ex: `<br/>`
- Add support for more word break parameters. ex: `-`
