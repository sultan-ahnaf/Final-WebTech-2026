 <?php

/*
    HOME TASK FINAL
    Commonly Used Built-in Functions in PHP

    Name: Ahnaf Tahmid Imroj
    ID: 22-48147-2
    University: AIUB
*/


echo "<h1>PHP Commonly Used Built-in Functions</h1>";


// ======================================================
// 1. strlen()
// Returns the length of a string.
// ======================================================

$text = "Hello PHP";

echo "<h2>1. strlen()</h2>";
echo strlen($text) . "<br>";


// ======================================================
// 2. str_word_count()
// Counts the number of words in a string.
// ======================================================

$text = "PHP is easy to learn";

echo "<h2>2. str_word_count()</h2>";
echo str_word_count($text) . "<br>";


// ======================================================
// 3. str_contains()
// Checks whether a string contains a specific word or text.
// ======================================================

$text = "I am learning PHP";

echo "<h2>3. str_contains()</h2>";

if (str_contains($text, "PHP")) {
    echo "The text contains PHP.<br>";
}


// ======================================================
// 4. strpos()
// Finds the position of the first occurrence of a substring.
// ======================================================

$text = "Hello PHP";

echo "<h2>4. strpos()</h2>";
echo "PHP starts at position: " . strpos($text, "PHP") . "<br>";


// ======================================================
// 5. strtoupper()
// Converts a string to uppercase.
// ======================================================

$text = "hello php";

echo "<h2>5. strtoupper()</h2>";
echo strtoupper($text) . "<br>";


// ======================================================
// 6. strtolower()
// Converts a string to lowercase.
// ======================================================

$text = "HELLO PHP";

echo "<h2>6. strtolower()</h2>";
echo strtolower($text) . "<br>";


// ======================================================
// 7. str_replace()
// Replaces a specific part of a string.
// ======================================================

$text = "I like Java";

echo "<h2>7. str_replace()</h2>";
echo str_replace("Java", "PHP", $text) . "<br>";


// ======================================================
// 8. strrev()
// Reverses a string.
// ======================================================

$text = "Hello";

echo "<h2>8. strrev()</h2>";
echo strrev($text) . "<br>";


// ======================================================
// 9. trim()
// Removes whitespace from the beginning and end of a string.
// ======================================================

$text = "   Hello PHP   ";

echo "<h2>9. trim()</h2>";
echo trim($text) . "<br>";


// ======================================================
// 10. explode()
// Splits a string into an array.
// ======================================================

$fruits = "Apple,Banana,Mango";

echo "<h2>10. explode()</h2>";

$fruitArray = explode(",", $fruits);

print_r($fruitArray);

echo "<br>";


// ======================================================
// 11. implode()
// Joins array elements into a string.
// ======================================================

$fruits = array("Apple", "Banana", "Mango");

echo "<h2>11. implode()</h2>";
echo implode(", ", $fruits) . "<br>";


// ======================================================
// 12. substr()
// Returns a part of a string.
// ======================================================

$text = "Programming";

echo "<h2>12. substr()</h2>";
echo substr($text, 0, 6) . "<br>";


// ======================================================
// 13. is_int()
// Checks whether a value is an integer.
// ======================================================

$number = 25;

echo "<h2>13. is_int()</h2>";

if (is_int($number)) {
    echo "The value is an integer.<br>";
}


// ======================================================
// 14. is_float()
// Checks whether a value is a floating-point number.
// ======================================================

$number = 25.5;

echo "<h2>14. is_float()</h2>";

if (is_float($number)) {
    echo "The value is a float.<br>";
}


// ======================================================
// 15. is_nan()
// Checks whether a value is Not a Number (NaN).
// ======================================================

$number = acos(2);

echo "<h2>15. is_nan()</h2>";

if (is_nan($number)) {
    echo "The value is NaN.<br>";
}


// ======================================================
// 16. is_numeric()
// Checks whether a value is a number or numeric string.
// ======================================================

$value = "12345";

echo "<h2>16. is_numeric()</h2>";

if (is_numeric($value)) {
    echo "The value is numeric.<br>";
}


// ======================================================
// 17. round()
// Rounds a number to the nearest integer.
// ======================================================

$number = 12.56;

echo "<h2>17. round()</h2>";
echo round($number) . "<br>";


// ======================================================
// 18. define()
// Defines a named constant.
// ======================================================

define("UNIVERSITY", "AIUB");

echo "<h2>18. define()</h2>";
echo UNIVERSITY . "<br>";


// ======================================================
// 19. date()
// Formats a date and time.
// ======================================================

echo "<h2>19. date()</h2>";
echo date("Y-m-d") . "<br>";


// ======================================================
// 20. strtotime()
// Converts a date/time string into a Unix timestamp.
// ======================================================

$date = "2026-08-20";

echo "<h2>20. strtotime()</h2>";
echo strtotime($date) . "<br>";


// ======================================================
// 21. time()
// Returns the current Unix timestamp.
// ======================================================

echo "<h2>21. time()</h2>";
echo time() . "<br>";


// ======================================================
// 22. date_default_timezone_set()
// Sets the default timezone used by date/time functions.
// ======================================================

date_default_timezone_set("Asia/Dhaka");

echo "<h2>22. date_default_timezone_set()</h2>";
echo date("Y-m-d H:i:s") . "<br>";


// ======================================================
// 23. date_default_timezone_get()
// Gets the current default timezone.
// ======================================================

echo "<h2>23. date_default_timezone_get()</h2>";
echo date_default_timezone_get() . "<br>";


// ======================================================
// 24. json_encode()
// Converts a PHP value into a JSON formatted string.
// ======================================================

$student = array(
    "name" => "Ahnaf",
    "id" => "22-48147-2"
);

echo "<h2>24. json_encode()</h2>";
echo json_encode($student) . "<br>";


// ======================================================
// 25. json_decode()
// Converts a JSON string into a PHP value.
// ======================================================

$jsonData = '{"name":"Ahnaf","id":"22-48147-2"}';

echo "<h2>25. json_decode()</h2>";

$decodedData = json_decode($jsonData);

echo $decodedData->name . "<br>";
echo $decodedData->id . "<br>";


// ======================================================
// 26. array()
// Creates an array.
// ======================================================

echo "<h2>26. array()</h2>";

$subjects = array("PHP", "HTML", "CSS");

print_r($subjects);

echo "<br>";


// ======================================================
// 27. array_keys()
// Returns all the keys of an array.
// ======================================================

$student = array(
    "name" => "Ahnaf",
    "id" => "22-48147-2",
    "university" => "AIUB"
);

echo "<h2>27. array_keys()</h2>";

print_r(array_keys($student));

echo "<br>";


// ======================================================
// 28. array_merge()
// Combines two or more arrays.
// ======================================================

$array1 = array("PHP", "HTML");
$array2 = array("CSS", "JavaScript");

echo "<h2>28. array_merge()</h2>";

$mergedArray = array_merge($array1, $array2);

print_r($mergedArray);

echo "<br>";


// ======================================================
// 29. array_push()
// Adds one or more elements to the end of an array.
// ======================================================

$subjects = array("PHP", "HTML");

echo "<h2>29. array_push()</h2>";

array_push($subjects, "CSS");

print_r($subjects);

echo "<br>";


// ======================================================
// 30. array_reverse()
// Reverses the order of an array.
// ======================================================

$numbers = array(1, 2, 3, 4, 5);

echo "<h2>30. array_reverse()</h2>";

print_r(array_reverse($numbers));

echo "<br>";


// ======================================================
// 31. sizeof()
// Returns the number of elements in an array.
// ======================================================

$students = array("Ahnaf", "Rahim", "Karim");

echo "<h2>31. sizeof()</h2>";
echo sizeof($students) . "<br>";


// ======================================================
// 32. count()
// Counts the number of elements in an array.
// ======================================================

$students = array("Ahnaf", "Rahim", "Karim", "Hasan");

echo "<h2>32. count()</h2>";
echo count($students) . "<br>";


// ======================================================
// 33. sort()
// Sorts an array in ascending order.
// ======================================================

$numbers = array(50, 10, 30, 20, 40);

echo "<h2>33. sort()</h2>";

sort($numbers);

print_r($numbers);

echo "<br>";


echo "<hr>";
echo "<h2>End of Home Task</h2>";

?>
