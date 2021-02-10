<?php
    include 'db.php';
    if (isset($_POST['submit'])) {
        if (!empty($_POST['name']) && !empty($_POST['score'])) {
            $name = $_POST['name'];
            $score = $_POST['score'];
            $insert_query = "INSERT INTO demo_table (name, score) VALUES ('$name','$score')";
            $conn->query($insert_query);
            $conn->close();
            header('location: index.php');
        }
    }
?>