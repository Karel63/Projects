<?php

$data = json_decode(file_get_contents("faze3.json"));

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = explode( '/', $url); 

$operation = $url[2];
$count = sizeof($data);
$result = $data[0];

if($data[0] == NULL || $operation == NULL){
    print_r(json_encode(["report" => "Operator or number not filled/are incorrect"]));
    exit;
}

for ($t = 0; $t < $count; $t++){
    if(!$data[$t] || !is_numeric($data[$t])){
        print_r(json_encode(["report" => "Not a valid number"]));
        exit;
    }
}

switch($operation){
    default:
        print_r(json_encode(["report" => "Not a valid operator"]));
        exit;
    case "add":
    case "sum":
        for($t = 1; $t < $count; $t++){
            $result = $result + $data[$t];
        }
        break;
    case "sub":
    case "min":
        for($t = 1; $t < $count; $t++){
            $result = $result - $data[$t];
        }
        break;
    case "mul":
        for($t = 1; $t < $count; $t++){
            $result = $result * $data[$t];
        }
        break;
    case "div":
        for($t = 1; $t < $count; $t++){
            $result = $result / $data[$t];
        }
        break;
}

print_r(json_encode(["report" => "All good", "result " => $result]));
