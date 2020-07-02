<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
			$title = "KosmoNews";
			include('blocks/head.php');
		?>
</head>
<body>
	
<header class="header mb-3">
		<div class="wrapper">
			<nav class="header__left-nav">
				<ul class="header__list">
					<li class="header__item">
						<a href="index.php" class="header__link active">Главная</a>
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

				
	


		<?php
			// $resul = $mysqli->query("SELECT * FROM `news` ORDER BY `id_news` LIMIT 6");
			include('blocks/news-b.php');
			
			echo("<section class='container mb-5'>");
			echo("<div class='places__caption'>");
			echo("<h2 class='places__title section-title'>Новости</h2>");
			echo("<a href='news.php' class='places__view-all'>Смотреть все</a>");
			echo("</div>");
			echo("<div class='d-flex flex-wrap'>");
			$result_set = $mysqli->query("SELECT * FROM `news`");
			printResult($result_set);
			echo("</div>");
			echo("</section>");
			
			
		?>
		
		



		<?php
			include('blocks/articles-b.php');


			echo("<section class='container mb-5 places'>");
			echo("<div class='places__caption'>");
			echo("<h2 class='places__title section-title'>Статьи</h2>");
			echo("<a href='articles.php' class='places__view-all'>Смотреть все</a>");
			echo("</div>");
			echo("<div class='places__cards'>");
			$resulte_set = $mysqli->query("SELECT * FROM `articles` LIMIT 5");
			printResulte($resulte_set);
			echo("</div>");
			echo("</section>");

		?>





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