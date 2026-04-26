<?php

include('config.php');
if (isset($_POST['add_task'])) {
    // اضافة بداخل الداتا بيس فقطط 
    $task_name = $_POST['task'];
    $sql_insert = "INSERT INTO tasks(task_name) VALUES ('$task_name')";
    if (mysqli_query($conn, $sql_insert)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// عرض المعلومات للشاشة
$sql_select = "SELECT * FROM `tasks` ORDER BY id DESC";
$result = mysqli_query($conn, $sql_select);



?>

<!DOCTYPE html>
<html lang="en" >

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow border-0">
                    <div class="card-header bg-dark text-white text-center py-3">
                        <h4 class="mb-0"> My To-Do List</h4>
                    </div>
                    <div class="card-body p-4">

                        <form method="post" action="" class="d-flex mb-4">
                            <input type="text" name="task" class="form-control me-2 form-control-lg" placeholder="What needs to be done?" required>
                            <button type="submit" name="add_task" class="btn btn-success btn-lg px-4">Add Task</button>
                        </form>

                        <table class="table table-hover table-bordered text-center align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Task Number</th>
                                    <th>Task Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['task_name'] ?></td>
                                        <td><?php echo $row['status'] ?></td>
                                        <td><?php echo $row['created_at'] ?></td>
                                        <td>
                                            <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                            <a class="btn btn-primary btn-sm" href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>