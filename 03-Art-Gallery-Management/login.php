<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-card {
            border: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border-radius: 15px;
        }

        .btn-custom {
            background-color: #2c3e50;
            color: white;
            border-radius: 8px;
        }

        .btn-custom:hover {
            background-color: #1a252f;
            color: white;
        }
    </style>
</head>

<body class="d-flex align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="card login-card p-4 bg-white">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <h2 style="color: #2c3e50; font-weight: 800;">🎨 Art Gallery</h2>
                            <p class="text-muted">Exclusive Management System</p>
                        </div>
                        <form method="post" action="checklogin.php">
                            <div class="mb-3 text-start">
                                <label class="form-label fw-bold text-secondary">Username</label>
                                <input type="text" name="username" class="form-control form-control-lg bg-light" required>
                            </div>
                            <div class="mb-4 text-start">
                                <label class="form-label fw-bold text-secondary">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg bg-light" required>
                            </div>
                            <button type="submit" class="btn btn-custom w-100 btn-lg fw-bold">Secure Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>