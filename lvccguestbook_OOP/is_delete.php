<?php
	require_once("config.php");
	$id = $_GET['id'];
	MessageDAO::deleteMessage($id);
	header("location:view_all.php")
?>