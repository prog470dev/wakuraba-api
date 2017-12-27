<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>get_comments</title>

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
<caption>コメント取得</caption>
<tr>
    <th></th>
    <th>ランドマークID</th>
    <th>ツイートID</th>
</tr>

<?php
//接続設定
$dsn='mysql:dbname=homesec;host=localhost';
$user='homesec';
$password='password';
//データベースへ接続
$sql='SELECT*FROM resist WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

while(1)
{
print'<p>';
$rec=$stmt->fetch(PDO::FETCH_ASSOC);

if($rec==false)
{
break;
}
print'<tr>';
print'<td><input type="checkbox" name="check" value="'.$rec['id'].'"></td>';
print'<td>';
print$rec['landmark_id'];
print'</td><td>';
print$rec['tweetid'];
print'</td>';
print'</tr>';
print'</p>';

}

print'</table>';

$dbh=null;
?>

</form>
</br>

</body>

</html>