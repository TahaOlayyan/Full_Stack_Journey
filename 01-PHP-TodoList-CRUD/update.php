<?php
include('config.php');

// سحب الـ id من الرابط
$id = $_GET['id'];

// سحب بيانات المهمة من الداتابيز
$sql_select = "SELECT * FROM tasks WHERE id = '$id'";
$result_select = mysqli_query($conn, $sql_select);

// بدون while، لأنها مهمة وحدة بس
$row = mysqli_fetch_assoc($result_select);

if (isset($_POST['update_btn'])) {
    $new_id = $_POST['id'];
    $new_task = $_POST['task_name'];
    $sql_update = "UPDATE tasks SET task_name = '$new_task' WHERE id = '$new_id'";
    $result_update = mysqli_query($conn, $sql_update);

    if ($result_update) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h4 class="mb-0">✏️ Update Task</h4>
                    </div>
                    <div class="card-body p-4">

                        <form method="POST" action="">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                            <div class="mb-3">
                                <label class="form-label fw-bold">Task Name:</label>
                                <input type="text" name="task_name" class="form-control form-control-lg" value="<?php echo $row['task_name']; ?>" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" name="update_btn" class="btn btn-primary btn-lg">Save Changes</button>
                                <a href="index.php" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>