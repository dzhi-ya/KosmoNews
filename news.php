<?php
$database = mysqli_connect('localhost', 'root', 'root', 'news');
$news = mysqli_fetch_all(mysqli_query($database, 'SELECT * FROM `news` INNER JOIN `user` ON (news.nickname = user.nickname) ORDER BY news.id_news DESC'), MYSQLI_BOTH);
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



		<div class="container">
    <div class="container-fluid">


        <div class="row mt-3">
          
          <div class="col-12">
              <form action="news.php" method="post">
              <div class="form-group row">
                <label for="search" class="col-12"><strong>Поиск по новостям</strong></label>
                <div class="row d-flex flex-wrap col-12">
                  <input type="text" class="form-control col-12 col-sm-8" id="search" placeholder="Введите название товара" name="search">
                  <input type="submit" title="Начать поиск" class="btn btn-outline-secondary col-12 col-sm-1" value="Найти" name="srcBtn">
                </div>
              </div>
							</form>
							<?php
                function printResult($result_set) {
									while (($row  =  $result_set->fetch_assoc()) !=false ) {
										
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
												
												<a href='new.php?id='.$news[$i]['id_news'].'' class='btn btn-lg btn-block btn-outline-primary'>Подробнее</a>
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


          </div> 

        </div>

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