<!DOCTYPE html>
<html>
<head>
	<title>content</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ballet&family=Dancing+Script:wght@700&family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index.css">
	<style type="text/css">

		*{
			overflow: hidden;
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.content{
			width: 50%;
			position: relative;
			float: right;
			margin: 0;
			top: 0;
			left: 0;
			background-color: #066f8e;
			height: 100vh;
			overflow: scroll;
			visibility: hidden;
			padding: 5px;

			justify-content: space-between;
		}

		.self{
			width: 300px;
			clip-path: circle();
			margin-top: 20px;
		}
		.intro{
			display: flex;
		}
		.intro .text{
			padding-top: 50px;
			color: #fff;
		}
		span{
			height: 1px;
			width: 80%;
			justify-content: center;
			background-color: red;
			position: absolute;
			margin-left: 10%;
			margin-top: 20px;
		}
		.club{
			border: 1px solid white;
			margin-top: 40px;
			margin-left: 10%;
			margin-right:  10%;
			padding:20px;
			font-family: 'Playfair Display', serif;
		}
		.club h2{
			color: #1fe9ff;
			text-align: center;
		}
		.club .club_a,.club_b{
			display: flex;
		}
		.club img{
			width: 50px;
			clip-path: circle();
		}
		.club h3{
			color: white;
			padding-left:20px;
		}

		.Achivments{
			margin-left: 10%;
			margin-right: 10%;
			margin-top: 40px;
			color:white;
		}
		.Achivments h2{
			text-align: center;
			font-family: 'Playfair Display', serif;
			color:#1fe9ff;

		}
		.Achivments h3{
			text-transform: uppercase;
		}
		.about{
			margin-top: 40px;
			color: white;
			margin-left: 10%;
			margin-right: 10%;
			border: 2px solid white;
			padding: 10px;
			text-align: center;
		}

		.social{
			margin-top: 40px;
			margin-left: 10%;
			margin-right: 10%;
			color: white;
			border: 3px solid white;
			padding: 20px;
			display: wrap;
			padding-bottom: 5px;
		}
		.contain{
			display: flex;
		}
		.social .social_a{
			display: flex;
			padding: 20px;
		}
		.social .social_a img{
			width: 30px;
			height: 30px;
		}
		.social .social_a .text_link{
			padding-left: 10px;
		}


		.social .social_a .text_link a {
			color: black;
			background-color: transparent;
			text-decoration: none;
		}

		.social .social_a .text_link a:hover {
			color: white;
			background-color: transparent;
			text-decoration: underline;
		}
		.content.active{
			visibility:visible;
		}

		header{
			height: 50px;
			width: 100%;
			background-color: #066f8e;
			transition: 0.4s;
		}


		.menuToggle{
			position: relative;
			top:2px;
			left: 96%;
			width: 40px;
			height: 40px;
			background: url(menu.png);
			background-size: 30px;
			background-repeat: no-repeat;
			background-position: center;
			cursor: pointer;
		}
		.menuToggle.active{
			background: url(cancel.png);
			background-size: 25px;
			background-repeat: no-repeat;
			background-position: center;
		}

		@media (max-width: 991px){

			.content{
				width: 100%;
			}

			.menuToggle{
				left: 85%;
			}

		}

		.back{
			height: 100vh;
			width: 100%;
			position: fixed;
			background-repeat: no-repeat;
			background-size: cover;
			z-index: -1;
		}

	</style>
	
</head>
<body>
	<header>
		<div class="menuToggle" onclick="toggleMenu();"></div>
	</header>


	<div class="back">
		<div class="banner1">
			<img src="b3.jpg">
			<div class="outine">
				<h1 style="text-align: center">WELECOM TO MY PORTFOLIO</h1>
			</div>
		</div>
		<div class="banner2">
			<img src="b4.jpg">
			<div class="outine">
				<h1 style="text-align: center">WELECOM TO MY PORTFOLIO</h1>
			</div>
		</div>
		<div class="banner3">
			<img src="b7.jpg">
			<div class="outine">
				<h1 style="text-align: center">WELECOM TO MY PORTFOLIO</h1>
			</div>
		</div>
		<div class="banner4">
			<img src="b8.jpg">
			<div class="outine">
				<h1 style="text-align: center">WELECOM TO MY PORTFOLIO</h1>
			</div>
		</div>
	</div>


	<div class="content" id="content">
		<div class="intro">
			<img src="self.jfif" class="self">
			<div class="text">
				<h1>VIJAY LAXMI</h1>
				<p style="font-family: 'Dancing Script', cursive; font-size: 20px;">Computer Science Engineer</p>   		
			</div>
		</div>
		<div>
			<span></span>
		</div>  

		<div class="club">
			<h2>CLUB MEMBER IN NIT SURAT</h2><br> 
			<div class="club_a">
				<img src="dsc.jpg">
				<h3>DSC Club Member NIT Surat</h3>
			</div>
			<br>
			<div class="club_b">
				<img src="acm.jfif">
				<h3>Acm Club Member NIT Surat</h3>
			</div>

		</div>

		<div>
			<span></span>
		</div> 

		<div class="Achivments">
			<br>
			<h2>Achivments</h2>
			<br>

			<div class="A_1">
				<h3> &rarr; SHOPPING WEBSITE</h3>
				<br>
				<p style="text-align: center; font-family: 'Dancing Script', cursive; font-size: 20px;">A website where the user can buy different items(Only Frontend)</p>
				<br>
			</div>
			<div class="A_2">
				<h3> &rarr; Website on golden ratio</h3>
				<br>
				<p style="text-align: center; font-family: 'Dancing Script', cursive; font-size: 20px;">A webste created on golden ratio. (only front end).</p>
				<br>
			</div>
			<div class="A_3">
				<h3> &rarr; Ethereum</h3>
				<br>
				<p style="text-align: center; font-family: 'Dancing Script', cursive; font-size: 20px;">Build an Ethereum test chain and operate on the chain.</p>
				<br>
			</div>
			<div class="A_4">
				<h3> &rarr; Ping pong game</h3>
				<br>
				<p style="text-align: center; font-family: 'Dancing Script', cursive; font-size: 20px;">Basic game purely implemented in Javascript.</p>
				<br>
			</div>
			<div class="A_5">
				<h3> &rarr; Education web Applicatio</h3>
				<br>
				<p style="text-align: center; font-family: 'Dancing Script', cursive; font-size: 20px;">A web application where you can chat with different user and interact with your teacher.(currently working on)</p>
				<br>
			</div>
			<div class="A_6">
				<h3> &rarr; Block chain</h3>
				<br>
				<p style="text-align: center; font-family: 'Dancing Script', cursive; font-size: 20px;">Able to recognize foundational concepts of blockchain, and able to apply these program concepts on the blockchain.</p>
				<br>
			</div>

		</div>

		<div>
			<span></span>
		</div> 

		<div class="about">
			<h2>About ME</h2>
			<br>
			<h3 style="font-family: 'Playfair Display', serif;, cursive; font-size: 20px;">I am a computer science engineering student at NIT SURAT, graduating in 2023. I am eager to secure challenging roles in this field.
			</h3></br></br>

		I was delighted to be presented with the opportunity to utilise the skills gained during my studies to solve problems in the real world scenario. </br></br>

	My studies have provided me with broad proficiency to use various methods, tools, software packages and techniques.??Alongside the college studies, doing more effective compulational problems makes my mind sharp and encourages me to work efficiently. </br></br>

As such, I am confident that I can make an instant impact in engineering roles.</br></br>

I am eager to hear about potential career opportunities.
If i talk about my skills, i have a very good hand in solving various computional programming questions. I am very good at designing posters and logos. Along with that i am a full stack developer.</h3>
</div>

<div>
	<span></span>
</div>

<div class="social">
	<div class="contain">
		<div class="social_a">
			<img src="GitHub.png">
			<div class="text_link"> 
				<a href="https://github.com/vijaylaxmi26">github.com/vijaylaxmi26</a>
			</div>
		</div>
		<div class="social_a">
			<img src="linkedin.png">
			<div class="text_link"> 
				<a href="https://www.linkedin.com/in/vijaylaxmi-verma-a47376204/">linkedin.com/in/vijaylaxmi</a>
			</div>
		</div>
	</div>
	<div class="social_a">
		<img src="email.png">
		<div class="text_link"> 
			<p>vijaylaxmi262001@gmail.com</p>
		</div>
	</div>

    <div class="social_a">
		<div class="text_link contact"> 
			<a href="contectme.html">Contact Me</a>
		</div>
	</div>

</div>
<br>

</div>


<script type="text/javascript">
	function toggleMenu(){
		const menuToggle = document.querySelector('.menuToggle');
		const content = document.querySelector('.content');
		menuToggle.classList.toggle('active');
		content.classList.toggle('active');

	}
</script>

</body>
</html>