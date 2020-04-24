<?php
if($_POST){
    switch($_POST["page"]){

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<a href="/">Logout</a>
    <h1>This is admin page</h1>
   <form action="" name="page" method="post">
   <ul>
    <li><input type="submit" value="Publish Class"></li>
    <li><input type="submit" value="Manage Class"></li>
    <li><input type="submit" value="View Attendance"></li>
    <li><a href="admin_upload.php">upload</a> </li>
    </ul></form>
</body>
</html>