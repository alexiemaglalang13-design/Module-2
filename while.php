<?php include 'header.php'; ?>

    <?php 
    $students = ['Alexie Maglalang', 'Traina Carbungco', 'Abea Aquino', 'Elaica Quintana', 'Llenoir Palo'];
    $index = 0;
    $count = 5;

    echo "<h1>Student Names</h1>";
    echo "<ul>";

    while ($index < $count) {
        echo "<li>" . $students[$index] . "</li>";
        $index++; 
    }
?>

<?php include 'footer.php'; ?>