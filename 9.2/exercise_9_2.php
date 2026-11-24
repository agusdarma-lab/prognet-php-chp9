
<?php

// Function to calculate average and median
function calculateAverageMedian($numbers) {

    // Calculate average
    $average = array_sum($numbers) / count($numbers);

    // Sort numbers in ascending order
    sort($numbers);

    // Calculate median
    $count = count($numbers);
    $middle = floor($count / 2);

    if ($count % 2 == 0) {
        $median = ($numbers[$middle - 1] + $numbers[$middle]) / 2;
    } else {
        $median = $numbers[$middle];
    }

    // Return average and median
    return [
        "average" => $average,
        "median" => $median
    ];
}

// Test data
$numbers = [10, 20, 30, 40, 50];

// Call function
$result = calculateAverageMedian($numbers);

// Display output
echo "Exercise 9.2 - Average and Median\n\n";

echo "Original Numbers:\n";
print_r($numbers);

echo "\nAverage: " . $result["average"];
echo "\nMedian: " . $result["median"];

?>
