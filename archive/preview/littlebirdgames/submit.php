<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'info@littlebirdgames.com';

	// prepare a "pretty" version of the message
	$body = "This is the form that was just submitted:
	First Name:  $_POST[FirstName]
	Last Name:  $_POST[LastName]
	E-Mail: $_POST[Email]
	Message: $_POST[Message]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[Email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message to you
	mail($youremail, 'Contact Form', $body, $headers );
	
	/* Prepare autoresponder subject */
	$respond_subject = "Thank you for Contacting Little Bird Games";

	/* Prepare autoresponder message */
	$respond_message = "
	
	Hello $_POST[FirstName],
	
	Thank you for contacting Little Bird Games!  Someone will be in touch with you shortly.
	";
	
	/* Send the message using mail() function */
	mail($_POST[Email], $respond_subject, $respond_message,"From: <$youremail>");

}

// otherwise, let the spammer think that they got their message through

?>

<!DOCTYPE HTML>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="We make educational games that can turn any subject matter into an adventure." />
<meta name="keywords" content="Pennsylvania, Game Development, Game Design, Serious games, Mobile games, Badges, Achievements, Education, Instructional Design, Little, Bird, Games, North East" />
<meta name="author" content="" />
<meta name="google-site-verification" content="AqPRVOI8sCPwf8n3YUPsDmq4bWjCwaFneRCRXjwZfo0" />
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />


<!--[if lt IE 7.]> 
<script defer type="text/javascript" src="js/pngfix.js"></script> 
<![endif]--> 


<title>Little Bird Games - Thanks</title>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6154737-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
	
		<div id="header">
			<div class="wrapper">
			
				<a class="logoblock" href="http://littlebirdgames.com/" title="Little Bird Games">Little Bird Game</a>
				
				<ul id="nav">
					<li><a href="index.html" title="Home">Home</a></li>
					<li><a href="index.html#bird-feed" title="Bird Feed" >Bird Feed</a></li>
					<li class="push"><a href="index.html#what-we-do" title="What We Do">What We Do</a></li>
					<li><a href="index.html#bird-watching" title="bird-watcthing">Bird Watching</a></li>
					<li><a href="index.html#the-flock" title="The Flock">The Flock</a></li>
					<li class="last"><a href="index.html#get-in-touch" title="Contact" class="cta">Contact</a></li>
				</ul>
				
			</div>
			<!-- End .wrapper -->
		</div>
		<!-- End #header -->
		
		<div id="content">
			<div class="wrapper">
				
				<div class="home center">
					<h1 align="center" style="padding-top:200px;">Thanks</h1>
					<p align="center" class="intro">We'll get back to you as soon as possible.</p>
					<p align="center"><a href="index.html">Back to Homepage</a></p>
					
				</div>
				<!-- End .home -->
			</div> 
		</div>
		
		<div id="footer">
			<div class="wrapper">
			 <p>&copy; 2013 Little Bird Games&trade; LLC</p>
			 <p class="credit"><em>site by <b><a href="http://bradhdesign.com/" target="_blank">bradhdesign</a></b></em></p>
			</div> 
		</div>
		
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/jquery.ScrollTo.js" type="text/javascript"></script>
<script src="js/jquery.nav.min.js" type="text/javascript"></script>
<script src="js/validate.js" type="text/javascript"></script>	
<script src="js/jquery.anchor.js" type="text/javascript"></script>

		
	</body>
</html>
