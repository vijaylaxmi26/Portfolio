<?php

require('db.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];

    $sql="INSERT INTO `contactme`(`name`, `email`, `message`) VALUES ('$name','$email','$msg')";
    mysqli_query($conn,$sql);
    header('location: index.php');
    die();
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contect us</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="contectme_style.css">
	 
</head>
<body>

	<section class="contact">
		<div class="content">
			<h2>Contact Us</h2>
			<p>Technology ("science of craft", from Greek τέχνη, techne, "art, skill, cunning of hand"; and -λογία, -logia) is the sum of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation. ... Technology has many effects.</p>			
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Address</h3>
						<p>336450, vpo Dholipal</br> hanumangarh,Rajsthan</br>India.</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Phone</h3>
						<p>425315698</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Email</h3>
						<p>vijaylaxmiverma2001@gmail.com</p>
					</div>
				</div>
			</div>

			<div class="contactForm">
				<form method="post">
					<h2>Send Message</h2>
					<div class="inputBox">
						<input type="text" name="name" required="required">
						<span>Full spam</span>
					</div>
					<div class="inputBox">
						<input type="text" name="email" required="required">
						<span>Email</span>
					</div>
					<div class="inputBox">
						<textarea name="message" required="required"></textarea>
						<span>Type your Message</span>
					</div>
					<div class="inputBox">
						<input type="submit" name="submit" value="Send">
					</div>
				</form>

				<div class="back">
					<i class="fa fa-arrow-left" aria-hidden="true"></i><a href="index.html">Back to homepage</a>
				</div>
			</div>
		</div>
	</section>
 
</body>
</html>