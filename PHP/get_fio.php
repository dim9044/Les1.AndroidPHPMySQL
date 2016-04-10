<?php
 
// подключаем db_connect класс
require_once __DIR__ . '/db_connect.php';
 
// подключаемся к БД
$db = new DB_CONNECT();
// получаем значения 
$ID = $_REQUEST[ID];

//$ID = "1";
 
// выполняем запрос
$r = mysql_query("SELECT * FROM `Client` WHERE ID = $ID") or die(mysql_error());
 
 // проверка на пустой результат
if (mysql_num_rows($r) > 0) 
{
	while($row=mysql_fetch_array($r))
	{
		// заносим данне в массив
    	$client[ID] = $row[ID];
		$client[Surname] = $row[Surname];
		$client[Name] = $row[Name];
		$client[Middlename] = $row[Middlename];
		
	}
}

echo (json_encode($client));
 
?>