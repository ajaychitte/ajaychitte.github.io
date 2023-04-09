<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php include 'links.php' ?>
    <style>
        form {
    display: block;
    width: 25%;
    margin: 0 auto;
}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="about.html">About Us</a>
                    <a class="nav-link" href="help.html">Help</a>

                </div>
            </div>
        </div>
    </nav>


    <div class="loginPage mt-4">
        <form action="logincheck.php" method="POST">
            <h2 class="mb-3">Admin</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Login ID</label>
                <input type="email" class="form-control" name="userName" value="" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="" id="exampleInputPassword1">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
    </div>



    </body>

</html>