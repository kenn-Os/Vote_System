<?php
  	// Start a session to manage user sessions
  	session_start();

  	// Check if the user is already logged in as an admin
  	if(isset($_SESSION['admin'])){
    	// If yes, redirect to the home.php page
    	header('location:home.php');
  	}
?>

<?php include 'includes/header.php'; ?>
<!-- HTML body with a specific class for styling purposes -->
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<!-- Display the logo for the ApTech Voting System -->
  		<b>ApTech Voting System</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to start your session</p>

    	<!-- Login form with username and password fields -->
    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<!-- Input field for the username -->
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          
          <div class="form-group has-feedback">
            <!-- Input field for the password -->
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<!-- Submit button to submit the login form -->
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		// Display an error message if it is set in the session
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			// Unset the error message to avoid displaying it again
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
<!-- Footer and closing HTML tags -->
<footer>
</html>
