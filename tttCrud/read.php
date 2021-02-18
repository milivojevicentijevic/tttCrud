<?php
    include 'db.php';
    $select_query = "SELECT * FROM demo_table";
    $results = $conn->query($select_query);
    while ($row = $results->fetch_assoc()): ?>
        <?php if (isset($_GET['edit']) && $row['id'] == $_GET['edit']): ?>
            <form action="create.php" method="POST" class="form-inline m-2 d-flex justify-content-center">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control m-2" value="<?php echo $row['name']; ?>">
                <label for="score">Score</label>
                <input type="number" id="score" name="score" class="form-control m-2" value="<?php echo $row['score']; ?>">
                <button name="update" type="submit" class="btn btn-primary">Update</button>
            </form>
        <?php else: ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['score'] ?></td>
                <td><a class="btn btn-primary" href="index.php?edit=<?php echo $row['id']; ?>" role="button">Update</a></td>
            </tr>
        <?php endif; ?>
    <?php endwhile;
    $conn->close();
?>