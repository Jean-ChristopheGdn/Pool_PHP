<?php 

define('ERROR_LOG_FILE', 'errors.log');
 


function connect_db($host, $username, $passwd, $port, $db)
{
    try
    {
        $connection = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port,$username, $passwd);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection to DB successful".PHP_EOL;
        return $connection;
    }
    catch (PDOException $e)
    {
        $error_message1 = "Error connection to DB".PHP_EOL.$e->getMessage()." storage in ".ERROR_LOG_FILE.PHP_EOL;
        echo $error_message1;
        file_put_contents(ERROR_LOG_FILE, $error_message1, FILE_APPEND);

        return false;
    }
}
if ($argc == 6)
{
    connect_db($argv[1], $argv[2], $argv[3], $argv[4], $argv[5]);
}
elseif ($argc <= 5)
{        
    $error_message = 'Bad params! Usage: php connect_db.php host username password port db'.PHP_EOL;
    echo $error_message;
    file_put_contents(ERROR_LOG_FILE, $error_message, FILE_APPEND);

}
    


