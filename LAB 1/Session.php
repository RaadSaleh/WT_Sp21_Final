<?php
$id="";
$pass="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=$_POST["id"];
    $pass=$_POST["pass"];
    if($id == "ghost" && $pass == "asm01"){
		session_start();
		$_SESSION["user"]=$id;
        header("Location: dash.php");
    }
}
?>

<html>
<head></head>
<body>
<form method ="post">

<input type="text" name="id" placeholder="ID"><br>
<input type="password" name="pass" placeholder="Password"><br>
<input type="submit" value="login">

</form>

</body>
</html>