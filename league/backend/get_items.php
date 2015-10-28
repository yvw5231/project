<?php

	require_once('connect.php');

	function GetItems() 
	{
		$databaseConnection = GetDatabaseConnection();
		$itemsArray = array();

		$getItems = 'SELECT * FROM `User`';
		$itemsResult = $databaseConnection->query($getItems);

		while($itemsRow = $itemsResult->fetch_assoc())
   		{
           array_push($itemsArray, $itemsRow);
    	}

		return json_encode($itemsArray);
	}

	echo GetItems();
?>