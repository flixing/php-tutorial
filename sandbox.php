<?php 
	if(isset($_POST['submit'])){
		setcookie('gender', $_POST['gender'], time() + 86400);
		session_start();
		$_SESSION['name'] = $_POST['name'];
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>php tuts</title>
</head>
<body>
<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<h4 class="center grey-text">Dados !</h4>

<div class="container">
<div class="row">
	
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<label>Name</label>
		<input type="text" name="name" placeholder='Name'>
		<label>Sexo</label>
		<select class="browser-default" name="gender">
			<option value="" disabled selected>Choose your option</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>

		<input type="submit" name="submit" value="submit" class='btn brand z-depth-0'>
	</form>
</div>
</div>

</body>
</html>