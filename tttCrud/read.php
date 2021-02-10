<?php
    include 'db.php';
    $select_query = "SELECT * FROM demo_table";
    $results = $conn->query($select_query);
    while ($row = $results->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['score'] ?></td>
            <td><a class="btn btn-primary" href="index.php?id=<?php echo $row['id']; ?>" role="button">Update</a></td>
        </tr>
    <?php endwhile;
    $conn->close();
?>