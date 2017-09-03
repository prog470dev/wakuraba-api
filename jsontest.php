<?php
//JSONを適切に表示するための設定
header( "Content-Type: application/json; charset=utf-8" ) ;

//テキストオブジェクトを格納するの連想配列
$objects = array();

while($i=0; $i<10; $i++) {
  $la = $i*5;
  $lo = $i*10;
  $te = "hello";
  array_merge($objects, array("lati" => $la, "longi" => $lo, "text" => $te));
}

//JSONを表示？
$array = array("objects" => $objects);
$json = json_encode($array);
echo $json;

?>
