<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a href="index.php" class="input-group">Back home</a>
<h1 class="text-primary ml-3">Users</h1>
<table class="input-group">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>First Action</th>
        <th>Second Action</th>
    </tr>
    <?php
    //Connect to the database to fetch all the names to be displayed
    require_once "db_connection.php";
    //create the select query
    $SelectQuery = "SELECT `id`, `jina`, `arafa`, `siri` FROM `users` WHERE 1";

    //Now select the users using the mysqli_query()
    $Users = mysqli_query($connection,$SelectQuery);

    //Now loop through the users to print one by one on table rows
    while ($Row = mysqli_fetch_assoc($Users)){
        //extract the rows
        extract($Row);
        //Print the users one by one on a table row
        echo "<tr>
                            <td>$jina</td>
                            <td>$arafa</td>
                            <td>$siri</td>
                            <td><a class='btn btn-outline-danger' href='delete.php?my_id=$id'>Delete</a></td>
                            <td><a class='btn btn-outline-primary' href='update.php?my_id=$id&my_name=$jina&my_email=$arafa&my_pass=$siri'>Update</a></td>
                      </tr>";


    }
    ?>
</table>

</body>
</html>

