<?php

function GetDatabaseConnection()
{
    $databaseConnection = new mysqli("localhost", "root", "", "leaguestoredata");
    
    if ($databaseConnection->connect_error)
    {
        echo "Could not connect to database";
    }
    return $databaseConnection;
} 

?>