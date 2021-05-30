<?php 

function MYSQLIAuth() {
	return [
		"localhost", //mysql host
		"rongwdesign", //mysql username
		"rongwdesign", //mysql user password
		"rongwdesign_wnm608_example", //mysql database name
	];
}



function PDOAuth() {
	return [
		"mysql:host=localhost;dbname=rongwdesign_wnm608_example", //host and database name
		"rongwdesign", //mysql username
		"rongwdesign", //mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]

	];
}
