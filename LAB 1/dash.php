<?php
    session_start();
	if(!isset($_SESSION["user"])){
		header("Location: session.php");
	}
?>
<html>
<body>
<h1>Welcome<?php echo $_SESSION["user"];?></h1>
</body>
</html>