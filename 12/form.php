<!DOCTYPE html>
<html>
<body>
<form method="post">
    Username: <input type="text" name="u"><br><br>
    Password: <input type="password" name="p"><br><br>
    <input type="submit" value="Login">
</form>
<?php
if(isset($_POST['u']))
{
    $data = file_get_contents("users.txt");
    if(trim($_POST['u']).",".trim($_POST['p']) == trim($data))
        echo "Login Successful";
    else
        echo "Invalid Login";
}
?>
</body>
</html>