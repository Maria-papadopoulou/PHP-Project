
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Movie</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    <?php
	include 'top_menu.php';
	if($_GET['id']){
	include 'db_config.php';
	$sql="SELECT * FROM movies where id=".$_GET['id'];
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	?>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Movie</h1>
          <p class="lead text-muted"><?php echo $row['title']?></p>
          
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
	
		  <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?php echo $row['cover']; ?>" alt="<?php echo $row['title']; ?>">
                <div class="card-body">
				
					<button class="btn btn-primary mx-auto d-block" type="button" data-toggle="collapse" data-target="#collapseExample<?php echo $row['id']; ?>" aria-expanded="false" aria-controls="collapseExample">
						Actors
						</button>
					
				<div class="collapse" id="collapseExample<?php echo $row['id']; ?>">
				<?php
					$sql2="SELECT * FROM actors INNER JOIN movies_actors ON actors.id=movies_actors.id_actors WHERE movies_actors.id_movies=".$row['id'];
					$result2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($result2)>0){
					while($row2=mysqli_fetch_assoc($result2)){
					?>
					<br/>
					<a href="actor.php?id=<?php echo $row2['id']; ?>">
					<button type="button" class="btn btn-outline-secondary mx-auto d-block"><?php echo $row2['name']." ".$row2['surname']; ?></button>
					</a>
                     
                   
					<?php
					}
					}
					
					?>

				
				
				
				</div>
                  <p class="card-text"><strong><?php echo $row['title']; ?></strong><div><?php echo $row['description']; ?></div></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $row['release_year']; ?></button>
                      
                    </div>
                    <small class="text-muted"><?php echo $row['duration']; ?> mins</small>
					
					
					</div>
					<!-- Ηθοποιοί σε ταινίες... -->
					                  </div>
                </div>
              </div>
			  <div class="col-md-3"></div>
			  </div>
			  <?php

				mysqli_close($conn);
				}else{
				
			?>
            <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
		  <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="" alt="">
                <div class="card-body">
					

				
				
				
				</div>
                  <p class="card-text"><strong>No movie</strong><div>Δεν επίλεξες ταινία...</div></p>
                  <div class="d-flex justify-content-between align-items-center">
                    
					
					
					</div>
					<!-- Ταινίες σε ηθοποιούς... -->
					                  </div>
                </div>
              </div>
			 
			<div class="col-md-3"></div>
            </div>
<?php
	}	
			
			?>
            
            
          </div>
        </div>
      </div>

    </main>

   <?php
   include 'footer.php';
   ?>