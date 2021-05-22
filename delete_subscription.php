<?php
    include './inc/config.php';
    session_start();
	if (empty($_SESSION['email'])){
    	header('Location: index.php');
	}else
	{
    $index_id = $_GET['id'];
    $sql = "DELETE FROM `plans_users` WHERE `index_id` = '".$index_id."' ";
    DB::query($sql);
    header('Location: profile.php');
	}
?>