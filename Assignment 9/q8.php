<?php
$data = "Call me at 9876543210 or at office 9123456789. You can also contact 9988776655.";
file_put_contents("data.txt", $data);

$content = file_get_contents("data.txt");

preg_match_all('/\b[6-9][0-9]{9}\b/', $content, $matches);

if (!empty($matches[0])) {
    // Save the numbers to a new file numbers.txt
    $numbers = implode(PHP_EOL, $matches[0]);
    file_put_contents("numbers.txt", $numbers);
    echo "Mobile numbers extracted successfully:<br>";
    echo nl2br($numbers);
} else {
    echo "No valid mobile numbers found in the file.";
}
?>

