<?php
//ランドマークIDとツイートIDの登録
$landmark_id=$_GET['landmark_id'];
$tweet_id=$_GET['tweet_id'];

$s=mysql_connect("homesec","homesec","password",'');
mysql_select_db("tweet_table",$s);
mysql_query("INSERT INTO regist(landmark_id,name) VALUES($landmark_id,$tweet_id)");
mysql_close($s);
?>
