function myFunction($input) {
  // Check if the input is an array using is_array()
  if (!is_array($input)) {
    // Handle the error gracefully, for example by returning an error message or throwing an exception
    return "Error: Input must be an array";
  }

  // Process the array
  foreach ($input as $value) {
    // Your code to process each element of the array
  }
}