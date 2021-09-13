<?php
	require_once "functions.php";
	$title = "Homepage";
	require 'header.php';
	$review = getReviewsById ();
?>
<script src="script/script.js"></script>
	<main>
		<div class="bg_shape1"></div>
		<div class="bg_shape2"></div>
		<div class="bg_shape3"></div>

		<!-- about me -->
		<div class="ab-me fixed flex" id="about">
			<div class="ab-me__block flex">
				<div class="ab-me__h2 h2-div">
					<h2>Would you like to know more about me? Here are some facts about:</h2>
				</div>
					<div class="ab-me__text main-list">
						<ul><div class="my-ed">My education and expertise:</div>
							<li>A diploma, with honors, in teaching foreign languages</li>
							<li>20+years of experience in teaching English</li>
							<li>A Teaching Knowledge Test certificate (Cambridge)</li>
						</ul>
					</div>
					<div class="ab-me__text main-list">
						<ul><div class="my-ex">My exposure to the English language and American culture:</div>
							<li>US work and study experience</li>
							<li>A good deal of travel across the USA</li>
							<li>Watching movies and TV-shows in English</li>
						</ul>
					</div>
			</div>
			<div class="ab-me__img">
				<img src="img/me.jpg">
			</div>
		</div>
		<!-- my technical solutions -->
		<div class="adv fixed flex" id="reasons">
			<div class="adv__h2 h2-div">
				<h2>Reasons to choose me:</h2>
			</div>
			<div class="adv__block flex">
				<div class="main-list reasons-list">
					<ul><div class="my-pr">My teaching practices:</div>
						<li>Interactive one-on-one/pair/group online lessons</li>
						<li>Communicative online course suitable for systematic FCE preparation</li>
						<li>Thorough language work designed to improve learners' overall English level to B2</li>
						<li>Focus on speaking, listening and vocabulary</li>
						<li>Grammar in context</li>
						<li>Use of FCE and CAE type tasks</li>
						<li>Individual 24/7 language practice on Moodle</li>
					</ul>
				</div>
				<div class="main-list reasons-list">
					<ul><div class="my-sol">My technical solutions:</div>
						<li>Online lesson on Skype or Zoom</li>
						<li>Platform (learning management system) Moodle with</li>
						<li>FCE exam papers</li>
						<li>Grammar explanations</li>
						<li>Listening, reading, vocabulary and grammar exercises to get used to the exam format</li>
						<li>Quizzes</li>
						<li>Conversation simulation for speaking tasks</li>
						<li>Writing activities</li>
					</ul>
				</div>
				<div class="main-list reasons-list">
					<ul><div class="my-pas">My passion about teaching:</div>
						<li>Creative lessons</li>
						<li>Cutting-edge digital tools in my virtual classroom</li>
						<li>Use of authentic listening and reading materials</li>
						<li>Constant profession development</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- reviews -->
		<div class="reviews fixed flex" id="reviews">
			<div class="reviews__h2 h2-div">
				<h2>Reviews</h2>
			</div>
			<div class="review__block">
				<?php
					for ($i=0; $i < count($review); $i++) {
						echo '<div class="review">';
						echo '<img src="img/reviews/review'.$review[$i]["id_review"].'.jpg">';
						echo '<div class="review__name">'.$review[$i]["name"].'</div>';
						echo '<div class="review__text">'.$review[$i]["text"].'</div>';
						echo '</div>';
					}
				?>
			</div>
		</div>
		<!-- test -->
		<div class="test fixed flex" id="test">
			<div class="test__h2 h2-div">
				<h2>Test</h2>
			</div>
			<div class="test__block">
				Для начала занятий <a href="https://www.efset.org/" target="_blank">оцени свой уровень знаний.</a> Напиши его нам в личные сообщения и добро пожаловать на занятия.
			</div>
		</div>
		<!-- price -->
		<div class="price fixed flex" id="prices">
			<div class="price__h2 h2-div">
				<h2>Prices</h2>
			</div>
			<div class="price__info">
				Interactive, communicative lessons on Skype or Zoom lasting between 60 and 120 minutes.
			</div>
			<div class="price__block1 flex">
				<div class="price__block flex">
					<div class="price__img">
						<img src="img/price1.jpg">
					</div>
					<div class="price__info flex">
						<div class="price__text flex">Private lessons</div>
						<div class="price__price flex">1000 RUB</div>
						<!-- &#8381; -->
					</div>
				</div>
				<div class="price__block flex">
					<div class="price__img">
						<img src="img/price2.jpg">
					</div>
					<div class="price__info">
						<div class="price__text flex">Pair lessons</div>
						<div class="price__price flex">650 RUB</div>
					</div>
				</div>
				<div class="price__block flex">
					<div class="price__img">
						<img src="img/price3.jpg">
					</div>
					<div class="price__info">
						<div class="price__text flex">Group lessons</div>
						<div class="price__price flex">500 RUB</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contacts -->
		<div class="contacts" id="contacts">
			<div class="contacts__block fixed flex">
				<div class="contacts__h2">
					<h2>Contacts</h2>
				</div>
				<div class="contact-links flex">
					<a href="https://vk.com/esskype">
						<div  class="vk link">
							<img src="img/vk.png">
						</div>
					</a>
					<a href="mailto:esvirelkina@gmail.com">
						<div class="mail link">
							<img src="img/mail.png">
						</div>
					</a>
					<a href="#">
						<div class="tel link">
							<img src="img/tel.png">
						</div>
					</a>
				</div>
			</div>
		</div>
	</main>
<?php
	 require 'footer.php';
?>