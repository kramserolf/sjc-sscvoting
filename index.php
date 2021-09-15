<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<img src="images/sjc.png" alt="sjc logo" style="width:auto; height:80px;"><br>
			<b>SSC Voting System</b>
		</div>

		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start voting </p>

			<form action="login.php" method="POST">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="voter" placeholder="Student's ID" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Department" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i
								class="fa fa-sign-in"></i> Sign In</button>
					</div>
				</div>
			</form>
		</div>
		<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
	</div>

	<?php include 'includes/scripts.php' ?>
</body>

</html>