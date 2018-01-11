<<?php
//コメント登録
$lan_id=$_GET['landmark_id'];
$twe_id=$_GET['tweet_id'];
//JSON形式
header('Content-type: application/json; charset=utf-8')
//接続設定
$dsn='mysql:dbname=homesec;host=localhost';
$user='homesec';
$password='password';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
//データベースにコメント登録
$sql='INSERT INTO tweet_table(landmark_id,name)VALUES("'.$lan_id.'","'.$twe_id.'")';
$stmt=$dbh->prepare($sql)
$stmt->execute();

$Data=array();
$Data[]=array(
    $rec['landmark_id'],
    $rec['name']
);
print json_encode($Data);
$dbh=null;
?>
