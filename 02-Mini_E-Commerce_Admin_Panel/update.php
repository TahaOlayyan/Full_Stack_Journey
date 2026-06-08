<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_select = "SELECT `id`, `name`, `price`, `quantity`, `category`, `created_at` FROM `products` WHERE id = $id";
    $result_select = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_assoc($result_select);

    if (isset($_POST['update_btn'])) {
        $new_id = $_POST['id'];
        $new_name = $_POST['new_name'];
        $new_price = $_POST['new_price'];
        $new_quantity = $_POST['new_qty'];
        $new_category = $_POST['new_category'];
        $created_at = $_POST['crated_at'];

        $sql_update = "UPDATE `products` SET
         `name`='$new_name',`price`='$new_price',`quantity`='$new_quantity',`category`='$new_category',`created_at`='$created_at' 
         WHERE id = $new_id";
        $result_update = mysqli_query($conn, $sql_update);

        if ($result_update) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="alert alert-info shadow-sm" role="alert">
                    <h5 class="alert-heading">ℹ️ Current Product Details</h5>
                    <hr>
                    <div class="row text-center fw-bold">
                        <div class="col">ID: <?php echo $row['id'] ?></div>
                        <div class="col">Name: <?php echo $row['name'] ?></div>
                        <div class="col">Price: $<?php echo $row['price'] ?></div>
                        <div class="col">Qty: <?php echo $row['quantity'] ?></div>
                        <div class="col">Category: <?php echo $row['category'] ?></div>
                    </div>
                </div>

                <div class="card shadow border-0">
                    <div class="card-header bg-warning text-dark fw-bold">
                        <h4 class="mb-0">✏️ Update Product Form</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <input type="hidden" name="crated_at" value="<?php echo $row['created_at'] ?>">

                            <div class="mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control" name="new_name" value="<?php echo $row['name'] ?>" required>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Price</label>
                                    <input type="number" step="0.01" class="form-control" name="new_price" value="<?php echo $row['price'] ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Quantity</label>
                                    <input type="number" class="form-control" name="new_qty" value="<?php echo $row['quantity'] ?>" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Category</label>
                                <select class="form-select" name="new_category" required>
                                    <option value="Electronics" <?php if ($row['category'] == 'Electronics') echo 'selected'; ?>>Electronics</option>
                                    <option value="Clothes" <?php if ($row['category'] == 'Clothes') echo 'selected'; ?>>Clothes</option>
                                    <option value="Food" <?php if ($row['category'] == 'Food') echo 'selected'; ?>>Food</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="index.php" class="btn btn-secondary me-md-2">Cancel</a>
                                <button type="submit" class="btn btn-success" name="update_btn">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>