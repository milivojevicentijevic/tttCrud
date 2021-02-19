<?php
    include 'db.php'; ?>
    <style>
        <?php include 'styles.css'; ?>
    </style>
    <?php
    $select_query = "SELECT * FROM demo_table";
    $results = $conn->query($select_query);
    while ($row = $results->fetch_assoc()): ?>
        <?php if (isset($_GET['edit']) && $row['id'] == $_GET['edit']): ?>
            <form action="create.php" method="POST">
                <tr>
                    <td><input type="text" name="name" id="name" class="form-control text-center" value="<?php echo $row['name']; ?>"></td>
                    <td><input type="number" name="score" id="score" class="form-control text-center" value="<?php echo $row['score']; ?>"></td>    
                    <td><button name="update" type="submit" class="btn btn-primary">Update</button></td>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                </tr>
            </form>
        <?php else: ?>
            <tr>
                <td class="col-sm-4"><?php echo $row['name'] ?></td>
                <td class="col-sm-4"><?php echo $row['score'] ?></td>
                <td>
                    <a class="btn btn-primary" href="index.php?edit=<?php echo $row['id']; ?>" role="button">Update</a>
                    <a class="btn btn-danger" href="create.php?delete=<?php echo $row['id']; ?>" role="button">Delete</a>
                </td>
        <?php endif; ?>
    <?php endwhile;
    $conn->close();
?>