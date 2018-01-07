<<?php
//コメント登録
$c=$_GET['comments'];
$comments="'".$comments."'";
$tweetid=$_GET['tweetid'];
//JSON形式
header('Content-type: application/json; charset=utf-8')
//接続設定
$dsn='mysql:dbname=homesec;host=localhost';
$user='homesec';
$password='password';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
//データベースにコメント登録
$sql='INSERT INTO comments(comments,tweetid)VALUES("'.$comments.'","'.$tweetid.'")';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$Data=array();
$Data[]=array(
    $rec['landmark_id'],
    $rec['tweetid']
);
print json_encode($Data);
$dbh=null;
?>
