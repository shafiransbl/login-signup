<?php
session_start();

if (isset($_POST['create'])) {
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $check = isset($_POST['checkbox']) ? true : false;

    if (empty($email) || empty($name) || empty($phone) || empty($password)) {
        $error = "Please fill in all the fields!";
    } elseif (!$check) {
        $error = "You must agree to the terms and conditions!";
    } else {
        $is_email_registered = false;
        if (isset($_SESSION['users'])) {
            foreach ($_SESSION['users'] as $user) {
                if ($user['email'] === $email) {
                    $is_email_registered = true;
                    break;
                }
            }
        }

        if ($is_email_registered) {
            $error = "The email is already registered. Please log in or use a different email.";
        } else {
            $_SESSION['users'][] = [
                'email' => $email,
                'name' => $name,
                'phone' => $phone,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ];

            $_SESSION['success_message'] = "Registration successful! Please log in.";

            header('Location: login.php');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid banner-log d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!-- Kolom Kiri -->
            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-img mb-3">
                    <img src="IMG/For Regist.png" class="img-fluid2" alt="Registration Image" style="width: 350px;">
                </div>
                <p class="text-white fs-2">Peara Store</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;">
                    Ready to give you the best service!
                </small>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-md-7 right-box">
                <form action="" method="POST">  <!-- Form Start -->

                <!-- Display error message -->
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger text-center"><?= $error ?></div>
                <?php endif; ?>

                    <div class="row align-items-center">
                        <div class="header-text">
                            <h3 class="hello-regist mt-2">Hello, new peeps!</h3>
                            <p>Create your account first before make some order.</p>
                        </div>

                        <div class="ket-form mb-1">
                            <label for="email" class="form-ket mb-1">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg bg-light fs-6" 
                                   placeholder="Input your email address" required>
                        </div>

                        <div class="ket-form mb-1">
                            <label for="name" class="form-ket mb-1">Name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg bg-light fs-6" 
                                   placeholder="Fill in your name" required>
                        </div>

                        <div class="ket-form mb-1">
                            <label for="phone" class="form-ket mb-1">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="form-control form-control-lg bg-light fs-6" 
                                   placeholder="Enter your phone number" required>
                        </div>

                        <div class="pass-container mb-1">
                            <div class="ket-form mb-1">
                                <label for="password" class="form-ket mb-1">Password</label>
                                <div class="position-relative">
                                    <input type="password" id="password" name="password" 
                                           class="form-control form-control-lg bg-light fs-6" 
                                           placeholder="Create your password" required>
                                    <span class="toggle-password" onclick="togglePassword()">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                <div class="pass-note">
                                    <small style="color: black;">*Password must be at least 6 characters long.</small>
                                </div>
                            </div>
                        </div>

                        <div class="form-check d-flex align-items-center mb-2" style="margin-left: 20px;">
                            <input type="checkbox" class="form-check-input mt-2" id="policyPrivacy" style="padding-left: 10px;" 
                                   name="checkbox" required>
                            <label for="policyPrivacy" class="form-check-label text-secondary mt-1" 
                                   style="font-size: small; color: black; margin-left: 5px;">
                                I agree with terms and conditions.
                            </label>
                        </div>

                        <div class="btn-log d-flex flex-column align-items-center">
                            <div class="ket-form mb-1 w-100 d-flex justify-content-center">
                                <button type="submit" class="btn btn-lg btn-primary w-100 fs-6" name="create"
                                        style="background-color: #3d6e0d; border-color: #3d6e0d; border-radius: 25px;">
                                    Create Account
                                </button>
                            </div>
                        </div>

                        <div class="row mb-2 mt-1">
                            <small style="color: rgb(53, 52, 52);">
                                Already have an account? <a href="login.php">Log In Here</a>
                            </small>
                        </div>
                    </div>
                </form> <!-- Form End -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>
</html>
