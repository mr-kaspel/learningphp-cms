<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/icon.png" type="image/png">
    <title><?echo $titl;?>/title>
</head>
<body>

<?php
 $db = mysql_connect ("192.168.0.108", "root", "");
 mysql_select_db ("engin", $db);
 if (!$db) echo mysql_error();

if (isset($_POST['img']))

$maxwidth = "1300";
$foto_dir = "../img/";
$foto_name = $fotos_dir.time()."_".basename($_FILES['myfile']['name']); 
$foto_light_name = time()."_".basename($_FILES['myfile']['name']); 
$foto_tag = "<img src=\"$foto_name\" border=\"0\">"; 
$foto_tag_preview = "<img src=\"$foto_name\" border=\"0\" width=\"$maxwidth\">";

$error_by_mysql = "<label class=\"label\">Ошибка при добавлении данных в базу</span>";
$error_by_file = "<label class=\"label\">Невозможно загрузить файл в директорию. Возможно её не существует</span>";


if(isset($_FILES["myfile"]))
{
$myfile = $_FILES["myfile"]["tmp_name"];
$myfile_name = $_FILES["myfile"]["name"];
$myfile_size = $_FILES["myfile"]["size"];
$myfile_type = $_FILES["myfile"]["type"];
$error_flag = $_FILES["myfile"]["error"];

if($error_flag == 0)
{
$DOCUMENT_ROOT = $_SERVER['DOCMENT_ROOT'];
$upfile = getcwd()."../img/" . time()."_".basename($_FILES["myfile"]["name"]);
if ($_FILES['myfile']['tmp_name'])
{


if (!move_uploaded_file($_FILES['myfile']['tmp_name'], $upfile))
{
echo "$error_by_file";
exit;
}

}
else
{
    echo 'Проблема: возможна атака через загрузку файла. ';
    echo $_FILES['myfile']['name'];
    exit;
}

$q = "INSERT INTO documentation (img) VALUES ('$foto_name')";
$query = mysql_query($q);

if ($query == 'true') {
echo "
<div class='text'>
<p>Картинка успешно добавлена на сервер!</p><br><br>
<table>
<tr>
<td>
<a href='../views/files.php' class='add_images'><div class='add_images_text'>ДОБАВИТЬ ЕЩЕ КАРТИНКУ</div></a>
</td>
<td>
<a href='../control' class='add_images'><div class='add_images_text'>НА ГЛАВНУЮ</div></a>
</td>
</tr>
</table>
</div>
";
}

else {
echo "$error_by_mysql";
}
}
elseif ($myfile_size == 0) {
echo "<br><label class='label'>Картинка не выбрана!<br><br>
Вернитесь и выберите картинку!</label><br><br>
<a href='../control/files.php' class='add_images'><div class='add_images_text'>ВЫБРАТЬ КАРТИНКУ</div></a>";
}
}

?>

</body>
</html>