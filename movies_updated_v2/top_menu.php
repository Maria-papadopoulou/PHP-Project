<?php
session_start();
$username_error="";
$pass_error="";
$msg="";

	if (isset($_POST['submit'])){
	if(empty($_POST['username']))
		$username_error="<div class='alert alert-danger' role='alert'>Παρακαλώ εισάγετε ένα username</div>";
		else
		$username=$_POST['username'];
	
	if(empty($_POST['password']))
		$pass_error="<div class='alert alert-danger' role='alert'>Παρακαλώ εισάγετε ένα password</div>";
		else
		$pass=$_POST['password'];
	
		if(empty($username_error) && empty($pass_error)){
			
			include 'db_config.php';
			$sql="SELECT * FROM users WHERE username='".$username."' AND password='".$pass."'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
			$row=mysqli_fetch_assoc($result);	
			session_start();
			$_SESSION['id']=$row['id'];
			$_SESSION['name']=$row['name'];
			$_SESSION['surname']=$row['surname'];
			$_SESSION['username']=$row['username'];
			header("location:index.php");
			}
			else{
				
				$msg="<div class='alert alert-danger' role='alert'>Δεν δώσατε σωστό username ή password</div>";
			}
		}
	
	
	}	
?>
<header>
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark  bg-dark">
        <a class="navbar-brand" href="index.php">AigaleoMovies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">ΑΡΧΙΚΗ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="movies.php">ΤΑΙΝΙΕΣ</a>
            </li>
			  <a class="nav-link" href="actors.php">ΗΘΟΠΟΙΟΙ</a>
			</li>
			</ul>
        
			<?php
			if(isset($_SESSION['id'])){
				echo "<span class='navbar-text'> Γεια σου ".$_SESSION['name']." ".$_SESSION['surname']."&nbsp;</span><a href='logout.php'><button type='button' class='btn btn-outline-secondary btn-sm'>Αποσύνδεση</button></a>
";
			}
			else{
			?>
            
                <ul class="nav-item"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></ul>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Σύνδεση <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                       <li class="px-3 py-2">
                           <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="form" role="form">
                                <div class="form-group">
                                    <input id="emailInput" placeholder="Username/Email" name="username" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" name="password" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary btn-block">Σύνδεση</button>
                                </div>
                                <div class="form-group text-center">
                                    <small><a href="register.php">Κάντε εγγραφή</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
        
          </ul>
		  
		  <?php
			}
		  ?>
          <!--<form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
          </form> -->
        </div>
      </nav>
    </header>