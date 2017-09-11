<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title><?echo $titl;?></title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <table id="admin_table" class="table col-12 col-sm-6 col-md-8">
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th>url</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($articles as $article): ?>
                    <tr>
                        <td><?=$article['date']?></td>
                        <td><?=articles_intro($article['title'], 80)?></td>
                        <td>article.php?id=<?=$article['id']?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?=$article['id']?>"><i class="fa fa-pencil" aria-hidden="true"></i> Редактировать</a>
                        </td>
                        <td>
                            <a href="index.php?action=delete&id=<?=$article['id']?>"><i class="fa fa-bitbucket" aria-hidden="true"></i> Удалить</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            </div>
            <footer>
                <p>
                Engin admin panel<br>Copyright &copy; 2016
                </p>
            </footer>
        </div>
    </body>
</hmtl>

