<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
			$title = "CRUD";
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
						<a href="crud.php" class="header__link active">CRUD</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

<main>

<div class="heading">
			<div class="wrapper-full">
				<h1 class="heading__title">Новостной портал "KosmoNews"</h1>
			</div>
		</div>


<div class="container mb-5">

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2 class="my-3 places__title section-title">Реализация CRUD (таблица новости)</h2>
            </div>
        </div>

        <div class="row">
                <form class="" action="crud.php" method="post">
                    <div class="container-fluid  d-flex">
                        <div class="form-group m-4">
                            <label for="heading">Заголовок</label>
                            <input type="text" class="form-control" id="heading" placeholder="Про что расскажете?" name="heading">
                        </div>
                        <div class="form-group m-4">
                            <label for="nickname">Ваш никнейм</label>
                            <input type="text" class="form-control" id="nickname" placeholder="Никнейм" name="name">
												</div>
												<div class="form-group m-4">
                            <label for="story">Содержание</label>
                            <textarea type="text" class="form-control" id="story" placeholder="Что расскажете?" name="story"></textarea>
                        </div>

                    </div>

                    <div class="">
                        <div class="col-lg-6 d-flex flex-column w-lg-50 w-md-75 w-sm-100 ">
                                <input type="submit" class="btn btn-outline-primary my-2 w-100" name="save" value="Добавить">
                                <input type="button" class="btn btn-outline-primary my-2 w-100" value="Редактировать" name="ed" data-toggle="modal" data-target="#editModal">
                            <a class="btn btn-outline-primary my-2 w-100" data-toggle="collapse" href="#collapse" aria-expanded="false" aria-controls="collapse">Удалить новость</a>
                            <input type="submit" class="btn btn-outline-primary w-100" value="Показать новости" name="show">
                        </div>
                        <div class="col-lg-1 col-md-0 col-sm-0"></div>  
                    </div>  

                    <!-- CARD FOR DELETE -->
                    <div class="collapse mt-3" id="collapse">
                        <div class="card card-body">
                            <label for="id">Номер строки</label>
                            <input type="text" class="form-control" id="id" name="id">
                            <input type="submit" class="btn btn-danger mt-3" name="delete" value="Удалить">
                        </div>
                    </div>

                    <!-- Modal edit-->
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModal3Label">Редактирование</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                


                            <div class="form-group w-sm-100 w-mb-50 w-lg-25 w-xl-25 mx-5">
                                <label for="id2">Номер строки *</label>
                                <input type="text" class="form-control" id="id2" placeholder="Номер строки" name="id2">
                            </div>
														<div class="form-group w-sm-100 w-mb-50 mx-5">
                            <label for="heading2">Заголовок</label>
                            <input type="text" class="form-control" id="heading2" placeholder="Про что расскажете?" name="heading2">
                        </div>
                        <div class="form-group w-sm-100 w-mb-50 mx-5">
                            <label for="nickname2">Ваш никнейм</label>
                            <input type="text" class="form-control" id="nickname2" placeholder="Никнейм" name="nickname2">
												</div>
												<div class="form-group w-sm-100 w-mb-50 mx-5">
                            <label for="story2">Содержание</label>
                            <textarea type="text" class="form-control" id="story2" placeholder="Что расскажете?" name="story2"></textarea>
                        </div>
                            <p>* - обязательно для заполнения</p>
                            
                            

                            </div>
                            <div class="modal-footer">
                            <input type="submit" class="btn btn-info" name="edit" value="Сохранить изменения">
                            </div>
                            </div>
                        </div>
                    </div>

                </form>
        </div>



        <?php

            
            $mysqli = mysqli_connect('localhost', 'root', 'root', 'news');
            if( mysqli_connect_errno() ) 
            return 'Ошибка подключения к БД: '.mysqli_connect_error();

            // Кнопка добавления новости в БД
            if( isset($_POST['save']) && $_POST['save']== 'Добавить')
            {
                $sql_res = $mysqli->query ("INSERT INTO `news` (`id_news`, `heading`, `story`, `nickname`) VALUES (NULL, '{$_POST['heading']}', '{$_POST['story']}', '{$_POST['nickname']}')");
                
                if( mysqli_errno($mysqli) )
                echo '<div class="alert alert-danger mt-5">Новость не добавлена</div>';
                else 
                echo '<div class="alert alert-success mt-5">Новость добавлена</div>';

            } 


            function printResult($result_set) {
                while (($row  =  $result_set->fetch_assoc()) !=false) {
                    echo('<tr>
                            <td>'.$row['id_news'].'</td>
                            <td>'.$row['heading'].'</td>
                            <td>'.$row['story'].'</td>
                            <td>'.$row['nickname'].'</td>
                            <td>'.$row['putdate'].'</td>
                        </tr>');
                }
                echo("<tr>
                        <th colspan='6'>Общее количество новостей</th>
                        <th>".$result_set->num_rows."</th>
                    </tr>");
            }
            
            // Кнопка показа новостей
            if( isset($_POST['show']) && $_POST['show']== 'Показать новости')
            {
                $p++;
                if($p==1)
                {
                $result_set = $mysqli->query("SELECT * FROM `news`");
                echo("<div class='table-responsive'><table class='table table-bordered mt-5 bg-white'>
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Заголовок</th>
                                <th>Новость</th>
                                <th>Никнейм</th>
                                <th>Дата</th>
                            </tr>
                        </thead>
                        <tbody>");
                printResult($result_set);
                echo("</tbody></table></div>");
                echo("<form action='crud.php' method='post'><input type='submit' class='btn btn-secondary' name='close' value='Скрыть'></form>");

                if( mysqli_errno($mysqli) )
                echo '<div class="alert alert-danger mt-5">Произошла ошибка</div>';
                } 
            }


            // закрытие таблицы с БД
            if( isset($_POST['close']) && $_POST['close']== 'Скрыть'){
                $p = 0;
            }

            // удаление строки из БД
            if( isset($_POST['delete']) && $_POST['delete']== 'Удалить'){
            $mysqli->query("DELETE FROM `news` WHERE `news`.`id_news` = {$_POST['id']}");

            if( mysqli_errno($mysqli) )
                echo '<div class="alert alert-secondary mt-5">Произошла ошибка</div>';
                else 
                echo '<div class="alert alert-danger mt-5">Запись удалена</div>';
            
            }

            // редактирование
            if( isset($_POST['edit']) && $_POST['edit']== 'Сохранить изменения'){
                if($_POST['heading2'] !== ''){
                    $mysqli->query("UPDATE `news` SET `heading` = '{$_POST['heading2']}' WHERE `news`.`id_news` = {$_POST['id2']}");
                }

                if($_POST['story2'] !== ''){
                    $mysqli->query("UPDATE `news` SET `story` = '{$_POST['story2']}' WHERE `news`.`id_news` = {$_POST['id2']}");
                }

                if($_POST['nickname2'] !== ''){
                    $mysqli->query("UPDATE `news` SET `nickname` = '{$_POST['nickname2']}' WHERE `news`.`id_news` = {$_POST['id2']}");
                }

                if( mysqli_errno($mysqli) )
                echo '<div class="alert alert-secondary mt-5">Произошла ошибка</div>';
                else 
                echo '<div class="alert alert-success mt-5">Запись отредактирована</div>';
                
            }

        
            $mysqli->close ();
        ?>
    
    </div>
</div>
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