<?php
	//コメント登録
	$lan_id=$_GET['landmark_id'];
	$twe_id=$_GET['tweet_id'];
	$twe_id="'".$twe_id."'";

	//JSON形式
	//header('Content-type: application/json; charset=utf-8');

	//接続設定
	/*
	$dsn='mysql:dbname=homesec;host=localhost';
	$user='homesec';
	$password='password';
	$dbh=new PDO($dsn,$user,$password);
	$dbh->query('SET NAMES utf8');
	//データベースにコメント登録
	$sql="INSERT INTO tweet_table(landmark_id,name)VALUES($lan_id,$twe_id)";
	$stmt=$dbh->prepare($sql);
	$stmt->execute();

	$dbh=null;
	*/

	try{
	  $pdo = new PDO(
	    'mysql:dbname=homesec;host=localhost;charset=utf8',
	    'homesec',
	    'password',
	    [
	      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    ]
	  );

		$result_flag = $pdo->query("INSERT INTO tweet_table (landmark_id, name) VALUES ($lan_id, $twe_id)");
			if (!$result_flag) {
			die('INSERT qury failed.'.mysql_error());
		}

	} catch (PDOException $e) {
	  header('Content-Type: text/plain; charset=UTF-8', true, 500);
	  exit($e->getMessage());
	}
?>
