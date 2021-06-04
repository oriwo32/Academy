<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="assets/css/stylus.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body class="body">

<div class="container ">
    <p class="login-text" >Pratt Academy User Registration</p>
    <div class="login-social">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i> Facebook</a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i> Twitter</a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i> Google
            Plus</a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i> Linkedin</a>
    </div>
        <form class="login-email" action="register_user_handler.php" method="post">

            <label class="login-text">Name:</label>
            <div class="input-group">
                <input type="text" placeholder="Enter name" name="x" required>
            </div>
            <label class="login-text">Email:</label>
            <div class="input-group">
                <input type="email" placeholder="Enter email" name="y" required>
            </div>

            <label class="login-text">Password:</label>
            <div class="input-group">
                <input type="password" placeholder="Enter password" name="z" required>
            </div>

            <div class="input-group">
                <input class="btn" type="submit" name="btn_save" value="Register">

                <a href="active_users.php" class="">View users</a>
            </div>
        </form>
    </div>

</div>
</body>
</html>

</body>
</html>
