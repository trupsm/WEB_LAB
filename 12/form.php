<!DOCTYPE html>
<html>
<body>
<h2>Login Form</h2>
<form method="post">
    Username:<input type="text" name="uname"><br><br>
    Password:<input type="password" name="pass"><br><br>
    <input type="submit" value="Login">
</form>
<?php
if(isset($_POST['uname']) && isset($_POST['pass']))
{
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $file = fopen("users.txt", "r");
    $found = false;
    while(($line = fgets($file)) != false)
    {
        list($u, $p) = explode(",", trim($line));

        if($uname == $u && $pass == $p)
        {
            $found = true;
            break;
        }
    }
    fclose($file);
    if($found)
        echo "<h3>Login Successful</h3>";
    else
        echo "<h3>Invalid Username or Password</h3>";
}
?>
</body>
</html>