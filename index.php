<!doctype html>
<html>
    <?php
    session_start();
    ?>
<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="Archivo/css/reset.css">
	<link rel="stylesheet" href="Archivo/css/animate.css">
	<link rel="stylesheet" href="Archivo/css/styles.css">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	
	<div id="container">
		
            <form action="Login.php" method="POST">
		
		<label for="name">Username:</label>
		
		<input type="name" name="username">
		
		<label for="username">Password:</label>
		
		<!--<p><a href="#">Forgot your password?</a>-->
		
		<input type="password" name="password">
		
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	
	 <?php
        if(isset($_GET['estado'])){
        if ($_GET['estado'] == 'logout') {
                unset($_SESSION['tipo']);
                unset($_SESSION['estado']);
                echo '<script> alert("Se cerró la sesión") </script>';
        }elseif ($_GET['estado']== "debeaut") {
             echo '<script> alert("Debe autenticarse") </script>';
        }elseif ($_GET['estado']== "nousuario") {
             echo '<script> alert("El usuario no existe") </script>';
        }
        }
    ?>
	<!-- End Page Content -->
	
</body>

</html>
