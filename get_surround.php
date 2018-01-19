<?php
//ランドマーク（現在地）取得
$lsti=$_GET['latitude'];
$longi=$_GET['longitude'];
$ran=$_GET['range'];
//JSON形式
header('Content-type: application/json; charset=utf-8')
//接続設定
$dsn='mysql:dbname=homesec;host=homesec';
$user='homesec';
$password='password';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
.
//データベースへ接続
$sql='SELECT*FROM landmark_table WHERE ABS(latitude - $lsti) <= $ran AND ABS(longitude - $longi) <= $ran';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$Data=array();
while($rec=$stmt->fetch(PDO::FETCH_ASSOC)){
  $Data[]=array(
      $rec['id'],
      $rec['latitude'],
      $rec['longitude'],
      $rec['name'],
      $rec['tag']
    );

}

print json_encode($Data);
//切断
$dbh=null;
?>
