<?php
if(!mysql_connect("localhost","shoppers_new","Mits734045005"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("shoppers_new"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>