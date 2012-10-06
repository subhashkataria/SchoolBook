<?php
	include("../model/searchPeopleModel.php");
	
	$user = $_POST['txtfindpeople'];
	
	if($user != "" && $user != " ")
	{
		$object = new SearchPeople();
		$object->search($user);
	}
	else
	{
		$arr = explode("/",$_SERVER['HTTP_REFERER']);
		$loc = $arr[count($arr)-1];
		header("Location: ../view/".$loc);
	}
	
?>