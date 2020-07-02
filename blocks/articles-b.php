<?php
               function printResulte($resulte_set) {
								while (($rowe  =  $resulte_set->fetch_assoc()) !=false  ) {
									if ($rowe['id_art'] == 1 or $rowe['id_art'] == 2 or $rowe['id_art'] == 6 or $rowe['id_art'] == 7 or $rowe['id_art'] == 11 or $rowe['id_art'] == 12) {
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




							// echo("<section class='container mb-5 places'>");
							// echo("<div class='places__caption'>");
							// echo("<h2 class='places__title section-title'>Статьи</h2>");
							// echo("<a href='articles.php' class='places__view-all'>Смотреть все</a>");
							// echo("</div>");
							// // echo("<div class='d-flex flex-wrap'>");
							// echo("<div class='places__cards'>");
							// $resulte_set = $mysqli->query("SELECT * FROM `articles`");
							// printResulte($resulte_set);
							// echo("</div>");
							// echo("</section>");
?>