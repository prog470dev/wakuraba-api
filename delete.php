<?php
header( "Location: showlist.php" ) ;
//exit;

if(empty($_GET)) {
  echo "GET parameter is empty.";
	exit();
}

try{
  $pdo = new PDO(
    'mysql:dbname=homesec;host=localhost;charset=utf8',
    'homesec',
    'password',
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
  );

  $id = $_GET["id"];

  $result_flag = $pdo->query("DELETE FROM commentTable WHERE id = $id");
  if (!$result_flag) {
    die('DELETEクエリーが失敗しました。'.mysql_error());
  }

} catch (PDOException $e) {
  header('Content-Type: text/plain; charset=UTF-8', true, 500);
  exit($e->getMessage());
}

?>
