<?php
$studentFile = "students.txt";
$errorFile = "errors.log";

if (!file_exists($studentFile)) {
    die("Student file not found.");
}

$lines = file($studentFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>";

foreach ($lines as $line) {
    $line = trim($line);
    $fields = explode(",", $line);

    if (count($fields) != 3) {
        file_put_contents($errorFile, "Invalid format: $line" . PHP_EOL, FILE_APPEND);
        continue;
    }

    list($name, $email, $dob) = $fields;

    if (!preg_match('/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/', $email)) {
        file_put_contents($errorFile, "Invalid email: $line" . PHP_EOL, FILE_APPEND);
        continue;
    }

    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;

    echo "<tr><td>$name</td><td>$email</td><td>$age</td></tr>";
}

echo "</table>";
?>

