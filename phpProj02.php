<?php
    require "phpProj01.php";
    $data = $conn->query("SELECT * FROM tasks");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <title>phpProj02</title>
    <style>
        .bigButt {
            height: 40px;
            width: 80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="mt-5 d-flex justify-content-center" method="POST" action="phpProj03.php">
            <div class="form-group mb-2 col-4">
                <!-- <label>Create</label> -->
                <input type="text" class="form-control" placeholder="Enter Tasks" name="myTask">
            </div>
            <button type="submit" class="btn btn-sm btn-primary ms-3 bigButt" name="submit">Create</button>
        </form>
        <!-- table -->
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $data->fetch(PDO::FETCH_OBJ)): ?>
                <tr>
                    <td><?php echo $row->id; ?>
                    </td>
                    <td><?php echo $row->name; ?>
                    </td>
                    <td><?php echo $row->created_at; ?>
                    </td>
                    <td><a class="btn btn-sm btn-danger"
                            href="phpProj03.php?del_id=<?php echo $row->id;?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <footer class="text-muted foot-note text-center">Sazzad-Saju &copy; 2022</footer>
        <br>
    </div>
</body>

</html>