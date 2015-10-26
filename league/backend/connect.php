<?php

function GetDatabaseConnection()
{
    $databaseConnection = new mysqli("localhost", "root", "", "league");
    
    if ($databaseConnection->connect_error)
    {
        echo "Could not connect to database";
    }

    return $databaseConnection;
} 

?>