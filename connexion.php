
<?php
$host = 'industrialplotsww.com.mysql';
$user = 'industrialplots';
$pass = 'YvQRuu5b';
$db = 'industrialplots';
 mysql_query("SET CHARACTER SET 'utf8'", $db);
 mysql_set_charset('utf8');  
mysql_query("set characer set cp1256");
$link = mysqli_connect ($host,$user,$pass,$db) or die ('Erreur : '.mysql_error() );


?>