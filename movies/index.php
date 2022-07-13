<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <?php
	include 'top_menu.php';
	
	?>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="https://cdn-images-1.medium.com/max/1600/1*wCafhzyODI8t97i5xgXz-g.gif" alt="Avengers">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Avengers Infinity War</h1>
                <p>Will they survive from Thanos?</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Watch Here!!!</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="https://cdn.vox-cdn.com/uploads/chorus_asset/file/8222511/Aquaman.gif" alt="Aquaman">
            <div class="container">
              <div class="carousel-caption">
                <h1>Aquaman</h1>
                <p>Will the son of Poseidon save the world!!! </p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Watch here!!!</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="https://vignette.wikia.nocookie.net/harrypotter/images/0/07/Giphy_%283%29-0.gif/revision/latest?cb=20181129214957" alt="fantastic beasts the crimes of grindelwald">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Fantastic Beasts the crimes of grindelwald</h1>
                <p>Those beasts are fantastic...</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Watch here!!!</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
		<?php
		include 'db_config.php';
		
		$sql="SELECT * FROM actors LIMIT 0,3";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
		?>
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo $row['photo_url']; ?>" alt="<?php echo $row['name']." ".$row['surname']; ?>" width="140" height="140">
            <h2><?php echo $row['name']." ".$row['surname']; ?></h2>
            <p><?php echo $row['bio']; ?></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
		  <?php 
		  
			}
		}
		//mysqli_close($conn);
		
		  
		  ?>
         
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->
		<hr class="featurette-divider">
        
		<?php
		$sql2="SELECT * FROM movies LIMIT 0,4";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2)>0){
			while($row2=mysqli_fetch_assoc($result2)){
		?>
        <div class="row featurette">
          <div class="col-md-7<?php if($row2['id']%2==0) 
			  echo " order-md-2";
		  ?>">
            <h2 class="featurette-heading"><?php echo $row2['title']; ?> <span class="text-muted">(<?php echo $row2['release_year']; ?>)</span></h2>
            <p class="lead"><?php echo $row2['description']; ?></p>
          </div>
          <div class="col-md-5<?php if($row2['id']%2==0)
			echo " order-md-1";
		  ?>">
            <img class="featurette-image img-fluid mx-auto" src="<?php echo $row2['cover']; ?>" alt="<?php echo $row2['title']; ?>">
          </div>
        </div>
		<hr class="featurette-divider">
        <?php
			}
		}
		mysqli_close($conn);
		?>

        

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->

		<?php
	include 'footer.php';
	
	?>
		
      