<?php
$data = json_decode(file_get_contents("articles.json"), true)[filter_input(INPUT_GET, "a") ?? "kontakty"]; //$_GET['a']
$tmplt = file_get_contents("page.html");
foreach($data as $key => $val){
    $tmplt = str_replace("{" . $key . "}", $val, $tmplt);
}
echo $tmplt;
