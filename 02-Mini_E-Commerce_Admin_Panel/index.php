<?php
include('config.php');

// 1. To Add (Create)
if (isset($_POST['create_btn'])) {
    $name = $_POST['p_name'];
    $price = $_POST['p_price'];
    $quant = $_POST['p_qty'];
    $category = $_POST['p_category'];

    $sql_insert = "INSERT INTO `products` (`name`, `price`, `quantity`, `category`) 
    VALUES ('$name', '$price', '$quant', '$category')";

    $result_insert = mysqli_query($conn, $sql_insert);
    if ($result_insert) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// 2. To Show Data (Read)
$sql_select = "SELECT * FROM `products` ORDER BY id DESC";
$result_select = mysqli_query($conn, $sql_select);
if (!$result_select) {
    echo "Error: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4 fw-bold text-primary">🛍️ Mini Store Dashboard</h2>

        <div class="card shadow-sm mb-5 border-0">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">➕ Add New Product</h5>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control" name="p_name" placeholder="Product Name" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label fw-bold">Price ($)</label>
                            <input type="number" step="0.01" class="form-control" name="p_price" placeholder="0.00" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label fw-bold">Quantity</label>
                            <input type="number" class="form-control" name="p_qty" placeholder="0" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label fw-bold">Category</label>
                            <select class="form-select" name="p_category" required>
                                <option value="" disabled selected>Select Category</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Clothes">Clothes</option>
                                <option value="Food">Food</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100 fw-bold" name="create_btn">Create Product</button>
                </form>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">📋 Product List</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0 text-center align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result_select)) { ?>
                                <tr>
                                    <td class="fw-bold"><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><span class="badge bg-success fs-6">$<?php echo $row['price']; ?></span></td>
                                    <td><?php echo $row['quantity']; ?></td>
                                    <td><span class="badge bg-info text-dark fs-6"><?php echo $row['category']; ?></span></td>
                                    <td class="text-muted"><?php echo $row['created_at']; ?></td>
                                    <td>
                                        <a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm fw-bold" onclick="return confirm('Do you Want To Update ? ')">✏️ Edit</a>
                                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm fw-bold" onclick="return confirm('Are You Sure ? ');">🗑️ Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>