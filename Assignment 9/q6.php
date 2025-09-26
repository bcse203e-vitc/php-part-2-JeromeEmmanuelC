<?php
date_default_timezone_set('Asia/Kolkata'); 
$currentDateTime = date('d-m-Y H:i:s');
echo "Current Date and Time: " . $currentDateTime . "<br><br>";

echo '<form method="post">
        Enter your Date of Birth (YYYY-MM-DD): 
        <input type="date" name="dob" required>
        <input type="submit" value="Calculate">
      </form>';

if (isset($_POST['dob'])) {
    $dob = $_POST['dob'];
    $dobDate = new DateTime($dob);
    
    $today = new DateTime();
    
    $currentYearBirthday = DateTime::createFromFormat('Y-m-d', $today->format('Y') . '-' . $dobDate->format('m-d'));
    
    if ($currentYearBirthday < $today) {
        $currentYearBirthday->modify('+1 year');
    }
    
    $interval = $today->diff($currentYearBirthday);
    echo "Days left until your next birthday: " . $interval->days;
}
?>

