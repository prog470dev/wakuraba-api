<?php
//コメント取得
$lan_id=$_GET['landmark_id'];
//JSON形式
header('Content-type: application/json; charset=utf-8')
//接続設定
$dsn='mysql:dbname=homesec;host=localhost';
$user='homesec';
$password='password';
//データベースへ接続

$sql='SELECT*FROM tweet_table WHERE landmark_id = $lan_id';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$Data=array();
while($rec=$stmt->fetch(PDO::FETCH_ASSOC))
{
    $Data[]=array(
        $rec['landmark_id'],
        $rec['tweetid']
    );
}
print json_encode($Data);
//切断
$dbh=null;
?>
