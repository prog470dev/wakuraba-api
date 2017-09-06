<?php

try{
  //DBに接続
  $pdo = new PDO(
    'mysql:dbname=homesec;host=localhost;charset=utf8',
    'homesec',
    'password',
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
  );

  //パラメータのデータを取得
  $lati = $_GET["lati"];
  $longi = $_GET["longi"];

  $t = $_GET["text"];
  $text = "'".$t."'";

  //受信情報を情報をDBに登録
  $result_flag = $pdo->query("INSERT INTO commentTable (lati, longi, text) VALUES ($lati, $longi, $text)");
  if (!$result_flag) {
    die('INSERT qury failed.'.mysql_error());
  }

} catch (PDOException $e) {
  header('Content-Type: text/plain; charset=UTF-8', true, 500);
  exit($e->getMessage());
}

?>
