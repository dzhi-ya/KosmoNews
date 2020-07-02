<?php
                function printResult($result_set) {
									while (($row  =  $result_set->fetch_assoc()) !=false) {
										

										
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
												
												<button type='button' class='btn btn-block btn-outline-primary btn-lg' data-toggle='modal' data-target='.bs-example-modal-lg'>
 												 Подробнее
												</button>
												");


												for ($i = 1; $i++ < count($row) ;){
												echo("
												<div class='modal fade bs-example-modal-lg' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel'>
												<div class='modal-dialog modal-lg' role='document'>
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
															<img src='img/news/".$row['id_news'].".jpg' border='0' width='100%' height='380'  alt='img' >
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
											");
												}
											
											
												
												


											echo("
											</div>
										</div>																		
											"); 
                      
                  }
                }

                $mysqli = mysqli_connect('localhost', 'root', 'root', 'news');
                if( mysqli_connect_errno() )
                return 'Ошибка подключения к БД: '.mysqli_connect_error();

								$mysqli->query ("SET NAMES 'utf8'");
								?>




								<?php
								// echo("<section class='container mb-5'>");
								// echo("<div class='places__caption'>");
								// echo("<h2 class='places__title section-title'>Новости</h2>");
								// echo("<a href='news.php' class='places__view-all'>Смотреть все</a>");
								// echo("</div>");
                // echo("<div class='d-flex flex-wrap'>");
                // $result_set = $mysqli->query("SELECT * FROM `news`");
                // printResult($result_set);
								// echo("</div>");
								// echo("</section>");
								
								?>	