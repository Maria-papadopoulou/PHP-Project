<?php
$name_error="";
$surname_error="";
$username_error="";
$pass_error="";
$msg="";

if (isset($_POST['submit'])){

if(empty($_POST['username'])){
	$username_error="<div class='alert alert-danger' role='alert'>Παρακαλώ εισάγετε ένα username</div>";
}
else{
	$username=$_POST['username'];
	include 'db_config.php';
	$sql="SELECT * FROM users where username='".$username."'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
	$username_error="<div class='alert alert-danger' role='alert'>Το username ".$username." υπάρχει ήδη. Παρακαλώ εισάγετε ένα άλλο username...</div>";
	}
	mysqli_close($conn);
}
	
if(empty($_POST['name']))
	$name_error="<div class='alert alert-danger' role='alert'>Παρακαλώ εισάγετε ένα όνομα</div>";
else
	$name=$_POST['name'];

if(empty($_POST['surname']))
	$surname_error="<div class='alert alert-danger' role='alert'>Παρακαλώ εισάγετε ένα επώνυμο</div>";
else
	$surname=$_POST['surname'];
	
if(empty($_POST['password'])){
	$pass_error="<div class='alert alert-danger' role='alert'>Παρακαλώ εισάγετε ένα password</div>";
}
	else{
	$pass=$_POST['password'];
		if(strlen($pass)<8)
				$pass_error="<div class='alert alert-danger' role='alert'>Ο κωδικός πρόσβασης πρέπει να αποτελείται απο τουλάχιστον 8 χαρακτηρές</div>";

	}
		
	if(empty($name_error) && empty($surname_error) && empty($username_error) && empty($pass_error))
	{
		include 'db_config.php';
		$sql="INSERT INTO users (name,surname,username,password) VALUES ('".$name."','".$surname."','".$username."','".$pass."')";
		if(mysqli_query($conn,$sql)){
			$msg="<p class='alert alert-success' role='alert'>Η εγγραφή ολοκληρώθηκε</p>";
			header("refresh:2;url=index.php");
		}
		
	}
	
	
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Registration</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

	<?php 
	
	include 'top_menu.php';
	?>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Φόρμα εγγραφής</h1>
          <p class="lead text-muted">Παρακαλώ εγγραφείτε παρακάτω</p>
		  <?php echo $msg; ?>
		  
          
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
		  <div class="col-md-3"></div>
            <div class="col-md-6">
              
			  <!--registration form -->
			  
			  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
			  
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" id="name"  placeholder="Enter Name">
					<?php echo $name_error; ?>
				</div>
				<div class="form-group">
					<label>Surname</label>
					<input type="text" class="form-control" name="surname" id="surname" placeholder="Enter Surname">
					<?php echo $surname_error; ?>
				</div>
				<div class="form-group">
					<label >Username/Email</label>
					<input type="email" class="form-control" name="username" id="username" placeholder="Enter Username/Email">
					<?php echo $username_error; ?>
				</div>
				<div class="form-group">
					<label >Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="|Enter Password >8 chars">
					<?php echo $pass_error; ?>
				</div>
					<button type="submit" name="submit" class="btn btn-primary">Register</button>
			</form>
			  
              </div>
			 
			<div class="col-md-3"></div>
            </div>
            
             
    </main>

   <?php
   include 'footer.php';
   ?>