<?php
// include('functions.php');

// $art = mysqli_fetch_all(mysqli_query($database, 'SELECT * FROM `articles` INNER JOIN `comments` ON (articles.id_art = comments.id_art) INNER JOIN `user` ON (user.nickname = comments.nickname) INNER JOIN `connect` ON ( (articles.id_art = categories.id_art) AND (categories.id_cat = categories.id_cat) )'), MYSQLI_BOTH);
// INNER JOIN `connect` ON (articles.id_art = connect.id_art) INNER JOIN `category` (connect.id_cat = categories.id_cat)
// $art = mysqli_fetch_all(mysqli_query($database, 'SELECT * FROM `articles` INNER JOIN `comments` ON (articles.id_art = comments.id_art) INNER JOIN `user` ON (user.nickname = comments.nickname) INNER JOIN `connect` ON ( (articles.id_art = connect.id_art) AND (categories.id_cat = categories.id_cat) )'), MYSQLI_BOTH);


// $post = mysqli_fetch_all(mysqli_query($database, 'SELECT * FROM `articles` INNER JOIN `user` ON (news.nickname = user.nickname) WHERE id_news = ' . $_GET[id_news] . ' ORDER BY id_news DESC'), MYSQLI_BOTH);




// "SELECT * FROM `articles` INNER  JOIN `comments` ON (articles.id_art = comments.id_art) INNER JOIN `user` ON (user.nickname = comments.nickname) INNER JOIN `connect` ON (articles.id_art = connect.id_art) INNER JOIN `categories` (connect.id_cat = categories.id_cat) "





// "SELECT * FROM `categories` INNER JOIN `connect` ON (connect.id_cat = categories.id_cat) INNER  JOIN `articles` ON (articles.id_art = connect.id_art) INNER  JOIN `comments` ON (articles.id_art = comments.id_art) INNER JOIN `user` ON (user.nickname = comments.nickname)"

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
			$title = "Article";
			include('blocks/head.php');
	?>
</head>
<body>
<header class="header mb-3">
<?php
			include('blocks/header.articles.php');
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
												<p class=''>".count($row['id_com'])." комментарий</p>
											</div>
											<div class='card-body d-flex flex-wrap justify-content-between align-items-center'>
												<img src='img/articles/".$row['id_art'].".jpg' border='0' width='50%' height='300'  alt='img' >
												<div class='list-unstyled mt-3 mb-4'>
													<h4 class='my-0 mb-2 font-weight-bold'>".$row['heading']."</h4>
													<p class='mb-3'>".$row['story']."</p>
												</div>
											</div>
										</div>
										");
										
										


										echo("


										<div class='card mb-4 shadow-sm card-new'>
											<div class='card-header d-flex flex-wrap  justify-content-between align-items-center'>
												<p class=''>".$row['putdate']."</p>
											</div>
											<div class='card-body d-flex '>
												<img src='img/users/1.png' border='0' width='100' height='100'  alt='img' class='mt-4' >
												<div class='list-unstyled mt-3 mb-4 m-4'>
													<h4 class='my-0 mb-2 font-weight-bold'>
													<a href='user.php'>".$row['nickname']."</a></h4>
													<p class='mb-3'>".$row['comment']."</p>
												</div>
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
								echo("<h2 class='section-title mb-4'>Статьи о космосе</h2>");
                echo("<div class='d-flex flex-wrap  justify-content-between align-items-center'>");
                $result_set = $mysqli->query("SELECT * FROM `categories` INNER JOIN `connect` ON (connect.id_cat = categories.id_cat) INNER  JOIN `articles` ON (articles.id_art = connect.id_art) INNER  JOIN `comments` ON (articles.id_art = comments.id_art) INNER JOIN `user` ON (user.nickname = comments.nickname)");
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