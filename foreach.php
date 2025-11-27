<?php include 'header.php'; ?>

<?php
$subjects = ['DWEB', 'IMAN', 'ITN', 'PROBSTAT', 'CALBPHYS', 'PE'];
$teachers = ['Mr. Almocera', 'Mrs. Rivera', 'Mrs. Chua', 'Ms. Pingul', 'Mr. Ocol', 'Ms. Samia'];

echo "<h1>Subjects and Teachers</h1>";
echo "<ul>";

foreach ($subjects as $index => $subject) {
    echo "<li><strong>$subject:</strong> " . $teachers[$index] . "</li>";
}

echo "</ul>";
?>

<?php include 'footer.php'; ?>
