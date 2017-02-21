<?php
   session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div>
	<nav>
	<ul>
		<li><a href="index.php">HOME</a></li>
		<?php
		if(isset($_SESSION['id'])){
       echo "<form action='includes/logout.inc.php'>
	<button>logout</button>

</form>";
       }else{
	  echo "<form action='includes/login.inc.php' method='POST'>
			<input type='text' name='uid' placeholder='username'><br>
			<input type='password' name='pwd' placeholder='******'><br>
			<button type='submit' style='color:red'>LOGIN</button>
	
		</form>";
   }
			
		?>
		<li><a href="signup.php">IF NOT SIGNED UP SIGNUP HERE</a></li>

	</ul>
	</nav>
</div>