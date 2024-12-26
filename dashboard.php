<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peara Store Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" 
          rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="IMG/Logo Pear.png" alt="PearaStore Logo" width="30" height="30" 
                     class="d-inline-block align-text-top">
                <span class="fw-bold">PearaStore</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-right" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-button">
                        <button type="button" class="btn btn-primary" 
                                onclick="window.location.href='index.php'">
                            Log Out
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid banner-log d-flex justify-content-center align-items-center vh-100">
        <main>
            <div class="main-box-top text-center">
                <div class="top">
                    <div class="box-area3 p-3">
                        <h2 class="fw-bold">Hello, Admin!</h2>
                        <p class="lead">Welcome back to your dashboard. Manage everything effortlessly.</p>
                    </div>

                    <div class="box-area3 p-3 mt-3">
                        <p class="mb-0">📧 Your registered email: <b>admin@gmail.com</b></p>
                    </div>
                </div>

                <div class="bottom mt-4">
                    <div class="box-area3 p-3">
                        <p>🎉 Glad to see you here, <b>Shafira Auliana Salsabila</b>! You're rocking it as our admin.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
            integrity="sha384-IQsoLXlqGPRYAYzy4bx6sDQeA6a4/0g8SOsh6c9CHD9SdsF9Uu2Im6X8XKf6R9NX" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
            integrity="sha384-cVKIPhG1FyrJpHl0L+8jhAXgK6i9LwqF+K6Q2SUnj8NlbF5vCWG5y0A1q3Uo4+iK" 
            crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>