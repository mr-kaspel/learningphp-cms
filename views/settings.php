<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="../img/icon.png" type="image/png">
	<script async src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
						<!-- Header (navbar) -->
						<?include 'menu.php';?>
						<nav class="sidebar navbar navbar-default col-md-3 ml-md-auto">
								<div class="container-fluid">
										<ul class="nav justify-content-end">
										<li class="nav-item">
												<a class="nav-link" href="index.php?action=add"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Создать статью</a>
										</li>
										</ul>
								</div>
								
						</nav> 
						<!-- END Header (navbar) -->
						<div class="row">
						<?include '../views/sidebar.php';?>
						<div class="top table col-12 col-sm-6 col-md-8">
						<form>
						<h3>Site settings</h3>
						<div class="form-group">
						<label>Название сайта</label>
						<input type="" class="form-control" id="" aria-describedby="" placeholder="name site">
						<small id="" class="form-text text-muted">//comment</small>
						</div>
						<div class="form-group">
						<label>Email</label>
						<input type="" class="form-control" id="" aria-describedby="" placeholder="email">
						<small id="" class="form-text text-muted">//почтовый адрес сайта</small>
						</div>
						<div class="form-group">
						<label for="">Иконка сайта</label>
						<input type="password" class="form-control" id="" placeholder="../img/icon.png">
						<small id="" class="form-text text-muted">//загрузите в файлы и скопируйте ссылку</small>
						</div>
						<div class="form-group">
						<label for="exampleFormControlTextarea1">Footer content</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
						<small id="" class="form-text text-muted">//нижняя часть сайта, формируется в голонках</small>
						</div>
						<button type="submit" class="btn btn-primary">Сохранить параметры</button>
						</form>

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