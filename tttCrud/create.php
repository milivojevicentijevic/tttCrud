<?php
include 'db.php';
// insert one of data
if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['score'])) {
        $name = $_POST['name'];
        $score = $_POST['score'];

        $insert_query = "INSERT INTO demo_table (name, score) VALUES ('$name','$score')";  
        $conn->query($insert_query) or die($conn->error);

        $conn->close();
        header('location: index.php');
    }
}
// select one of data to update
if(isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $select_id_query = "SELECT * FROM demo_table WHERE id=$id";
    $result = $conn->query($select_id_query) or die($conn->error);

    if($result->num_rows > 0) {
        while ( $row = $result->fetch_assoc()) {
            $name = $row['name'];
            $score = $row['score'];
            $id = $row['id'];
        }
    } 
    $conn->close();
}
// update one of data
if(isset($_POST['update'])) {
    $id = $_POST['id'];  // hidden input field
    $name = $_POST['name'];
    $score = $_POST['score'];

    $update_query= "UPDATE demo_table SET name ='$name', score ='$score' WHERE id=$id";
    $result = $conn->query($update_query) or die($conn->error);

    $conn->close();
    header('location: index.php');
}



?>