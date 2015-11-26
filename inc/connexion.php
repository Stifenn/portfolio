<?php
	$dsn = 'mysql:host=localhost;dbname=users;charset=utf8';
	$pdo = new PDO($dsn, 'root', 'webforce3');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);