<?php
 $testt=$_GET["Hello"]
$strAccessToken = "vP6AKZ8YU/hpx5aev1ZbonArtyg6FiMBkfiSs1C4wTSaH2sHanWyoM46Nmyrqn3US0ggfmaGetScRVg0vsLq7OjvXTQl+GwrGJuoliAaCtKGoukAaWmQR+EyjSVo6NJheAQrsQ9QtjoBZCbzObDGPQdB04t89/1O/w1cDnyilFU=";
 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "U15c9dca3b2a9c602e02889a98c928128";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
echo $testt;
?>
