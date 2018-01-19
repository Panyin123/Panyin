<?php include('inc/header.php') ?>
<html>
	<head>
		<title>Ministry of planning Contact</title>
		<link
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
	    <style type="text/css">
	        #wrapper {
	        width:450px;
	        margin:0 auto;
	        font-family:Verdana, sans-serif;
		    }
		    legend {
		        color:#0481b1;
		        font-size:16px;
		        padding:0 10px;
		        background:#fff;
		        -moz-border-radius:4px;
		        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
		        padding:5px 10px;
		        text-transform:uppercase;
		        font-family:Helvetica, sans-serif;
		        font-weight:bold;
		    }
		    fieldset {
		        border-radius:44px;
		        background: #fff; 
		        background: -moz-linear-gradient(#fff, #f9fdff);
		        background: -o-linear-gradient(#fff, #f9fdff);
		        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
		        background: -webkit-linear-gradient(#fff, #f9fdff);
		        padding:20px;
		        border-color:rgba(4, 129, 177, 0.4);
		    }
		    input,
		    textarea {
		        color: #373737;
		        background: #fff;
		        border: 1px solid #CCCCCC;
		        color: #aaa;
		        font-size: 14px;
		        line-height: 1.2em;
		        margin-bottom:15px;

		        -moz-border-radius:4px;
		        -webkit-border-radius:4px;
		        border-radius:4px;
		        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
		    }
		    input[type="text"],
		    input[type="password"]{
		        padding: 8px 6px;
		        height: 22px;
		        width:280px;
		    }
		    input[type="text"]:focus,
		    input[type="password"]:focus {
		        background:#f5fcfe;
		        text-indent: 0;
		        z-index: 1;
		        color: #373737;
		        -webkit-transition-duration: 400ms;
		        -webkit-transition-property: width, background;
		        -webkit-transition-timing-function: ease;
		        -moz-transition-duration: 400ms;
		        -moz-transition-property: width, background;
		        -moz-transition-timing-function: ease;
		        -o-transition-duration: 400ms;
		        -o-transition-property: width, background;
		        -o-transition-timing-function: ease;
		        width: 380px;
		        
		        border-color:#ccc;
		        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
		        opacity:0.6;
		    }
		    input[type="submit"]{
		        background: #222;
		        border: none;
		        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
		        text-transform:uppercase;
		        color: #eee;
		        cursor: pointer;
		        font-size: 15px;
		        margin: 5px 0;
		        padding: 5px 22px;
		        -moz-border-radius: 4px;
		        border-radius: 4px;
		        -webkit-border-radius:4px;
		        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
		        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
		        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
		    }
		    textarea {
		        padding:3px;
		        width:96%;
		        height:100px;
		    }
		    textarea:focus {
		        background:#ebf8fd;
		        text-indent: 0;
		        z-index: 1;
		        color: #373737;
		        opacity:0.6;
		        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
		        border-color:#ccc;
		    }
	    </style>

        <div id="wrapper">
	        <form action="" method="post">
	            <fieldset>
	                <legend>Contact Us Form</legend>
	                <div>
	                    <input type="text" name="first_name" placeholder="First Name"/>
	                </div>

	                <div>
	                    <input type="text" name="email" placeholder="Email"/>
	                </div>
	                <div>
	                    <textarea name="message" placeholder="Message"></textarea>
	                </div>    
	                <input type="submit" name="submit" value="Send"/>
	            </fieldset>    
	        </form>
        </div>

	    <div class="company_address">
	    	<div class="container">
	    		<div class="row">
			    	<div class="col-md-6">
					    <h3>Information :</h3>
						<p>Christianburg Osu</p>
						<p>22-56-2-9 Sit Amet, Lorem,</p>
						<p>Ghana</p>
					    <p>Phone:(00) 222 666 444</p>
					    <p>Fax: (000) 000 00 00 0</p>
					    <p>Email: <span><a href="#">info@mycompany.com</span></a></p>
						<p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
					</div>

					<div class="col-md-6">
					    <h3>Find us here </h3>
                        <iframe 
	                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.1355564830537!2d-0.18552168572542826!3d5.
	                        546911635284435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9063e97d81d5%3A0x450ba148b7e400d!2
	                        sOsu+Castle!5e0!3m2!1sen!2sgh!4v1497800936494" width="400" height="300" frameborder="0" style="border:0" 
	                        allowfullscreen>
                        </iframe>
					</div>		
				</div>
			</div>
		</div>
	    

        <footer class="page-footer #222222">
            <div class="container">
	            <div class="row">
	                <div class="col-md-6">
                        <h3>Information</h3>
                        <ul class="list-unstyled">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h3><span class="glyphicon glyphicon-list-alt"></span> Newsletter</h3>
                        <p>Sign up for new info </p>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email address">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    Subscribe!
                                </button>
                            </span>
                        </div>
                    </div>
	            </div>
            </div>
            <div class="footer-copyright">
	            <div class="container">
	            <p>Ministry of Planning <?php echo date("Y") ?></p>
	            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
	            </div>
            </div>
        </footer>            
	</body>
</html>

<?php 
	$to = 'panyinpokudankwa3@gmail.com';
	$subject = 'Free The Mind Movement';
	$body = $comment;
	$headers = $first_name;

    if (mail($to, $subject, $message)) {
    	echo "Message sent ";
    }else{
    	echo "Error sending message";
    }
?>