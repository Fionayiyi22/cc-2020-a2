<?php
if($_POST){
    switch($_POST['page']){
        case "Admin":
        header("Location: /admin.php");
        exit;
        break;
        case "Student":
            header("Location: /student.php");
            exit;
            break;
            

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
<label >Login As:</label><br>
    <input type="radio" name='page' value="Admin">
    <label >Admin</label>
    <input type="radio" name='page' value="Student">
    <label >Student</label><br>
    <input type="text" name="id" placeholder="Input Id"><br>
    <input type="password" name="password" placeholder="Input Password"><br>
    <input type="submit" value="Login">
    </form>
</body>
</html>