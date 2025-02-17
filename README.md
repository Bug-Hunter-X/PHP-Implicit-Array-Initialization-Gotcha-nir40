# PHP Implicit Array Initialization Bug

This repository demonstrates a subtle but potentially problematic aspect of PHP's handling of array access.  When you attempt to access or modify a non-existent array element, PHP will implicitly create that element, potentially leading to unexpected array structures. This can cause issues in functions where you're trying to increment specific array entries because the function will unexpectedly add a new element to the array.

The `bug.php` file contains the problematic code, and `bugSolution.php` offers a corrected version.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe that the output array includes additional entries at unexpected indices, rather than simply updating existing elements.
