<?php
$json = file_get_contents("http://random-data-api.com/api/v2/beers?size=10");
$json = json_decode($json);
$json = (array) $json;
//$json = (array) json_decode(file_get_contents("Beers/Beers.json"));
$top = 0;
$data = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beers</title>
    <link rel="stylesheet" href="Beers.css">
</head>
<body>
<table>'; 
$data .= "<tr><th>id</th><th>name</th><th>alcohol</th></tr>";
$data .= "<tr>";
/*for($x = 0; $x < count($json); $x++){
    foreach($json[$x] as $key => $value){
        if($key == "alcohol"){
            $float = (float) $value;
            if($float > $top){
                $top == $float;
                $temp = $json[$x];
                for($t = 0; $t < count($json); $t++){
                    $json[$t + 1] = $json[$t];
                }
                $json[0] = $temp;
            }
        }
    } 
}*/
for($x = 0; $x < count($json); $x++){
    $data .= "<tr>";
    foreach($json[$x] as $key => $value){
        switch($key){
            case "id":
                $data .= "<td>" .  $value . "</td>";
                break;
            case "name":
                $data .= "<td>" .  $value . "</td>";
                break;
            case "alcohol":
                $data .= "<td>" .  $value . "</td>";
                break;
        }
    }
    $data .= "</tr>";
}
$data .= "</tr>";
$data .= "</table>
</body>
</html>";
file_put_contents("Beers/Beers.html", $data);