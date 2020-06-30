<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
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

		<section class="container mb-5">
			
		<div class="places__caption">
					<h2 class="places__title section-title">
						Новости
					</h2>
					<a href="news.php" class="places__view-all">Смотреть все</a>
				</div>
			

		<div class="d-flex flex-wrap">

		
		
		<?php

		for ($i=0; $i<6; $i++):
			?>
			
			<div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Text</h4>
      </div>
      <div class="card-body">
				<img src="img/news/<? echo ($i +1) ?>.jpg" border="0" width="100%" height="188"  alt="img" >
        <div class="list-unstyled mt-3 mb-4">
					<p class="mb-3">Story</p>
					<p class="mb-2">21.04.2020</p>
					<a href="#">Nickname</a>
        </div>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
      </div>
		</div>
		<?php endfor; ?>
		</div>
		</section>


		<section class="container mb-5 places">
			<div class="wrapper-full">
				<div class="places__caption">
					<h2 class="places__title section-title">
						Статьи
					</h2>
					<a href="articles.php" class="places__view-all">Смотреть все</a>
				</div>
				<div class="places__cards">

				<?php
					for ($i=0; $i<2; $i++):
				?>
					<div class="places__card places__card-size-lg">
						<img src="img/articles/<? echo ($i +1) ?>.jpg" alt="Mount Fuji" class="places__card-pic places__card-pic-size-lg">
						<h3 class="places__card-title">
							Mount Fuji
						</h3>
						<a href="#!" class="places__card-link"></a>
					</div>
					<?php endfor; ?>


					<?php
						for ($i=0; $i<3; $i++):
					?>
					<div class="places__card places__card-size-sm">
						<img src="img/articles/<? echo ($i +3) ?>.jpg" alt="Tokyo" class="places__card-pic places__card-pic-size-sm">
						<h3 class="places__card-title">
							Tokyo
						</h3>
						<a href="#!" class="places__card-link"></a>
					</div>
					<?php endfor; ?>

			</div>
			</div>
		</section>



	</main>

	<footer>
		<?php
			include('blocks/footer.php');
		?>
	</footer>


</body>
</html>