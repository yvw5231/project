<?php


include_once "global.php";
include_once "db_connect.php";
include "header.php";
print <<< eot
	<span class="rating">
	  <input id="rating10" type="radio" name="rating" value="10">
	  <label for="rating10">10</label>
	  <input id="rating9" type="radio" name="rating" value="9">
	  <label for="rating9">9</label>
	  <input id="rating8" type="radio" name="rating" value="8">
	  <label for="rating8">8</label>
	  <input id="rating7" type="radio" name="rating" value="7">
	  <label for="rating7">7</label>
	  <input id="rating6" type="radio" name="rating" value="6">
	  <label for="rating6">6</label>
	  <input id="rating5" type="radio" name="rating" value="5">
	  <label for="rating5">5</label>
	  <input id="rating4" type="radio" name="rating" value="4">
	  <label for="rating4">4</label>
	  <input id="rating3" type="radio" name="rating" value="3">
	  <label for="rating3">3</label>
	  <input id="rating2" type="radio" name="rating" value="2">
	  <label for="rating2">2</label>
	  <input id="rating1" type="radio" name="rating" value="1">
	  <label for="rating1">1</label>
	</span>
	<BR>
	<form name="testform" method="post" action="test.php">

    <h2>Choose a category</h2>
    <p>
        <input type="radio" value="1" name="category" id="category_1" class="hidden" />
        <a id="category_fruit" class="radio-picture">&nbsp;</a>
	</p>
	</form>
eot;
?>