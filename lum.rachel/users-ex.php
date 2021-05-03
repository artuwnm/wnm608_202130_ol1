<?php


include_once "lib/php/functions.php";




if(isset($_GET['action'])){
	switch($_GET['action']){
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->email = $_POST['user-email'];
			$users[$_GET['id']]->classes = explode(",",$_POST['user-classes']);

			file_put_contents(filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$empty_user->name = $_POST['user_name'];
			$empty_user->type = $_POST['user_type'];
			$empty_user->email = $_POST['user_email'];
			$empty_user->classes = explode(",",$_POST['user_classes']);

			$id = count($users);

			$users[] = empty_user;

			file_put_contents(filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			array_splice($users,$_GET['id'],1);
			file_put_contents(filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}");
			break;

	}		
}