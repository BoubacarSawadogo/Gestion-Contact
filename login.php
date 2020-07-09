<?php require_once 'destroySession.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

</head>

<body>

    <div class="container">
        <div class="jumbotron">
            <h1>Login</h1>
            <p class="lead">L'usager par defaut est <strong>userName:admin</strong> et
                <strong>password:admin</strong>
            </p>
            <hr>
            <form method="post" action="index.php?action=login">
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Username" name="userName">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword" name="password"
                            placeholder="Password">
                    </div>
                </div>


                <button type="submit" class="btn btn-secondary" name="login">login</button>

            </form>
        </div>
    </div>

</body>

</html>