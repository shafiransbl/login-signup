<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PearaStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="hero">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="">
                    <img src="IMG/Logo Pear.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                    PearaStore
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-right" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-button">
                            <button type="button" name="login" class="btn btn-outline-primary me-3" 
                                    onclick="window.location.href='login.php'">
                                Log In
                            </button>
                        </li>
                        <li class="nav-button">
                            <button type="button" name="regist" class="btn btn-primary" 
                                    onclick="window.location.href='registration.php'">
                                Register
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    <div class="container-fluid banner d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-7">
              <h2 class="mt-10 home-heading">Welcome to Our Store!</h2>
              <p class="home-paragraph">
                Peara Store is a specialized store for premium subscription apps, launched in May 2023.
                With over 500 orders filled and 300 customers so far, we're here to provide you with the best
                service—trustworthy, fast processing and responses, and with guarantees. Enjoy shopping with us!
              </p>
              <button type="button" name="regist" class="btn btn-primaryHome"
                            onclick="window.location.href='registration.php'">Register for Order!</button>
            </div>
            <div class="col-md-5">
              <img src="IMG/Ava.png" class="img-fluid" alt="Peara Store">
            </div>
          </div>
        </div>
      </div>
  </header>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>
</html>