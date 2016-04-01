<meta charset ="utf-8">
<?php
$host='localhost';
$dbname='grupa';
$user='redactor';
$password='12345';
try 
{
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) 
{
echo $e->getMessage();
}
echo "----------------BD-grupa; TABLE-azaza----------------";
{
$stmt = $db->query('SELECT * FROM azaza');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch())
}
{
echo "<p>" . $row['NAME'] . "&nbsp" . $row['DATA'] . "&nbsp;" . $row['INFAR'] . "&nbsp;" . $row['INSTOR'] . "&nbsp;" . $row['LANG'] . "&nbsp;" . $row['CODING'] . "&nbsp;" . $row['SPORT'] . "</p>";
}
?>