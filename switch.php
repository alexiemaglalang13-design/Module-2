<?php include 'header.php'; ?>

<?php

echo "<h1>Student Grading System</h1>";

echo "<ul>";

$grades = [1.00, 1.25, 1.5, 1.75, 2.0, 2.75, 3.0, 5.0];

foreach ($grades as $grade) {
    switch (true) {
        case ($grade == 1.00):
            echo "<li>" . "Grade: " . $grade . " - Excellent" . "</li>\n";
            break;
        case ($grade >= 1.00 && $grade <= 1.25):
            echo "<li>" . "Grade: " . $grade . " - Very Good" . "</li>\n";
            break;
        case ($grade >= 1.50 && $grade < 1.75):
            echo "<li>" . "Grade: " . $grade . " - Good" . "</li>\n";
            break;
        case ($grade >= 1.75 && $grade < 2.00):
            echo "<li>" . "Grade: " . $grade . " - Satisfactory" . "</li>\n";
            break;
        case ($grade >= 2.00 && $grade < 2.50):
            echo "<li>" . "Grade: " . $grade . " - Needs Improvement" . "</li>\n";
            break;
        case ($grade >= 2.50 && $grade < 3.00):
            echo "<li>" . "Grade: " . $grade . " - Below Expectations" . "</li>\n";
            break;
        case ($grade >= 3.00 && $grade < 5.00):
            echo "<li>" . "Grade: " . $grade . " - Fail" . "</li>\n";
            break;
    }
}

echo "</ul>";

?>
<?php include 'footer.php'; ?>
