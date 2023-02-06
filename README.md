# Wrap() 

This function takes a string and a length as arguments, and returns the string with new lines added to ensure
that no line is longer than the specified length. If a line would exceed the specified length, the function breaks at word
boundaries, only breaking a word if it is longer than the specified length.

##### Demo: https://replit.com/@RavinduThaveesh/WrapWord#main.php

#### Files
| Name            | Description                                 | 
| :---            | :---                                       | 
| function.php    | Contains the wrap function.                 |
| test.php        | Contains the test cases.                    |
| example.php     | Contains the sample implementation.         |

#### Function Flow Diagarm
![flow-diagarm](https://github.com/RavinduThaveesha/wrap-words/blob/main/images/flow-diagram.jpeg)

#### Time Complexity
- Time complexity of this function is O(n).

![big-o](https://github.com/RavinduThaveesha/wrap-words/blob/main/images/big-o.jpg)

#### Requirements
- PHP 7.4 or above

#### How to use
- Install PHP 7.4 or above in your system.
- Clone the project from the repository.
- Open your terminal and `cd` to the project folder.
- Run `php ./example.php`.

#### Examples
```
$string = "If you're so afraid of failure, you will never succeed.";
$length = 22;

Output:
If you're so afraid of
failure, you will
never succeed.
```

```
$string = "The quick brown fox jumped over the lazy dog";
$length = 20;

Output:
The quick brown fox
jumped over the lazy
dog
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
