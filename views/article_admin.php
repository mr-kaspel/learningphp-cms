<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title><?echo $titl;?></title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="shortcut icon" href="../img/icon.png" type="image/png">
        <script async src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="../index.php"><?echo $titl;?></a>
                    </div>
                </div>
            </nav> 
            <!-- END Header (navbar) -->
            <div id="addart">
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label class="col-xs-12 col-sm-6 col-md-8">
                        Название
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                    </label>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <label class="col-xs-12 col-sm-6 col-md-8">
                        Description
                        <input type="text" name="description" value="..." class="form-item">
                    </label>
                    <label class="col-xs-12 col-sm-6 col-md-8">
                        Title
                        <input type="text" name="description" value="..." class="form-item">
                    </label>
                    <label class="col-xs-6 col-sm-4">
                        Дата
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                    </label>
                    <label class="">
                        Содержимое
                        <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
                        <div id="editor"><?=$article['content']?></div>
                    </label>
                </form>
            </div>
            <footer>
                <p>
                    Блог<br>Copyright &copy; 2016
                </p>
            </footer>
        </div>
    </body>
</hmtl>