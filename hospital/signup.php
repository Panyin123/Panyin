<html>
	<head>
		<title>signup</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="css/signup.css">
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

<div class="container">

    <form id="signup">

        <div class="header">
        
            <h3>Sign Up</h3>
            
        </div>
        
        <div class="sep"></div>

        <div class="inputs">
            <form>
	            <input type="FirstName" name="firstname" placeholder="fist name" autofocus />
	            <input type="LastName" name="lastname" placeholder="last name" autofocus />
	            <input type="username" name="" placeholder="username" autofocus />
	            <input type="email" placeholder="e-mail" autofocus />
	        
	            <input type="password" placeholder="Password" />
	            
	            <div class="checkboxy">
	                <input name="cecky" id="checky" value="1" type="checkbox" /><label class="terms">I accept the terms of use</label>
	            </div>
            </form>
            
            <a id="submit" href="#">SIGN UP FOR INVITE NOW</a>
        
        </div>

    </form>

</div>
​

  