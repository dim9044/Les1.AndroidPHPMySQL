<?php

/**
 * Класс для подключения к БД
 */
class DB_CONNECT 
{
 
    // Конструктор
    function __construct() 
	{
        // Соеденение с БД
        $this->connect();
    }
 
    // дуструктор
    function __destruct() 
	{
        // закрываем соеденение с БД
        $this->close();
    }
 
    /**
     * Функция соеденения с БД
     */
    function connect() 
	{
        // импортируем переменные для подклчения к БД
        require_once __DIR__ . '/db_config.php';
 
        // Подключаемся к БД
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());
 
        // выбираем БД
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());
 
        // возвращаем соеденение
        return $con;
    }
 
    /**
     * Функция закрытия соеденения
     */
    function close() 
	{
        // Закрываем соеденение с БД
        mysql_close();
    }
 
}
 

?>