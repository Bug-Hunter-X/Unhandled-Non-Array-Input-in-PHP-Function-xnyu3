function myFunction() {
  // This function will cause an error if the input is not an array
  if (!is_array($input)) {
    return "Input must be an array";
  }

  // Assuming input is an array, do something with the input
  foreach ($input as $value) {
    // Do something with the value
  }
}