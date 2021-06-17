<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
      <link rel="stylesheet" href="http://localhost/dindy/view/css/style.css">
      <link rel="stylesheet" href="http://localhost/dindy/view/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="http://localhost/dindy/view/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-md-4">
                <form class="form-container" method="POST" action="http://localhost/dindy/login/auth">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group custom-control custom-checkbox">
                        <br>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>