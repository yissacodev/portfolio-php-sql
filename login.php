<?php
session_start();


if ($_POST) {
    if ($_POST['username'] === "acosta032" && $_POST['password'] === "1234") {

        $_SESSION['username'] = "acosta032";
        /* Redireccion */
        header("location:index.php");
    } else {
        echo "<script> alert('Incorrect username or password!')</script>";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="src/css/style.css">

</head>

<body>
    <div class="container">
        <section class="sidebar__section">
            <div class="sidebar__wrapper">
                <h2 class="sidebar__message">
                    Remember your moments
                </h2>
                <h2 class="sidebar__welcomes">
                    IGalery
                </h2>
            </div>
        </section>
        <section class="login__section">
            <div class="login__container">
                    <div class="login__title">
                        <p class="display-5">Log In Portfolio</p>
                    </div>
                    <div class="login__body">
                        <form action="login.php" method="post" class="form">
                            <div class="form__group">
                                <label for="username">Username</label>
                                <input class="form__control" type="text" name="username" id="username">
                            </div>

                            <div class="form__group">
                                <label for="password">Password</label>
                                <input class="form__control" type="password" name="password" id="password">
                            </div>

                            <div class="form__group">
                                <button class="btn btn-success" type="submit">Login</button>
                            </div>
                        </form>

                    </div>
                    <div class="card-footer text-muted">
                        Footer
                    </div>
            </div>
        </section>
    </div>

    <!-- <div class="container-fluid login-container">
        <div class="row">
            <div class="col-md-6 login-aside">
                <div class="row">
                    <p class="col-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis libero ex nulla ut ipsum architecto hic, sit debitis dolor soluta numquam commodi. Ullam et quos architecto dicta officia possimus?</p>
                </div>
                <div class="row">
                    <p class="col-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis libero ex nulla ut ipsum architecto hic, sit debitis dolor soluta numquam commodi. Ullam et quos architecto dicta officia possimus?</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <p class="display-5">Log In Portfolio</p>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div class="form-group m-2">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" id="username">
                            </div>

                            <div class="form-group m-2">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password">
                            </div>

                            <div class="form-group m-2">
                                <button class="btn btn-success" type="submit">Login</button>
                            </div>
                        </form>

                    </div>
                    <div class="card-footer text-muted">
                        Footer
                    </div>
                </div>

            </div>
           
        </div>
    </div> -->







</body>

</html>