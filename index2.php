<?php
$botToken = "";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");//"php://input"
$updateArray = json_decode($update, TRUE);
$chatId = $updateArray["message"]["chat"]["id"];
$message = $updateArray["message"]["text"];
$urlencode = urlencode("Ciao briciola");
if(strcmp($message, "/gobbis")== 0)file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Il%20seguente%20bot%20e'%20in%20fase%20di%20costruzione%20:)");
else file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Ciao"."%20"."utente");





?>