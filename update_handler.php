<?php
//Check if the update button is clicked
if (isset($_POST["btn_update"])){
    //Receive the data coming from the form
    $UpdatedName = $_POST["u_name"];
    $UpdatedEmail =$_POST["u_email"];
    $UpdatedPassword = $_POST["u_pass"];
    $UserId = $_POST["user_id"];
    //Encrypt the password
    $UpdatedPassword = md5($UpdatedPassword);

    //connect to the database
    require_once "db_connection.php";

    //create an update query
    $UpdatedQuery = "UPDATE `users` SET `jina`='$UpdatedName',`arafa`='$UpdatedEmail',`siri`='$UpdatedPassword' WHERE id = '$UserId'";

    //Finally update using the mysqli_query()
    $Update = mysqli_query($connection,$UpdatedQuery);

    //Check if the update was successful
    if (isset($Update)) {
        //Redirect back to the view_users.php to see the changes
        header("location: active_users.php");
    }else{
        die("updating user");
    }
}

