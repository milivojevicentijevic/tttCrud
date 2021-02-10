<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + MySQL CRUD Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center">
        <h1>PHP + MySQL CRUD Demo</h1>
        <p>Create, read, update and delete records below</p>
        <table class="table">
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>
        <form action="create.php" method="POST" class="form-inline m-2 d-flex justify-content-center">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control m-2">
            <label for="score">Score</label>
            <input type="number" id="score" name="score" class="form-control m-2">
            <button name="submit" type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
</html>