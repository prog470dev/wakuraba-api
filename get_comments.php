<?php
//コメント取得
$landmark_id=$_GET['landmark_id'];
//JSON形式
header('Content-type: application/json; charset=utf-8');
//接続設定
$dsn='mysql:dbname=homesec;host=localhost';
$user='homesec';
$password='password';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
//データベースへ接続

$sql='SELECT*FROM tweet_table WHERE landmark_id IN ($landmark_id)';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$Data=array();
while($rec=$stmt->fetch(PDO::FETCH_ASSOC))
{
    $Data[]=array(
        $rec['landmark_id'],
        $rec['name']
    );
}
print json_encode($Data);
//切断
$dbh=null;
?>
