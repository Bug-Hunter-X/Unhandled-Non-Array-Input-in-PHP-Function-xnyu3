# Unhandled Non-Array Input in PHP Function

This repository demonstrates a common error in PHP:  failure to handle non-array inputs gracefully. The `bug.php` file contains a function that assumes its input is always an array.  If a non-array is passed, it will cause an error.  The `bugSolution.php` file shows how to properly handle this situation using type checking and error handling.