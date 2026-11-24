
<?php

// Function to get unique strings from an array
function uniqueStrings($array) {
    $unique = [];

    foreach ($array as $value) {
        if (!in_array($value, $unique, true)) {
            $unique[] = $value;
        }
    }

    return $unique;
}

// Test data
$fruits = [
    "Apple",
    "Orange",
    "Mango",
    "Apple",
    "Banana",
    "Orange"
];

// Call function
$result = uniqueStrings($fruits);

// Display output
echo "Exercise 9.1 - Unique Strings\n\n";

echo "Original Array:\n";
print_r($fruits);

echo "\nUnique Strings:\n";
print_r($result);

?>
