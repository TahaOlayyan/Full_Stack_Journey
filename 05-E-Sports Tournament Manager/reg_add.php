<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}
$sql_captains = "SELECT id, username FROM users WHERE role = 'Captain'";
$captains_query = mysqli_query($conn, $sql_captains);

$sql_tour = "SELECT id, title FROM tournaments WHERE status != 'Finished'";
$tournaments_query = mysqli_query($conn, $sql_tour);

if (isset($_POST['add'])) {
    $capt_id = $_POST['capt_id'];
    $tourn_id = $_POST['tourn_id'];
    $team_name = $_POST['team_name'];

    $sql = "INSERT INTO registrations (tourn_id, capt_id, team_name) VALUES ('$tourn_id', '$capt_id', '$team_name')";
    mysqli_query($conn, $sql);
    header("Location: registrations.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="admin_home.php">E-Sports Admin</a>
        </div>
    </nav>

    <div class="container d-flex justify-content-center">
        <div class="card p-4 w-100" style="max-width: 500px;">
            <h3 class="text-center mb-4" style="color: #66fcf1;">Register a Team</h3>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Select Captain</label>
                    <select name="capt_id" class="form-select bg-dark text-light border-info" required>
                        <option value="">-- Choose Captain --</option>
                        <?php while ($c = mysqli_fetch_assoc($captains_query)) { ?>
                            <option value="<?php echo $c['id']; ?>"><?php echo $c['username']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Select Tournament</label>
                    <select name="tourn_id" class="form-select bg-dark text-light border-info" required>
                        <option value="">-- Choose Tournament --</option>
                        <?php while ($t = mysqli_fetch_assoc($tournaments_query)) { ?>
                            <option value="<?php echo $t['id']; ?>"><?php echo $t['title']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label" style="color: #45a29e;">Team Name</label>
                    <input type="text" name="team_name" class="form-control bg-dark text-light border-info" required>
                </div>
                <button type="submit" name="add" class="btn btn-neon w-100 mb-3">Register Team</button>
                <div class="text-center">
                    <a href="registrations.php" class="text-muted text-decoration-none">← Back</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>