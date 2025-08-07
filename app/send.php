<?php

$token = "7630915875:AAE3BV0Ta9KKEPmRSaHJrgUMty5rmq9GXRA";
$chat_id = "-4900020029";

$name = $_POST["name"];
$answer = $_POST['invite'];
$alco = $_POST['alco'];
$alcogol = '';
$alergy = $_POST['alergy'];
$wish  = $_POST['wish'];


$arr = array(
    'Гости:' => $name,
    'Ответ:' => $answer,
    'Алкоголь:' => $res,
    'Аллергия:' => $alergy, 
    'Предпочтения на вечер:' => $wish, 
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

if(empty($name)){
    echo "<script>window.location.replace('negative.html');</script>";
}else{
    
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    if($sendToTelegram) {
        echo "<script>window.location.replace('positive.html');</script>";
    } else {
        echo "<script>window.location.replace('negative.html');</script>";
    }
}

?>