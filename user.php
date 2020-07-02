<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
			$title = "User page";
			include('blocks/head.php');
	?>
</head>
<body>
<header class="header mb-3">
		<div class="wrapper">
			<nav class="header__left-nav">
				<ul class="header__list">
					<li class="header__item">
						<a href="index.php" class="header__link">Главная</a>
					</li>
					<li class="header__item">
						<a href="news.php" class="header__link">Новости</a>
					</li>
				</ul>
			</nav>
			<div class="header__logo">
				<a href="/" class="header__logo-link">
					<img src="img/logoza14.png" alt="logo" srcset="img/logoza142x.png 2x" class="header__logo-pic">
				</a>
			</div>
			<nav class="header__right-nav">
				<ul class="header__list">
					<li class="header__item">
						<a href="articles.php" class="header__link">Статьи</a>
					</li>
					<li class="header__item">
						<a href="crud.php" class="header__link">CRUD</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

<main class="main">
<div class="heading">
			<div class="wrapper-full">
				<h1 class="heading__title">Новостной портал "KosmoNews"</h1>
			</div>
		</div>

		<section class="container mb-5">
			
		<div class="places__caption">
					<h2 class="places__title section-title">
						User
					</h2>
				</div>





    





</section>







</main>

<footer>
		<?php
			include('blocks/footer.php');
		?>
	</footer>

	<?php
			include('script.php');
		?>
	
</body>
</html>