<!--  NAME: Khaliq Khan              										-->
<!--  DATE: September 19th, 2018            								-->
<!--  PROGRAM: KKBio.php              										-->
<!--  PURPOSE:  this program displays my name, my picture, a short 			-->
<!--			bio and randomly displays a quote 							-->

<!DOCTYPE html>
<html>

	<!-- Page Title-->
	<title>Khaliq Khan's Short Bio</title>

	<head>
		<!-- Style sheet for the format of the informtion on the page -->
  		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<!-- include PHP with random quote generator -->
		<?php include('QuoteGenerator.php'); ?>
		
		<!-- Header Name -->
		<h1>Khaliq Khan</h1>
		
		<!-- Image to be displayed -->
		<IMG class="displayed" src="KKPicture.jpg" alt="Khaliq Khan">
		<h1>About me</h1>

		<!-- Brief Bio of myself -->
		<P class="blocktext">
			Over the past 24+ years, I have demonstrated a track record for successful delivery, 
			building teams focused on business outcomes and engaging customer experiences. I am deeply passionate 
			about Digital technologies (Commerce, Content, Marketing & Analytics) and have represented Accenture 
			at numerous high profile events.
		<br><br>

			Some of the highlights of my career include:
		<br>
			•	Delivering ground-breaking business solutions, including 10+ Omni-channel Transformations and 5+ Global Applied Analytics implementations
		<br>
			•	Winning various awards, including recognition from UK government for Innovation
		<br>
			•	Leading Applied Research programme into Sensor Telemetry at Accenture Technology Lab
		<br><br>
			I have had cultural submersion across the many countries, having worked and lived in US, UK, France, Germany, 
			Denmark, Spain, Italy and most recently in the UAE.

		</p>
		
		<!-- Random quote logic -->
		<h1>Random Quote</h1>
		
		<div>
			<?php	
				// call quote function to get quote
				echo quoteFunction(rand(0,4)); 
			?>
		</div>
	</body>
</html>