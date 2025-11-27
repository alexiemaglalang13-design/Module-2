<?php include 'header.php'; ?>

<?php 
$students = ['Alexie', 'Traina', 'Abea', 'Elaica', 'Llenoir'];
$events_attended = [4, 2, 1, 3, 5]; 

echo "<h1>Event Participation and Certificate Eligibility</h1>";
echo "<ul>";

for ($index = 0; $index < count($students); $index++) {
    $student = $students[$index];
    $events = $events_attended[$index];

    if ($events >= 3) {
        echo "<li>" . $student . " is eligible for a certificate for attending " . $events . " events.</li>";
    } else {
        echo "<li>" . $student . " is not eligible for a certificate. They attended only " . $events . " events.</li>";
    }
}
echo "</ul>";
?>

<?php include 'footer.php'; ?>
