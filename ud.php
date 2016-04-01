<meta charset ="utf-8">
<?php
$host='localhost';
$dbname='3pk'; //имя базы данных
$user='redactor'; //пользователь
$password='12345'; //пароль от пользователя
require_once 'connect.php'; //имя глaвного пчп 
if(isset($_POST['id']))
{
    $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['NAME']);
    $query = "DELETE FROM azaza WHERE = 'Артемка'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    mysqli_close($link);
}
?>