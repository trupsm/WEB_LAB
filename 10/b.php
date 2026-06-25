<!DOCTYPE html>
<html>
<body>
<form method="post" action="">
  Enter a number: <input type="text" name="num" />
  <input type="submit" value="Check">
</form>
<?php
if (isset($_POST['num']) && $_POST['num'] !== "") {
  $n = (int) $_POST['num'];
  $isPrime = true;
  if ($n < 2) {
    $isPrime = false;
  } else {
    for ($i = 2; $i <= sqrt($n); $i++) {
      if ($n % $i == 0) {
        $isPrime = false;
        break;
      }
    }
  }
  if ($isPrime) {
    echo "$n is a Prime number.";
  } else {
    echo "$n is not a Prime number.";
  }
}
?>
</body>
</html>