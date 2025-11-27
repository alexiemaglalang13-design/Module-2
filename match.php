<?php include 'header.php'; ?>

<?php
$students = ['Alexie', 'Traina', 'Abea', 'Elaica', 'Llenoir'];
$departments = ['Information Technology', 'Aeronautical Engineering', 'Tourism', 'Nursing', 'Architecture'];
$buildings = ['SJH', 'SH', 'STL', 'MGN', 'APS'];

echo "<h1>Student Courses and Building Location</h1>";
echo "<ul>";

for ($index = 0; $index < count($students); $index++) {
    $employee = $students[$index]; 
    $department = $departments[$index];  

    $building = match($department) {
        'Information Technology' => $buildings[0],
        'Aeronautical Engineering' => $buildings[1],
        'Tourism' => $buildings[2],
        'Nursing' => $buildings[3],
        'Architecture' => $buildings[4],
        default => 'Unknown Building',
    };

    echo "<li>" . $employee . " is a/an " . $department . " student, located in " . $building . " building.</li>";
}

echo "</ul>";
?>

<?php include 'footer.php'; ?>
