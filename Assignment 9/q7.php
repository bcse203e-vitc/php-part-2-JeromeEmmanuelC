<?php
function calculateAverage($numbers) {
    // Check if the array is empty
    if (empty($numbers)) {
        throw new Exception("No numbers provided");
    }

    $sum = array_sum($numbers);
    
    $average = $sum / count($numbers);
    
    return $average;
}

$numbers1 = [10, 20, 30, 40, 50];
$numbers2 = []; // Empty array for testing error handling

try {
    $average = calculateAverage($numbers1);
    echo "Average of numbers: " . $average;
} catch (Exception $e) {
    // Handle exception
    echo "Error: " . $e->getMessage();
}
?>

