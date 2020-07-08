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
								include('blocks/news-b.php');

								echo("<section class='container mb-5'>");
								echo("<div class='places__caption'>");
								echo("<h2 class='places__title section-title'>Новости</h2>"); 
								echo("</div>");
                echo("<div class='d-flex flex-wrap'>");
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