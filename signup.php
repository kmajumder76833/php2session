<?php
include 'header.php';
?>


		

<?php
if(isset($_SESSION['id'])){
echo $_SESSION['id'];
}else{
	echo "you are not logged in!!!";
}
?>
<br><br>
<?php
if(isset($_SESSION['id'])){
echo "you are already logged in...";
}else{
	echo "<form action='includes/signup.inc.php' method='POST' >
			<input type='text' name='first' placeholder='firstname'><br>
			<input type='text' name='last' placeholder='lastname'><br>

			<input type='text' name='uid' placeholder='username'><br>
			<input type='password' name='pwd' placeholder='password'><br>
			<button type='submit'>SignUp</button>
		</form>
";
}
?>
		
</body>
</html>