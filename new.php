<?php
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
			$title = "News";
			include('blocks/head.php');
	?>
</head>
<body>
<header class="header mb-3">
<?php
			include('blocks/header.news.php');
	?>
</header>

<main class="main">







<div class="heading">
			<div class="wrapper-full">
				<h1 class="heading__title">Новостной портал "KosmoNews"</h1>
			</div>
		</div>

		<?php
                function printResult($result_set) {
									if (($row  =  $result_set->fetch_assoc()) !=false ) {
										
                      echo("											
											<div class='card mb-4 shadow-sm card-new'>
											<div class='card-header d-flex flex-wrap  justify-content-between align-items-center'>
												<p class=''>".$row['putdate']."</p>
												<a href='user.php'>".$row['nickname']."</a>
											</div>
											<div class='card-body d-flex flex-wrap justify-content-between align-items-center'>
												<img src='img/news/".$row['id_news'].".jpg' border='0' width='50%' height='300'  alt='img' >
												<div class='list-unstyled mt-3 mb-4'>
													<h4 class='my-0 mb-2 font-weight-bold'>".$row['heading']."</h4>
													<p class='mb-3'>".$row['story']."</p>
												</div>
											</div>
										</div>																		
											"); 
                      
                  }
                }

                $mysqli = $database;
                if( mysqli_connect_errno() )
                return 'Ошибка подключения к БД: '.mysqli_connect_error();

								$mysqli->query ("SET NAMES 'utf8'");


								 

								echo("<section class='container mb-5'>");
								echo("<h2 class='section-title mb-4'>Новости космоса</h2>");
                echo("<div class='d-flex flex-wrap  justify-content-between align-items-center'>");
                $result_set = $mysqli->query("SELECT * FROM `news`");
                printResult($result_set);
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