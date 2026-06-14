<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Sports | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="card p-4" style="width: 100%; max-width: 400px;">
        <div class="text-center mb-4">
            <h2 class="text-uppercase" style="color: #66fcf1; text-shadow: 0 0 10px #66fcf1;">E-Sports Arena</h2>
            <p class="text-muted">Tournament Manager Login</p>
        </div>

        <form method="post" action="checklogin.php">
            <div class="mb-3">
                <label class="form-label" style="color: #45a29e;">Username</label>
                <input type="text" name="username" class="form-control bg-dark text-light border-info" required>
            </div>
            <div class="mb-4">
                <label class="form-label" style="color: #45a29e;">Password</label>
                <input type="password" name="password" class="form-control bg-dark text-light border-info" required>
            </div>
            <button type="submit" class="btn btn-neon w-100">LOGIN TO ARENA</button>
        </form>
    </div>

</body>

</html>