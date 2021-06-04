<?php
//Check if the update link has been clicked
if (isset($_GET["my_id"])){
    //Received the values coming from the link
    $received_id = $_GET["my_id"];
    $received_name = $_GET["my_name"];
    $received_email = $_GET["my_email"];
    $received_password = $_GET["my_pass"];
}

?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<h1 class="text-primary text-center">Update user record</h1>
<div>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action="update_handler.php" name="post">
            <label class="text-primary font-weight-bold" for="">Name:</label><br>
            <input class="form-control" value="<?php echo $received_name;?>" type="text" placeholder="update name" name="u_name"><br><br>

            <label class="text-primary font-weight-bold" for="">Email:</label><br>
            <input class="form-control" value="<?php echo $received_email;?>" type="text" placeholder="update email" name="u_email"><br><br>

            <label class="text-primary font-weight-bold" for="">Password:</label><br>
            <input class="form-control" value="<?php echo $received_password;?>" type="text" placeholder="update password" name="u_pass"><br><br>

            <input class="text-primary font-weight-bold" value="<?php echo $received_id;?>" type="hidden" name="user_id">
            <input class="form-control" type="submit" value="update" name="btn_update">

            <a href="active_users.php" class="btn btn-link btn-block">Go back</a>

        </form>
    </div>
    <div class="col-md-3"></div>
</div>

</body>
</html>


