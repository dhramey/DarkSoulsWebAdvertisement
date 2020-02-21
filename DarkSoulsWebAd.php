<!DOCTYPE html>
<html>
<head>
	<title> Daniel Ramey Designs - Homepage </title>
    	<!--
		Author: Daniel Ramey
		Date Created: 2018
    	-->

	<meta name="description" content="Daniel Ramey Designs is a web presence reflecting the art and works of Daniel Ramey.
		It is an amalgam of sketches, computer graphics, and projects created over the past couple of years.
		Thank you for looking!" />

	<meta name="keywords" content="Daniel Ramey, homepage, art, graphics,
		web design, sketches, photoshop, illustrator, indesign html, css" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<style>
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}
		
		:root {
			--ad-height-wide-skyscraper: 600px;
			--ad-width-wide-skyscraper: 160px;
			--ad-margin-top: 130px;			
		}
		
		@font-face {
			font-family: "Optimus Princeps";
			src: url("./fonts/optimusprinceps/OptimusPrinceps.ttf");
		}
		@font-face {
			font-family: "Optimus Princeps";
			src: url("./fonts/optimusprinceps/OptimusPrincepsSemiBold.ttf");
			font-weight: bold;
		}
		
		main {
			display: flex;
			flex-direction: row;
			width: 100%;
		}
		
		img {
			height: auto;
			object-fit: contain;
			width: 100%;
		}
		
		.box1, .soulsAdBoxLeft, .box3, .soulsAdBoxRight {
			height: var(--ad-height-wide-skyscraper);
			margin: var(--ad-margin-top) 30px 0 30px;
			width: var(--ad-width-wide-skyscraper);				
		}
		
		.box1 {
			background-color: red;
			position: relative;
		}
		
		.soulsAdBoxLeft {
			background-color: orange;
			background-image: url(images/DarkSign.jpg);
			background-position: 0% 50%;
			background-repeat: no-repeat;
			background-size: cover;
			font-family: "Optimus Princeps", serif;
			font-size: 2.5em;
			line-height: 75px;
			overflow: hidden;
			position: sticky;
			text-align: center;
			top: 60px;
		}
		.soulsAdBoxLeft a {
			align-items: center;
			color: white;
			display: flex;
			flex-direction: column;
			height: 100%;
			justify-content: center;
			text-decoration: none;
			width: 100%;
		}
		.soulsAdBoxLeft p {
			z-index: 10;
		}
		.soulsAdBoxLeft img {
			bottom: -10px;
			height: 95%;
			object-fit: cover;
			object-position: center;
			opacity: 0;
			position: absolute;
			left: -410px;
			width: auto;
		}
		
		.box3 {
			background-color: yellow;
			position: relative;
		}
		
		.soulsAdBoxRight {
			background-color: green;
			background-image: url(images/DarkSign.jpg);
			background-position: 100% 50%;
			background-repeat: no-repeat;
			background-size: cover;
			font-family: "Optimus Princeps", serif;
			font-size: 3em;
			overflow: hidden;
			position: sticky;
			text-align: center;
			text-transform: uppercase;
			top: 60px;
		}
		.soulsAdBoxRight a {
			align-items: center;
			color: white;
			display: flex;
			height: 100%;
			justify-content: center;
			text-decoration: none;
			width: 100%;
		}
		.soulsAdBoxRight p {
			z-index: 10;
		}
		.soulsAdBoxRight img {
			height: 140%;
			object-fit: cover;
			object-position: center;
			opacity: 0;
			position: absolute;
			right: -500px;
			top: -15px;
			width: auto;
		}
		.soulsAdBoxRight img:last-of-type {
			height: 95%;
			right: -375px;
		}
		
		.soulKnight1 {
			left: 10vw;
			position: fixed;
			top: 250px;
			transform: translateX(-200vw);
			z-index: 20;
		}
		.soulMonster1 {
			position: fixed;
			right: 10vw;
			top: 75px;
			transform: translateX(200vw);
			z-index: 10;			
		}
		.spark1 {
			align-items: center;
			display: flex;
			height: 100%;
			justify-content: center;
			opacity: 0;
			position: fixed;
			width: 100%;
			z-index: 15;
		}
		.spark1 img {
			height: auto;
			margin: 0 0 250px 400px;
			object-fit: contain;
			position: fixed;
			width: 60%;
		}
		.spark1 img:first-of-type {
			filter: brightness(300%) blur(3px);
			width: 61%;
		}

		.soulKnight1Animate {
			animation-duration: 6.5s;
			animation-fill-mode: forwards;
			animation-name: soulKnight1Animation;
			animation-timing-function: ease-out;
		}		
		.soulMonster1Animate {
			animation-duration: 6.5s;
			animation-fill-mode: forwards;
			animation-name: soulMonster1Animation;
			animation-timing-function: ease-out;			
		}		
		.spark1Animate {
			animation-delay: 2.25s;
			animation-duration: 5s;
			animation-fill-mode: forwards;
			animation-name: spark1Animation;
			animation-timing-function: ease;			
		}
		.soulsBoxAnimate {
			animation-delay: 4.5s;
			animation-duration: 4s;
			animation-fill-mode: forwards;
			animation-name: soulsBoxAnimation;
		}
		.glow {
			animation: glow 2s ease-in-out infinite alternate;
			color: #ffffff;
		}
		
		@keyframes soulKnight1Animation {
			0% {}
			30% {transform: translateX(0vw);}
			55% {opacity: 1; transform: translateX(0vw);}
			99% {z-index: 20;}
			100% {opacity: 0; transform: translateX(-50vw); z-index: -1}
		}
		@keyframes soulMonster1Animation {
			0% {}
			30% {transform: translateX(0vw);}
			55% {opacity: 1; transform: translateX(0vw);}
			99% {z-index: 10;}
			100% {opacity: 0; transform: translateX(50vw); z-index: -1}
		}
		@keyframes spark1Animation {
			0% {opacity: 0;}
			4% {opacity: 1;}
			99% {z-index: 15;}
			100% {opacity: 0; z-index: -1}
		}
		@keyframes soulsBoxAnimation {
			0% {opacity: 0;}
			100% {opacity: .85;}
		}
		@keyframes glow {
			0% {
				text-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #e65c00, 0 0 40px #e65c00, 0 0 50px #e65c00, 0 0 60px #e65c00, 0 0 70px #e65c00;
			}
			100% {
				text-shadow: 0 0 20px #ffffff, 0 0 30px #ff8533, 0 0 40px #ff8533, 0 0 50px #ff8533, 0 0 60px #ff8533, 0 0 70px #ff8533, 0 0 80px #ff8533, 0 0 90px #ff8533;
			}
		}
		
		@media only screen and (min-width: 480px) and (max-width: 767px) {
		}
		@media only screen and (min-width: 768px) {
		}
	</style>
	
<!--	<script src="javascript/javascriptMain.js"></script>-->
	
	<script>
		
		function setupJavascript() {
			const webAd = document.querySelector('.soulsAdBoxLeft');

			const options = {
				root: null,
				rootMargin: '0px',
				threshold: 1
			}

			let observer = new IntersectionObserver(function (entries, self) {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
//						console.log('in the view');
						document.querySelector('.soulKnight1').classList.add('soulKnight1Animate');
						document.querySelector('.soulMonster1').classList.add('soulMonster1Animate');
						document.querySelector('.spark1').classList.add('spark1Animate');
						var adBoxes = document.querySelectorAll('.soulsAdBoxLeft img, .soulsAdBoxRight img');
						for (var i=0; i<adBoxes.length; i++) {
							adBoxes[i].classList.add('soulsBoxAnimate');
						}
						self.unobserve(entry.target);
					}
				});
			}, options);

			observer.observe(webAd);			
		}
		
	</script>
</head>

<body onload="setupJavascript();">
	
	<main>
		<div class="soulKnight1">
			<img src="./images/SoulsKnight1-Small.png" />
		</div>
		<div class="soulMonster1">
			<img src="./images/SoulsMonster1-Small.png" />
		</div>
		<div class="spark1">
			<img src="./images/Spark1-Flip.png" />
			<img src="./images/Spark1-Flip.png" />
		</div>
		
		<div>
			<div class="box1">&nbsp;</div>
			<div class="soulsAdBoxLeft">
				<a href="javascript:void(0)">
					<p class="glow">
						Will
						<br/>
						you
						<br/>
						save 
						<br/>
						them...
					</p>
					<img src="./images/SoulsKnight1-Small.png" />
					<img src="./images/Spark1-Flip.png" />
				</a>
			</div>		
		</div>
		
		<div class="background">
			<img src="./images/Screen%20Shot%202019-05-15%20at%203.43.30%20PM.png" />
			<img src="./images/Screen%20Shot%202019-05-15%20at%203.45.42%20PM.png" />	
			<img src="./images/Screen%20Shot%202019-05-15%20at%203.45.56%20PM.png" />		
		</div>
		
		<div>
			<div class="box3">&nbsp;</div>
			<div class="soulsAdBoxRight">
				<a href="javascript:void(0)">
					<p class="glow">
						Dark
						<br/>
						Souls
					</p>
					<img src="./images/SoulsMonster1-Small.png" />
					<img src="./images/Spark1.png" />
				</a>
			</div>
		</div>
	</main>
	
</body>
</html>