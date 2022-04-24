<?php 
if($_POST["action"]== "update")
{
	$file= addcslashes(file_get_contents($_FILES["image"]["tmp_name"]));
}