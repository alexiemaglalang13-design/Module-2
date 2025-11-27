<?php include 'header.php'; ?>

<?php 
$students = ['Alexie Maglalang', 'Traina Carbungco', 'Abea Aquino', 'Elaica Quintana', 'Llenoir Palo'];

$attendance = ['present', 'absent', 'present', 'absent', 'present'];

echo "<h1>Student Attendance</h1>";
echo "<ul>";

for ($index = 0; $index < count($students); $index++) {
    $student = $students[$index];
    $status = $attendance[$index];

    echo "<li>" . $student . " is " . $status . ".</li>";
}

echo "</ul>";
?>

<?php include 'footer.php'; ?>
