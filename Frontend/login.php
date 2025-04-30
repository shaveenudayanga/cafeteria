<?php
session_start();

function handleLogin() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once '../Backend/database.php';
        $conn = getDatabaseConnection();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT id, user_password FROM users WHERE user_email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();
            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $user_id;
                header("Location: dashboard.php");
                exit();
            } else {
                return "Invalid email or password.";
            }
        } else {
            return "Invalid email or password.";
        }
        $stmt->close();
    }
    return null;
}

$error = handleLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | KOFFEE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Frontend/style_signup_login.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>

<!-- Navbar -->
<?php include '../Frontend/Header.php'; ?>

<!-- Form Centering Container -->
<div class="form-wrapper">
    <div class="form-container">
        <h2 class="form-title">Login</h2>
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="../Backend/login_process.php" method="POST" class="form">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-submit">Login</button>
            <p class="switch-link">Don't have an account? <a href="../Frontend/signup.php">Sign Up</a></p>
        </form>
    </div>
</div>

<!-- Footer -->
<?php include '/home/shaveen/cafeteria/Frontend/footer.php'; ?>

</body>
</html>
