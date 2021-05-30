<?php

function MYSQLIAuth() {
	return [
		"localhost",  // mysql user name
		"xrquandesign_608",  // mysql user name
		"926ShiKeXin",  // mysql user password
		"xrquandesign_608"  //mysql database name
	];
}

function PDOAuth() {
	return [
		"mysql:host=localhost;dbname=xrquandesign_608",  // mysql user name
		"xrquandesign_608",  // mysql user name
		"926ShiKeXin",  // mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}