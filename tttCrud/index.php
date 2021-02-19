<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + MySQL CRUD Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center col-md-6 offset-md-3">
        <h1>PHP + MySQL CRUD Demo</h1>
        <p>Create, read, update and delete records below</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Score</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>
        <form action="create.php" method="POST" class="form-inline m-2 d-flex justify-content-center">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control m-2">
            <label for="score" class="form-label">Score</label>
            <input type="number" id="score" name="score" class="form-control m-2">
            <button name="submit" type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
</html>