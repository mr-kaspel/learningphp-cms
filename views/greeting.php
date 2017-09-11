<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="../img/icon.png" type="image/png">
	<link rel="stylesheet" href="../css/style.css">
	<script async src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
						<?include 'menu.php';?>
								<div class="container-fluid col-md-5 ml-md-auto">
								<br>
										<h1>Hi, how are you<h1>
								</div>
								
						<div class="row">
						<?include 'sidebar.php';?>
						<div class="col-sm-8">
						<br><br><br>
						<p><mark>Настройки подключения к базе данных лежат в файлах:</mark> <br> </p>
						<ul>
							<li><mark>config.php</mark></li>
							<li><mark>/views/files.php</mark></li>
							<li><mark>/views/upload.php</mark></li>
						</ul><hr>
						<p><strong>"engin"</strong> BD содержащая таблицы. <br>Таблица для хранения статей <strong>"articles"</strong><br>
						<div class="col-md-7">
					 	<table class="table">
					 		<tr>
					 			<th>id</th>
					 			<th>title</th>
					 			<th>content</th>
					 			<th>date</th>
					 		</tr>
					 		<tr>
					 			<td>AUTO_INCREMENT</td>
					 			<td>varchar(225)</td>
					 			<td>text</td>
					 			<td>date</td>
					 		</tr>
					 		<tr>
					 			<td></td>
					 			<td>utf8_gentral_ci</td>
					 			<td>utf8_gentral_ci</td>
					 			<td></td>
					 		</tr>
					 	</table></div><br>
						SQL запрос для ее формирования <br></p> <code>CREATE TABLE `engin`.`articles` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `content` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;</code><br><br> <hr>
						 <p>Табилца <strong>"documentation"</strong> хранящая файлы в базе данных содержит два поля:
						 <div class="col-md-7">
					 	<table class="table">
					 		<tr>
					 			<th>id</th>
					 			<th>img</th>
					 		</tr>
					 		<tr>
					 			<td>AUTO_INCREMENT</td>
					 			<td>longblob</td>
					 		</tr>
					 	</table></div>
					 	</p>

							<p>SQL запрос для формирования таблицы: <br></p>
					 	
					 	<code>CREATE TABLE `engin`.`documentation` ( `id` INT NOT NULL AUTO_INCREMENT , `img` LONGBLOB NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;</code><br><br> <hr>
					 	<h3><em><small>Дополнительные библиотеки</small></em></h3><br>
					 <p>
					 <ul>
					 	<li><a target="_blank" href="https://github.com/thinker3197/progressively"> <i class="fa fa-github" aria-hidden="true"> </i> Progressively</a></li>
					 	<li><a target="_blank" href="https://fontawesome.ru"><i class="fa fa-font-awesome" aria-hidden="true"></i> Font Awesome</a></li>
					 	<li><a target="_blank" href="https://getbootstrap.com"><i class="fa fa-bars" aria-hidden="true"></i> Bootstrap</a></li>
					 </ul></p>
					 </div>

				</div>

						<footer>
										<p>
										Engin admin panel<br>Copyright &copy; 2016
										</p>
								</footer>
						
						</div>
</body>
</html>