<!DOCTYPE html>
<html>
<head>
    <title>REFLECTED XSS 5</title>
</head>
<body>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form">
   <p>Adınız:<input type="text" name="username"></p>
   <input type="submit" name="Gönder">
</form>

<?php 
if (isset($_GET["username"])) {
    $user = str_replace("<", "", $_GET["username"]);
    echo "$user";
}
 ?>

</body>
</html>