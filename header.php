<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="styles.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light text-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/—Pngtree—crown logo design vecto.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-door text-dark"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-envelope text-dark"></i></a>
                        </li>

                    </ul>
                    <div>
                        <form action="includes/login.inc.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="text" name="mailuid" placeholder="Username/E-mail...">
                                </div>
                                <div class="col">
                                    <input class="form-control " type="password" name="pwd" placeholder="Password...">
                                </div>

                                <div class="col">
                                    <button class="btn btn-dark " type="submit" name="login-submit">Login</button><br>
                                    <a class="text-dark ml-2" href="signup.php">Signup</a>
                        </form>
                    </div>
                    <div class="col">
                        
                        
                        <form action="includes/logout.inc.php">
                            <button class="btn btn-danger" type="submit" name="logout-submit">Logout</button>
                        </form>
                    </div>

                    
                </div>

            </div>
            </div>
        </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>