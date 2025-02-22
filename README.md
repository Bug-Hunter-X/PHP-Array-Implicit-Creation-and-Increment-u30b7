# PHP Array Implicit Creation and Increment Bug

This repository demonstrates a subtle bug in PHP related to the implicit creation of array elements when using the increment operator (`++`) on a non-existent index.

The `bug.php` file contains code that illustrates the issue. The function `incrementArrayValue` is designed to increment the value at a specific index in an array, handling the case where the index doesn't initially exist by setting it to 0 before incrementing. However, this implicit creation can be unexpected and lead to errors if not handled carefully.

The `bugSolution.php` file provides a corrected version of the function that explicitly checks for the existence of the index before attempting to increment it. This eliminates the unexpected creation of array elements.

This example highlights the importance of understanding PHP's implicit type coercion and the need for explicit checks when working with arrays, particularly in situations where the existence of certain indexes is not guaranteed.