<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=320, initial-scale=1">
	<script src="script/script.js"></script>
	<script src="script/jquery.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<title>
		<?php 
			echo ($title);
		?> 
		| ESeng
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="top-bar" id="top">
			<div class="top-bar__content fixed flex">
				<nav class="top-bar__nav">
					<ul>
						<li class="logo"><a href="index.php">ESeng</a></li>
						<li><a href="posts.php">Posts</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>