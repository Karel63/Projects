<?php
require "mysqlphp2/MySQL.php";

$test = (new Mysql)->connect("127.0.0.1", "root", "", "countries");
//$test->insert("country", array("name" => "Slovakia", "capital" => "Bratislava", "Continent_id" => "1"));
//$test->update("country", 5, array("name" => "India"));
//$test->delete("country", 12);
//var_dump($test->select("SELECT * FROM country"));
$html = $test->select("SELECT country.name AS country, capital, continent.name AS continent FROM country, continent");

$text = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabulka</title>
    <link rel="stylesheet" href="Design.css">
</head>
<body>
<table>' . "\n";

$t = 1;
foreach($html as $key => $array){
  if($t == 1){ 
    $text .= "<tr>";
    foreach($array as $key2 => $value){
      $text .= "<th>" . $key2 . "</th>";
    }
    $text .= "</tr>";
    $t = 0;
  }
  $text .= "<tr>";
  foreach($array as $key2 => $value){
    $text .= "<td>" . $value . "</td>";
  }
  $text .= "</tr>";
}

$text .= "</table>" . "\n" . "</body>
</html>";

file_put_contents("mysqlphp2/MySQL.html", $text);