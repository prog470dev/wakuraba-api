<?php
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

  $stmt = $pdo->query("select * from commentTable");
  if (!$stmt) {
    die('SELECT qury failed.'.mysql_error());
  }
  while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
  }

} catch (PDOException $e) {
  header('Content-Type: text/plain; charset=UTF-8', true, 500);
  exit($e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
<title>一覧</title>
</head>
<body>
<h1>一覧</h1>

<table border='1'>
<tr><td>lati</td><td>longi</td><td>text</td><td>削除</td></tr>

<?php
foreach($rows as $row){
  $id = $row["id"];
  $lati = $row["lati"];
  $longi = $row["longi"];
  $t = $row["text"];
  $text = "'".$t."'";
?>

<tr>
  <td><?=htmlspecialchars($lati, ENT_QUOTES, 'UTF-8')?></td>
	<td><?=htmlspecialchars($longi, ENT_QUOTES, 'UTF-8')?></td>
  <td><?=htmlspecialchars($t, ENT_QUOTES, 'UTF-8')?></td>
  <td>
    <form action="delete.php" method="get">
  		<input type="submit" value="削除">
  		<input type="hidden" name="id" value="<?=$id?>">
    </form>
  </td>
</tr>

<?php
}
?>
