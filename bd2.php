<meta charset ="utf-8">
<?php
$host='localhost';
$dbname='grupa';
$user='redactor';
$password='12345';
try {
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
echo $e->getMessage();
   
}
echo "----------------BD-grupa; TABLE-vips----------------";

$stmt = $db->query('SELECT * FROM vips');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch())
{
echo "<p>" . $row['NAME'] . "&nbsp;" . $row['FNAME'] . "&nbsp;" . $row['DATAR'] . "&nbsp;" . $row['LIVES'] . "</p>";
}
?>