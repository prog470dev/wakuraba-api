<?php
//JSONを適切に表示するための設定
header( "Content-Type: application/json; charset=utf-8" ) ;

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
  $range = $_GET["range"];

  $up_lati = $lati + $range;
  $lo_lati = $lati - $range;
  $up_lpngi = $longi + $range;
  $lo_lpngi = $longi - $range;

  //テキストオブジェクトを格納するの連想配列
  $objects = array();

  //範囲内のレコードを取得
  $stmt = $pdo->query("select * from commentTable
    where lati >= $lo_lati  and lati <= $lo_lati and longi >= $lo_longi and longi <= $up_longi");  //条件に合うレコードを取得
  while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    $la = $row["lati"];
    $lo = $row["longi"];
    $te = $row["text"];

    array_merge($objects, array("lati" => $la, "longi" => $lo, "text" => $te));
  }

  //JSONを表示？
  $array = array("objects" => $objects);
  $json = json_encode($array);
  echo $json;

} catch (PDOException $e) {
  header('Content-Type: text/plain; charset=UTF-8', true, 500);
  exit($e->getMessage());
}

?>
