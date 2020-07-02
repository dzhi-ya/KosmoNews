<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
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
</main>

<footer>
		<?php
			include('blocks/footer.php');
		?>
	</footer>
	
</body>
</html>

















<?php

for ($i = 0; $i < count($news); $i++) {
		echo '<div class="card mb-4 shadow-sm">
	<div class="card-header d-flex justify-content-between">
		<p class="">'.$news[$i]['putdate'].'</p>
		<a href="user.php">'.$news[$i]['nickname'].'</a>
	</div>
	<div class="card-body">
		<img src="img/news/'.$news[$i]['id_news'].'.jpg" border="0" width="100%" height="188"  alt="img" >
		<div class="list-unstyled mt-3 mb-4">
			<h4 class="my-0 mb-2 font-weight-bold">'.$news[$i]['heading'].'</h4>
			<p class="mb-3">'.$news[$i]['story'].'</p>
		</div>
		<a href="new.php?id=' . $news[$i]['id_news'] . '" class="btn btn-lg btn-block btn-outline-primary">Подробнее</a>
	</div>
</div>';
}


?>


















							<?php
                function printResult($result_set) {
									while (($row  =  $result_set->fetch_assoc()) !=false ) {
										
                      echo("											
											<div class='card mb-4 shadow-sm'>
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
												<a href='new.php' class='btn btn-lg btn-block btn-outline-primary'>Подробнее</a>
											</div>
										</div>																		
											"); 
                      
                  }
                }

                $mysqli = mysqli_connect('localhost', 'root', 'root', 'news');
                if( mysqli_connect_errno() )
                return 'Ошибка подключения к БД: '.mysqli_connect_error();

								$mysqli->query ("SET NAMES 'utf8'");


								 // поиск
								 if( isset($_POST['srcBtn']) && $_POST['srcBtn']== 'Найти')
								 {
									 echo("<div class='d-flex flex-wrap'>");
									 $result_set = $mysqli->query("SELECT * FROM `news` WHERE `story` OR `heading` OR `nikname` OR `putdate` LIKE '%".$_POST['search']."%'");
									 printResult($result_set);
									 echo("</div>");
				 
										 if( mysqli_errno($mysqli) )
										 echo '<div class="alert alert-danger mt-5">Произошла ошибка</div>';
								 }


								echo("<section class='container mb-5'>");
								echo("<h2 class='section-title mb-4'>Новости</h2>");
                echo("<div class='d-flex flex-wrap'>");
                $result_set = $mysqli->query("SELECT * FROM `news`");
                printResult($result_set);
								echo("</div>");
								echo("</section>");
								
								?>











<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <h4 class='modal-title' id='myModalLabel'>Modal title</h4>
      </div>
      <div class='modal-body'>
        ...
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>







<div class='news-card card m-1 mb-4 shadow-sm col-xs-12 '>
														<div class='card-header d-flex flex-wrap  justify-content-between align-items-center'>
															<p class=''>".$row['putdate']."</p>
															<a href='user.php'>".$row['nickname']."</a>
														</div>
														<div class='card-body d-flex flex-wrap justify-content-between align-items-center'>
															<img src='img/news/".$row['id_news'].".jpg' border='0' width='100%' height='188'  alt='img' >
															<div class='list-unstyled mt-3 mb-4'>
																<h4 class='my-0 mb-2 font-weight-bold'>".$row['heading']."</h4>
																<p class='mb-3'>".$row['story']."</p>
															</div>


















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
												
												<button type='button' class='btn btn-block btn-outline-primary btn-lg' data-toggle='modal' data-target='#myModal'>
 												 Подробнее
												</button>



												

												<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
												<div class='modal-dialog' role='document'>
													<div class='modal-content'>
														<div class='modal-header'>
															<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
														</div>
														<div class='modal-body'>

													
														<div class='card-header d-flex flex-wrap  justify-content-between align-items-center'>
															<p class=''>".$row['putdate']."</p>
															<a href='user.php'>".$row['nickname']."</a>
														</div>
														<div class='card-body d-flex flex-wrap justify-content-between align-items-center'>
															<img src='img/news/".$row['id_news'].".jpg' border='0' width='100%' height='188'  alt='img' >
															<div class='list-unstyled mt-3 mb-4'>
																<h4 class='my-0 mb-2 font-weight-bold'>".$row['heading']."</h4>
																<p class='mb-3'>".$row['story']."</p>
															</div>
															</div>

															
														</div>
														<div class='modal-footer'>
															<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
														</div>
													</div>
												</div>
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