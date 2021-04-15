
<?php include('login/server.php') ?>




<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<title>Sign Up – Swipe</title>
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap core CSS -->
		<link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
		<!-- Swipe core CSS -->
		<link href="dist/css/swipe.min.css" type="text/css" rel="stylesheet">
		<!-- Favicon -->
		<link href="dist/img/favicon.png" type="image/png" rel="icon">
         <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body class="start">
		<main>
			<div class="layout">
				<!-- Start of Sign Up -->
				<div class="main order-md-2">
					<div class="start">
						<div class="container">
							<div class="col-md-12">
								<div class="content">
									<h1>Create Account</h1>
									<div class="third-party">
										<button class="btn item bg-blue">
											<i class="fa fa-facebook" style="font-size:25px; color:#fff"></i>
										</button>
										<button class="btn item bg-teal">
											<i class="fa fa-google-plus" style="font-size:25px; color:#fff"></i>
										</button>
										
									</div>
									<p>or use your email for registration:</p>
									<form class="signup" method="post" action="" >
                                        
                                        
                                        <?php include("login/error.php"); ?>
                                        
										<div class="form-parent">
											<div class="form-group">
												<input type="text" name="username" id="inputName" class="form-control" placeholder="Username" value="<?php echo $username; ?>" required>
												<button class="btn icon"><i class="material-icons">person_outline</i></button>
											</div>
											<div class="form-group">
												<input type="text" name="phone" id="inputPhone" class="form-control" placeholder="phone" value="<?php echo $phone; ?>" required>
												<button class="btn icon"><i class="material-icons">phone_outline</i></button>
											</div>
										</div>
                                        
                                        <div class="form-group">
												<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address" value="<?php echo $email; ?>" required>
												<button class="btn icon"><i class="material-icons">mail_outline</i></button>
											</div>
                                        
                                        
                                        
                                        <div class="form-parent">
										<div class="form-group">
											<input type="password" name="password_1" id="inputPassword" class="form-control" placeholder="Password" required>
											<button class="btn icon"><i class="material-icons">lock_outline</i></button>
										</div>
                                        <div class="form-group">
											<input type="password"  name="password_2" id="inputPassword" class="form-control" placeholder="Confirm password" required>
											<button class="btn icon"><i class="material-icons">lock_outline</i></button>
										</div>
                                        </div>
										<button type="submit" name="reg_user" class="btn button" >Sign Up</button>
										<div class="callout">
											<span>Already a member? <a href="sign-in.php">Sign In</a></span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sign Up -->
				<!-- Start of Sidebar -->
				<div class="aside order-md-1" style="background-image: url('img/1.jpg');">
					<div class="container">
						<div class="col-md-12">
							<div class="preference">
								<h2>Live <span style="background-color: brown; padding:10px 5px 10px 5px; color:white; font-weight: 800; border-radius:5px;">Biz</span></h2>
								<p>keeps you connected with your friends.. please login with your personal info.</p>
								<a href="sign-in.php" class="btn button">Sign In</a>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sidebar -->
			</div> <!-- Layout -->
		</main>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="dist/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="dist/js/vendor/popper.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
	</body>


</html>