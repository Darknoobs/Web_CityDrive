<?php
session_start();
if (isset($_SESSION['flag'])) {
    require "redirect.php";
} else {
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>City Drive</title>
        <meta name="description" content="The new uber !">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="text-center" id="div3">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <div class="collapse navbar-collapse"> <a href="index.php"><img src="assets/pic/title.png" class="navbar-brand"></a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="connection.php">Connection</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row justify-content-center">
            <form method="post" class="form-signin mt-5" action="sendReg.php">
                <h2 class="mb-3">Please fill the register informations !</h2>
                <hr>
                <legend>Personal informations</legend>
                <label class="sr-only">First name</label>
                <input placeholder="Prénom" type="text" class="form-control mb-1" name="firstName" id="firstName" required="">
                <label class="sr-only">Last name</label>
                <input placeholder="Nom" type="text" class="form-control mb-1" name="secondName" id="secondName" required="">
                <label class="sr-only">Address</label>
                <input placeholder="Adresse" type="text" class="form-control mb-1" name="address" id="address" required="">
                <label class="sr-only">City</label>
                <input placeholder="Ville" type="text" class="form-control mb-1" name="city" id="city" required="">
                <label class="sr-only">Country</label>
                <input placeholder="Pays" type="text" class="form-control mb-1" name="country" id="country" required="">
                <label class="sr-only">ZIP code</label>
                <input placeholder="Code Postal" type="text" class="form-control" name="dptCode" id="dptCode" required="">
                <hr>
                <legend>User informations</legend>
                <label class="sr-only">Email</label>
                <input placeholder="E-mail" type="email" class="form-control mb-1" name="email" id="email" required="">
                <label class="sr-only">Username</label>
                <input placeholder="Nom d'utilisateur" type="text" class="form-control mb-1" name="username" id="username" required="">
                <label class="sr-only">Password</label>
                <input placeholder="Mot de passe" type="password" class="form-control mb-1" name="password" id="password" required="">
                <label class="sr-only">Confirm your password</label>
                <input placeholder="Confirmation" type="password" class="form-control mb-1" name="verifPassword" id="verifPassword" required="">
                <br>
                <button class="btn btn-lg btn-primary btn-block mb-5" name="mailform" type="submit">Envoyer !</button>
            </form>
        </div>
    </div>
    <footer>
        <div class="bg-dark py-3">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-4 col-md-6">
                        <p class="text-secondary mb-0">© Copyright - City drive 2019</p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <p class="text-secondary mb-0">dev team - Cosma, Louis, Kenji</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </body>

    </html>
<?php } ?>
