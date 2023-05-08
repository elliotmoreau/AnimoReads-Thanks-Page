<?php

// Include the settings file
require_once "settings.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $name ?> - Merci pour votre don !</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap');

		body {
			font-family: 'Readex Pro', 'Manrope', sans-serif;
			background-color: #f2f2f2;
			text-align: center;
			padding-top: 50px;
			overflow: hidden;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.thank-you-message {
			background: linear-gradient(to right, #FE9D64, #F77062);
			border: 2px solid #FE9D64;
			max-width: 600px;
			margin: 0 auto;
			padding: 40px;
			border-radius: 8px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
			position: relative;
			color: #fff;
		}

		h1 {
			color: #fff;
			font-size: 36px;
			margin-bottom: 20px;
			text-transform: uppercase;
		}

		p {
			color: #fff;
			font-size: 18px;
			margin-bottom: 30px;
		}

		.confetti-container {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			pointer-events: none;
			z-index: 1;
		}

		.confetti {
			position: absolute;
			width: 10px;
			height: 10px;
			border-radius: 50%;
			pointer-events: none;
			animation: confetti-fall 4s ease-in-out infinite;
		}

		.confetti-yellow {
			background-color: #FFD700;
		}

		.confetti-blue {
			background-color: #336699;
		}

		.confetti-red {
			background-color: #FF0000;
		}

		.confetti-green {
			background-color: #00FF00;
		}

		.confetti-purple {
			background-color: #800080;
		}

		@keyframes confetti-fall {
			0% {
				transform: translateY(-100%);
			}
			100% {
				transform: translateY(100vh);
			}
		}

	</style>
</head>
<body>
	<div class="thank-you-message">
		<h1>Merci pour votre don !</h1>
		<p>Nous tenons à vous exprimer notre profonde gratitude pour votre généreuse contribution. Votre soutien signifie énormément pour nous.</p>
		<p>Encore une fois, merci pour votre gentillesse et votre générosité. Nous apprécions votre engagement envers notre cause.</p>
		<p>Cordialement,</p>
		<p>- <?= $name ?></p>
	</div>

	<div class="confetti-container"></div>

	<script>
		function createConfetti() {
			const colors = ['confetti-yellow', 'confetti-blue', 'confetti-red', 'confetti-green', 'confetti-purple'];
			const confettiContainer = document.querySelector('.confetti-container');
			const confetti = document.createElement('div');
			const color = colors[Math.floor(Math.random() * colors.length)];
			confetti.classList.add('confetti', color);
			confetti.style.left = Math.random() * 100 + 'vw';
			confettiContainer.appendChild(confetti);

			setTimeout(() => {
				confetti.remove();
			}, 5000);
		}

		setInterval(createConfetti, 200);
	</script>
</body>
</html>