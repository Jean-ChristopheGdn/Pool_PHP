<?php
 
const ERROR_LOG_FILE ='error_log_file.txt';

function connect_db($host, $username, $passwd, $port, $db)
{
    try
    {
        $connection = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port,$username, $passwd);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    }
    catch (PDOException $e)
    {
        $error_message = "PDO ERROR: ".$e->getMessage()."storage in ".ERROR_LOG_FILE.PHP_EOL;
        echo $error_message;

        file_put_contents(ERROR_LOG_FILE, $error_message, FILE_APPEND);

        return false;
    }
}
