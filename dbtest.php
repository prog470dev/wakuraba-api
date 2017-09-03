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
               while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
                 $comment = $row['text'];
                 print($comment);
                 print("<br>");
               }

               $result_flag = $pdo->query("INSERT INTO commentTable (lati, longi, text) VALUES (10.50, 20.10, 'insert comment.')");
               if (!$result_flag) {
                 die('INSERTクエリーが失敗しました。'.mysql_error());
               }

        } catch (PDOException $e) {
                header('Content-Type: text/plain; charset=UTF-8', true, 500);
                exit($e->getMessage());
        }


?>
