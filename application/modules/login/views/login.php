<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>
	<title>Login Web</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/loginstyle.css" />
  </head>
<body>
<section class="form my-5">
  <div class="container">
	<div class="row align-items-center g-0">
	  <div class="col-sm-6">
		<div id="carouselmundano" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselmundano" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselmundano" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselmundano" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#carouselmundano" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button type="button" data-bs-target="#carouselmundano" data-bs-slide-to="4" aria-label="Slide 5"></button>
		  </div>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="<?php echo base_url()?>assets/images/Amanda 1.jpg" class="d-block w-100" alt="Image SS1">
			  <div class="carousel-caption d-none d-md-block">
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="<?php echo base_url()?>assets/images/Haley 2.jpg" class="d-block w-100" alt="Image SS2">
			  <div class="carousel-caption d-none d-md-block">
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="<?php echo base_url()?>assets/images/Amanda 2.jpg" class="d-block w-100" alt="Images SS3">
			  <div class="carousel-caption d-none d-md-block">
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="<?php echo base_url()?>assets/images/Artem 1.jpg" class="d-block w-100" alt="Images SS4">
			  <div class="carousel-caption d-none d-md-block">
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="<?php echo base_url()?>assets/images/Gill 1.jpg" class="d-block w-100" alt="Images SS5">
			  <div class="carousel-caption d-none d-md-block">
			  </div>
			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselmundano" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselmundano" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
	  </div>
	  <div class="col-lg-6 px-5 pt-5">
		<h1 style="font-family: Casta; font-weight: bold; font-size: 72px" class="py-2">MUNDANO</h1>
		<h4 style="font-family: Poppins" class="pb-4">Sign-in to your account</h4>
		<form action="login/ceklogin" method="post">
		  <div class="form-row">
			<div class="col-sm-6">
			 <input type="text" name="surei" placeholder="name@domain.com" class="form-control my-2" />
			</div>
		  </div>
		  <div class="form-row">
			<div class="col-sm-6">
			  <input type="password" name="pass" placeholder="minimun 8 characters" class="form-control my-2" />
			</div>
		  </div>
		  <div class="form-row">
			<div class="col-sm-6">
			  <input type="checkbox" value='1' name="rm" id="rm"/><label for="rm"> &nbsp; Remember me</label>
			</div>
		  </div>
		  <div class="form-row">
			  <div class="col-sm-6">
				<textarea style="width:100%" name="bio"></textarea>
			  </div>
		  </div>
		  <div class="form-row">
			<div class="col-sm-6">
			  <button class="btn btn-dark mt-3 mb-5" type="submit">Sign In</button>
			</div>
		  </div>
		  
		  <p>Forgot your password? <a href="#">Click Here</a></p>
		  <p>Don't have an account? <a href="#">Sign-Up</a></p>
		</form>
	  </div>
	</div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
