<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri);

$operation = $uri[1];
for($t = 2, $s = 0; $t < sizeof($uri); $t++, $s++){
    $number[$s] = intval($uri[$t]);
}
$count = sizeof($number);
$result = $number[0];

if($number[0] == NULL || $operation == NULL){
    print_r(json_encode(["report" => "Operator or number not filled"]));
    exit;
}
for ($t = 0; $t < $count; $t++){
    if(!$number[$t] || !is_numeric($number[$t])){
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
            $result = $result + $number[$t];
        }
        break;
    case "sub":
    case "min":
        for($t = 1; $t < $count; $t++){
            $result = $result - $number[$t];
        }
        break;
    case "mul":
        for($t = 1; $t < $count; $t++){
            $result = $result * $number[$t];
        }
        break;
    case "div":
        for($t = 1; $t < $count; $t++){
            $result = $result / $number[$t];
        }
        break;
}
print_r(json_encode(["report" => "All good", "result " => $result]));
