<?php
//check iif the btn_save has been clicked
if (isset($_POST["btn_save"])){
    //start receiving values from the form
    $Name = $_POST["x"];
    $Email = $_POST["y"];
    $Password = $_POST["z"];

    //Encrypt the password
    $Password =md5($Password);

    //connect to the database
    require_once "db_connection.php";

    //Create an insert query to save the data
    $InsertQuery = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$Name','$Email','$Password')";

    //Proceed to save by use of mysqli_query()
    $Save = mysqli_query($connection,$InsertQuery);

    //Finally check if the saving was successful
    if (isset($Save)){
        echo "User saved successfully";
    }else{
        echo "Saving failed";
    }


}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pratt Academy</title>
</head>
        <link href="assets/css/stylus.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
<body>
    <div>
        <br>
        <br>
        <br>
        <p class="login-register-text">Browse Our Courses? <a href="index.php">Back Home</a>
            <br>
            <br>
            <a href="login.php">Back to Login</a>
        </p>
    </div>
</body>
</html>