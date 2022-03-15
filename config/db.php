<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "blog";

try {
  $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

function getDataFromServer($sql, $connection, $isFetchAll) {
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    if($isFetchAll) {
      return $statement->fetchAll();
    }

    return $statement->fetch();
  };

  ?>