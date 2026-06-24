<!DOCTYPE html>
<html>
<body>
<form method="post">
    Enter Name:<input type="text" name="name">
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>
<?php
if(isset($_POST['name']))
{
    $name = $_POST['name'];
    echo "<h3>Entered Name: $name</h3>";
    $file = fopen("data.txt", "a");
    fwrite($file, $name . "\n");
    fclose($file);
    echo "Data stored in file successfully.";
}
?>
</body>
</html>