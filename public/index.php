<?php
include ('Config.php');
include ('../app/Api.php');

$config = new Config();

$token = $config->getToken();
$user  = $config->getUser();

$api = new app\Api($token);

$msg = $api->getMsg();
//print_r($msg);

$dom = new DomDocument();
$dom->validateOnParse = true;
$dom->load("msg.xml");

$xpath = new DOMXPath ($dom);
$parent = $xpath->query ('//xml');
$next = $xpath->query ('//xml/messages');

foreach ($msg['response']['items'] as $value){

    $search = $dom->getElementsByTagName('messages');
    foreach ($search as $srch){
        if($srch->getAttribute('id') == $value['message']['id']) continue 2;
    }
    $new_item = @$dom->createElement ('messages',$value['message']['body']);
    $new_item->setAttribute("id", $value['message']['id']);
    $new_item->setAttribute("date", date("d.m.Y H:i:s", $value['message']['date']));
    $new_item->setAttribute("out", $value['message']['out']);
    $new_item->setAttribute("user_id", $value['message']['user_id']);

    $parent->item(0)->insertBefore($new_item, $next->item(0));
}
$dom->save("msg.xml");


