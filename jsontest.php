<?php
//JSONを適切に表示するための設定
header( "Content-Type: application/json; charset=utf-8" ) ;

//テキストオブジェクトを格納するの連想配列
$objects = array();

for($i=0; $i<10; $i++) {
  $la = $i*5;
  $lo = $i*10;
  $te = "hello";
  $arr = array("lati" => $la, "longi" => $lo, "text" => $te);

  array_push($objects, $arr);
}

//echo json_encode($objects);

//JSONを表示？
$array = array("objects" => $objects);
$json = json_encode($array);
echo $json;

?>
