<?php 

function MYSQLIAuth() {
	return [
"localhost", //mysql host
"akshatsonar", // mysql user name
"", // mysql user password
"akshatsonarproducts" // mysql database name
	];
}

function PDOAuth() {
	return [
		"mysql:host=localhost;dbname=akshatsonarproducts", //host and database name
		"akshatsonar", // mysql user name
		"", // mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}

