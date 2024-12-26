<?php
session_start();

if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']); 
}

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $error = "Please fill in all the fields!";
    } else {
        if ($email == 'admin@gmail.com' && $password == 'admin1234') {
            header('Location: dashboard.php');
            exit;
        }

        if (isset($_SESSION['users'])) {
            $email_found = false;
            $password_correct = false;
            
            foreach ($_SESSION['users'] as $user) {
                if ($user['email'] === $email) {
                    $email_found = true; // Email ditemukan
                    if (password_verify($password, $user['password'])) {
                        $password_correct = true; // Password cocok
                        header('Location: welcome.php');
                        exit;
                    }
                    break;
                }
            }

            if (!$email_found) {
                $error = "Email not found. Please register first!";
            } elseif (!$password_correct) {
                $error = "Incorrect password. Please try again.";
            }
        } else {
            $error = "No registered users found. Please register!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid banner-log d-flex justify-content-center align-items-center vh-100">
        <div class="box-area2 bg-white p-4 rounded-4 shadow-lg">
            <h3 class="text-center hello-regist2">Welcome back!</h3>

            <?php if (isset($success_message)): ?>
                <div class="alert alert-success"><?= $success_message ?></div>
            <?php endif; ?>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form action="" method="post">
                <div class="text-formlog">
                    <p class="text-center">Log in first before making an order.</p>
                    <div class="ket-form mb-1">
                        <label for="email" class="form-ket mb-1">Email</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Type your email" required>
                    </div>

                    <div class="ket-form mb-1">
                        <label for="password" class="form-ket mb-1">Password</label>
                        <div class="position-relative">
                            <input type="password" id="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Create your password">
                            <span class="toggle-password" onclick="togglePassword()">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="ket-form mb-1 d-flex justify-content-between">
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="checkbox">
                            <label for="rememberMe" class="form-check-label text-secondary" style="font-size: small; color: black;">Remember Me</label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Forgot Password?</a></small>
                        </div>
                    </div>

                    <div class="btn-log">
                        <div class="ket-form mb-1">
                            <button type="submit" name="login" class="btn btn-lg btn-primary w-100 fs-6" style="background-color: #3d6e0d; border-color: #3d6e0d; border-radius: 25px;">Log In</button>
                        </div>

                        <div class="row mt-3">
                            <small>Don't have an account? <a href="registration.php">Regist Here</a></small>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
