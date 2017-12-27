<!DOCTYPE HTML PUBLIC"-//W3C//DTD 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>resist_comments</title>
</head>

<body>
<?php
$c=$_GET['comments'];
$comments="'".$comments."'";
$tweetid=$_GET['tweetid'];
//接続設定
$dsn='mysql:dbname=homesec;host=localhost';
$user='homesec';
$password='password';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
print'成功です';
//データベースにコメント登録
$sql='INSERT INTO comments(comments,tweetid)VALUES("'.$comments.'","'.$tweetid.'")';
$stmt=$dbh->prepare($sql);
$stmt->execute();
print'成功です';
$dbh=null;
?>
</body>
</html>