<?php

	require_once('connect.php');

	function GetItems() 
	{
		$ItemsArray = GetItemsAPI($_GET['name'], $_GET['type']);

		$ItemsArrayJSON = json_encode($ItemsArray);

		echo $ItemsArrayJSON;
	}

	function GetItemsAPI($item, $type) 
	{
		//write sql commands here
		return array( "foo" => "a", "bar" => "n",);
	}

	//GetItems();
	echo json_encode(array( "foo" => "a", "bar" => "n",));
?>