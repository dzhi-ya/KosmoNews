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

				
	

		<!-- $row=0; $row<6; $row++ -->

		<!-- && $row['id_news']<7 -->
		
		<?php
                function printResult($result_set) {
									while (($row  =  $result_set->fetch_assoc()) !=false && $row['id_news']<7  ) {
										
                      echo("											
											<div class='news-card card m-1 mb-4 shadow-sm col-xs-12 '>
											<div class='card-header d-flex flex-wrap  justify-content-between align-items-center'>
												<p class=''>".$row['putdate']."</p>
												<a href='user.php'>".$row['nickname']."</a>
											</div>
											<div class='card-body d-flex flex-wrap justify-content-between align-items-center'>
												<img src='img/news/".$row['id_news'].".jpg' border='0' width='100%' height='188'  alt='img' >
												<div class='list-unstyled mt-3 mb-4'>
													<h4 class='my-0 mb-2 font-weight-bold'>".$row['heading']."</h4>
													<p class='mb-3'>".mb_substr($row['story'], 0, 241)."....</p>
												</div>
												
												<a href='new.php?id=".$news[$i]['id_news']."' class='btn btn-lg btn-block btn-outline-primary'>Подробнее</a>
											</div>
										</div>																		
											"); 
                      
                  }
                }

                $mysqli = mysqli_connect('localhost', 'root', 'root', 'news');
                if( mysqli_connect_errno() )
                return 'Ошибка подключения к БД: '.mysqli_connect_error();

								$mysqli->query ("SET NAMES 'utf8'");




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
                function printResulte($resulte_set) {
									while (($rowe  =  $resulte_set->fetch_assoc()) !=false && $rowe['id_art']<6  ) {
										if ($rowe['id_art'] == 1 or $rowe['id_art'] == 2) {
											echo("											
											<div class='places__card places__card-size-lg'>
											<img src='img/articles/".$rowe['id_art'].".jpg' alt='img' class='places__card-pic places__card-pic-size-sm'>
											<h3 class='places__card-title'>
											".$rowe['heading']."
											</h3>
											<a href='article.php' class='places__card-link'></a>
											</div>																		
											");
										}
										else {
											echo("											
											<div class='places__card places__card-size-sm '>
											<img src='img/articles/".$rowe['id_art'].".jpg' alt='img' class='places__card-pic places__card-pic-size-sm'>
											<h3 class='places__card-title'>
											".$rowe['heading']."
											</h3>
											<a href='article.php' class='places__card-link'></a>
											</div>																		
											");
										}
 
                      
                  }
                }

                $mysqli = mysqli_connect('localhost', 'root', 'root', 'news');
                if( mysqli_connect_errno() )
                return 'Ошибка подключения к БД: '.mysqli_connect_error();

								$mysqli->query ("SET NAMES 'utf8'");




								echo("<section class='container mb-5 places'>");
								echo("<div class='places__caption'>");
								echo("<h2 class='places__title section-title'>Статьи</h2>");
								echo("<a href='articles.php' class='places__view-all'>Смотреть все</a>");
								echo("</div>");
								// echo("<div class='d-flex flex-wrap'>");
								echo("<div class='places__cards'>");
                $resulte_set = $mysqli->query("SELECT * FROM `articles`");
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


</body>
</html>