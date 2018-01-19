<?php
//ランドマークIDとツイートIDの登録
$landmark_id=$_GET['landmark_id'];
$tweet_id=$_GET['tweet_id'];

$dsn='mysql:dbname=homesec;host=homesec';
$user='homesec';
$password='password';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
.
//データベースへ接続
$sql='INSERT INTO tweet_table(tweet_id,name)VALUES("'.$landmark_id.'","'.$tweet_id.'")';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$dbh=null;
?>
