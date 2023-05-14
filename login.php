<?php
    session_start();

    
    if($_POST){
        if( $_POST['username'] === "acosta032" && $_POST['password'] === "1234" ){
            
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

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <br>
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
                <div class="col-md-4"></div>
            </div>
        </div>



    </div>
</body>

</html>