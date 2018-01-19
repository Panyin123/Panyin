<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="index.php">Panacea hospital</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
			    <li><a href="index.php">Home</a></li>
			    <li><a href="Contact.php">Contact</a></li>
			    <li><a href="about.php">about</a></li>
			    <li><a href="signup.php">sign</a></li>
			    <li><a href="Login.php">Login</a></li>
		    </ul>
	    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

   <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> 
      <p><a href="reset.php">forgot your password</a></p>  
      <p><a href="signup.php">do you have an account?</a></p> 
    </form>
  </div>

</body>
</html>
  