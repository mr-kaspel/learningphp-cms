<?php
require_once("../models/articles.php");

		$db = mysql_connect ("192.168.0.108", "root", "");
		mysql_select_db ("engin", $db);
		if (!$db) echo mysql_error();

		?>

		<!DOCTYPE html>
		<html lang="en">
		<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<script async src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		</head>
		<body>
						<div class="container">
						<!-- Header (navbar) -->
						<?include 'menu.php';?>
						<nav class="sidebar navbar navbar-default col-md-5 ml-md-auto">
								<div class="container-fluid">
										<ul class="nav justify-content-end">
										<li class="nav-item">
														<form name="form" method="post" enctype="multipart/form-data" action='../views/upload.php'>
																<i class="fa fa-plus-square-o" aria-hidden="true"></i> Изображение: <input type="file" name="myfile" id="myfile" class="input"/>
																<input class="btn btn-primary" type="submit" value="Загрузить" />
																</form>
										</li>
										</ul>
								</div>
								
						</nav> 
						<!-- END Header (navbar) -->
						<div class="row">
						<?include 'sidebar.php';?>
						<div class=" col-md-10">
										"<a href="files.php?action=delete&id=1"> Удалить</a>"
					 <p>Сюда вывести изображения из бд<p>

					 <?php
					 $sql = mysql_query("SELECT * FROM documentation ORDER BY img DESC"); 
					 
					 if (!$sql)
					 {
					 exit();
					 }
					 if (mysql_num_rows($sql) > 0)
					 {
					 @$row=mysql_fetch_array($sql);
					 $i=1;
					 do
					 {
					echo "<div class='imgprof'>";
					echo $i++;
					echo ". ";
					echo "<a href='img/$row[img]' id='textarea-example'><i class='fa fa-chain-broken' aria-hidden='true'></i>$row[img]</a>";
					echo "<figure class='progressive'>";
					echo "<img data-progressive='../img/progress/progress-min.jpg' src='../views/img/$row[img]' class='img progressive__img progressive--is-loaded'/>";
					echo "</figure>";
					echo "</div>";
					}
					while (@$row = mysql_fetch_array($sql));
					}
					else
					{
					echo "<label class='label'>Вы пока не добавили не единой картинки.</label>";
					exit();
					}
					?>

						</div>
				</div>
				<script async src="../js/progressively.min.js"></script>
				<script>
					progressively.init({
						onLoadComplete: function() {
							console.log('image progressively');
							}
						});
				</script>

						<footer>
										<p>
										Engin admin panel<br>Copyright &copy; 2016
										</p>
								</footer>
						
						</div>
				
		</body>
		</html>