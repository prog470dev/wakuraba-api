<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type"content="text/html; charset=utf-8">
<title>get surround tag</title>
</head>
<body>
<style>
    table{
        border-collapse:collapse; 
    }
    th{
        border:solid 1px;
        padding:1em;
    }
    td{
        border:solid 1px;
        padding:0.5em;
    }
</style>
<table>
<caption>get_surround_tag_database</caption>
<tr>
    <th></th>
    <th>現在地の緯度</th>
    <th>現在地の経度</th>
    <th>取得範囲(°)</th>
    <th>タグ番号</th>
</tr>

<?php
//ランドマーク（現在地）取得
//接続設定
$dsn='mysql:dbname=homesec;host=homesec';
$user='homesec';
$password='password';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

//データベースへ接続
$sql='SELECT*FROM regist WHERE 1';
$stmt=$dbh->prepare($sql);
$sstmt->execute();

while(1)
{
print'<p>';
$rec=$stmt->fetch(PDO::FETCH_ASSOC);

if($rec==false){
    break;
}
print'<tr>';
print'<td>';
print$rec['id'];
print'</td>';
print'<td>';
print$rec['latitude'];
print'</td>';
print'<td>';
print$rec['longitude'];
print'</td>';
print'<td>';
print$rec['name'];
print'</td>';
print$rec['tag'];
print'</tr>';
print'</p>';

}

print'</table>';

$dbh=null;
?>

</body>

</html>