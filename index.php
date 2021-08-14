<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Photoberry | An E-Commerce Website for Photo Studio</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="shortcut icon" type="image/png" href="img/camera-icon.png"/>
    
</head>
<body>
<!----new---->
<a name="home">
<section class="intro">
<nav class="navbar">
	<div class="max-width">
		<div class="logo">PhotoBerry.</div>
<ul class="menu">
	        <li><a href="#home">Home</a></li>
			<li><a href="#about">About Me</a></li>
			<li><a href="#port">Portfolio</a></li>
			<li><a href="#team">Team</a></li>
			<li><a href="#book">Booking</a></li>
		</ul>
	</div>
</nav>
<div class="clearfix"></div>
</section>

<!--- about page ---->
<a name="about">
<div class="clearfix"></div>
<h2>About Me</h2>
<section class="left-col">
<p style="text-indent: 6%; line-height: 35px;">I am so grateful for each and every experience that life has had offer me and I'm honestly humbled to be part of each and every moment. I am right there documenting this amazing moment...it is crazy bananas when you really stop and think about it! While i take this responsibilty of very seriously I do strive to create a confortable,relaxed atmosphere so you are free to be you.
Since I started to offer my photography services.I've become a respected leader in the art of photography.i believe that the quality of our work has only one judge - our customers. That's why we offer a client satisfaction guarantee for every project.I'm not happy,if my client aren't happy.</p>
</section>
<section class="sidebar">
<img src=/project/img/model.jpeg>
</section>

<!--- portfolio page ---->
<a name="port">
<div class="clearfix"></div>
<h2>My Portfolio</h2>
<nav class="port-nav">
<ul class="port-menu">
	        <li class="active"><a href="wedd.html" target="_self">Wedding</a></li>
			<li><a href="fash.html" target="_self">Fashion</a></li>
			<li><a href="port.html" target="_self">Portrait</a></li>
			<li><a href="macro.html" target="_self">Macro</a></li>
			<li><a href="family.html" target="_self">Family</a></li>
			<li><a href="land.html" target="_self">Landscape</a></li>
			<li><a href="fest.html" target="_self">Festivals</a></li>
		</ul>
</nav>

<div class="box">
<section class="one-third-port">
	<a href="img/im1.jpg" download="my photo"><img src="img/im1.jpg">
	</a>
	</section>
<section class="one-third-port">
	<a href="img/im7.jpg" download="my photo"><img src="img/im7.jpg">
	</a>
	</section>
<section class="one-third-port">
	<a href="img/im2.jpg" download="my photo"><img src="img/im2.jpg">
	</a>
	</section>
	<section class="one-third-port">
	<a href="img/im3.jpg" download="my photo"><img src="img/im3.jpg">
	</a>
	</section>
	<section class="one-third-port">
	<a href="img/im6.jpg" download="my photo"><img src="img/im6.jpg">
	</a>
	</section>
	<section class="one-third-port">
	<a href="img/im5.jpg" download="my photo"><img src="img/im5.jpg">
	</a>
	</section>

</div>

<!--- Team page ---->
<a name="team">
<div class="clearfix"></div>
<h2>Team</h2>
<div class="box2">
     <section class="one-third-team">
	<img src="img/team2m.jpg">
	<div class="team-text">
        <h2>Pallavi</h2>
        <p>Developer</p>
        <p>
        	<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        	<a href="https://msng.link/o/?pallavi_2424=ig" target="_blank"><i class="fa fa-instagram"></i></a>
        	<a href="https://wa.me/8427201204?text=welcome%20to%20PhotoBerry%20photography." target="_blank"><i class="fa fa-whatsapp"></i></a>
        </p>

	</div>
	</section>
	<section class="one-third-team">
     <img src="img/tm11.jpg">
     	<div class="team-text">
        <h2>Monika</h2>
        <p>Developer</p>
        <p>
        	<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        	<a href="https://msng.link/o/?monika_shuklaa=ig" target="_blank"><i class="fa fa-instagram"></i></a>
        	<a href="https://wa.me/7707961250?text=welcome%20to%20PhotoBerry%20photography." target="_blank"><i class="fa fa-whatsapp"></i></a>
        </p>

	</div>
	</section>
	<section class="one-third-team">
     <img src="img/team3mm.jpg">
     	<div class="team-text">
        <h2>Shreya</h2>
        <p>Developer</p>
        <p>
        	<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        	<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
        	<a href="https://wa.me/7707961250?text=welcome%20to%20PhotoBerry%20photography." target="_blank"><i class="fa fa-whatsapp"></i></a>
        </p>

	</div>
	</section>
</div>
<!--- contact page ---->
<a name="book">
<div class="clearfix"></div>
<h2>Done your booking here</h2>

<!--- feedback form ---->

<section>
<div class="feedback">
<form action="process.php">
	<div class="form-row">
		<div class="input-data">
			<input type="text" name="Fname" required>
			<label>First Name</label>
		</div>
    <div class="input-data">
			<input type="text" name="Lname" required>
			<label>Last Name</label>
		</div>	
	</div>
	<div class="form-row">
		<div class="input-data">
			<input type="text" name="Email" required>
			<label>Email ID</label>
		</div>
    <div class="input-data">
			<input type="text" name="contact" required>
			<label>Contact Number</label>
		</div>	
	</div>
    <div class="form-row">
		<div class="input-data">
			<input type="date" name="date" required>
			<label>Date of event</label>
		</div>
    <div class="input-data">
			<input type="time" name="time" required>
			<label>Timing to arrive</label>
		</div>	
	</div>
    <div class="form-row">
		<div class="input-data">
			<input type="text" name="event" required>
			<label>Event name</label>
		</div>
    <div class="input-data">
			<input type="text" name="loc" required>
			<label>Location</label>
		</div>	
	</div>
    <div class="form-row textarea">
		<div class="input-data textarea" required>
			<textarea cols="30" rows="5" name="msg" value="msg"></textarea>
			<label>Write Your Message</label>
		</div>	
	</div>
	<div class="form-row submit-btn">
		<div class="input-data">
			<div class="inner"></div>
			<input type="submit" value="submit">
            
		</div>
	</div>
	</form>
</div>
</section>
    
<section class="contact">
<p>Email me: <br class="break"><a href="mailto:monikashukla395@gmail.com">7056monika@gmail.com</a> <br class="break">+91-7707961250</p>
<p>1000 Street Road<br class="break">Ludhiana<br class="break"> Punjab<br class="break">141001</p>
</section>
<!---- footer ---->	
<div class="clearfix"></div>
<footer>
     <ul class="social">
	    <li><a href="#"></a><i class="fa fa-facebook"></i></li>
	    <li><a href="#"></a><i class="fa fa-instagram"></i></li>
	    <li><a href="https://wa.me/7707961250?text=welcome%20to%20PhotoBerry%20photography."></a><i class="fa fa-whatsapp"></i></li>
      </ul>
</footer>
<footer class="second">
	<p>&copy; Photography.</p>

</footer>



















</body>
</html>




