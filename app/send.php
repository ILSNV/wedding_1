<?php

$token = "7975433616:AAEVUajyEGNlZdpgBrmTE5igpo5RichQhP8";
$chat_id = "-4881610651";

$name = $_POST["name"];
$answer = $_POST['invite'];
$guest = $_POST['guest'];
$ceremony = $_POST['ceremony'];
$photo = $_POST['photo'];
$dinner = $_POST['dinner'];
$alco = $_POST['alco'];

$arr = array(
    'ФИО:' => $name,
    'Ответ:' => $answer,
    'Гости:' => $guest,
    'Регистрация:' => $ceremony,
    'Фотосессия и прогулка:' => $photo,
    'Банкет:' => $dinner,
    'Алкоголь:' => $alco,
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