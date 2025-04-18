<?php

   
    $tab = [1,2,3,4];
    echo "Le tableau contient ".count($tab)."éléments";
    
 $fileHistory= [] ;
 $ipConnues = [];
$instantPresent = time();
$ip_client = $_SERVER['REMOTE_ADDR']; //on recupere l'adresse IP du visiteur
echo $ip_client;

//on regarde l'historique

$resource = fopen('counter.txt', 'c+');
$fileContent = fread($resource,filesize('counter.txt'));
$fileHistory = explode("|",$fileContent);

for($i=0;$i<count($fileHistory);$i++ )
{
    $savedIP = strtok($fileHistory[$i],"|");
    $heureSaved = strtok("\n");
    $ipConnues []= array($savedIP=>$heureSaved);
}
fclose($resource);

foreach($ipConnues AS $savedIP => $heureSaved )
{
    if($savedIP == $ip_client && $instantPresent>($heureSaved+30) )
    {
        $recordIP = fopen('counter.txt', 'w+');
        fwrite($recordIP,$ip_client."|".$instantPresent."\n");
        fclose($recordIP);
    }
}

//si l'adresse de client n'existe pas dans les adresses connues
if(in_array($ip_client,$ipConnues))

{
    
}
else{
    $recordIP = fopen('counter.txt', 'w+');
        fwrite($recordIP,$ip_client."|".$instantPresent."\n");
        fclose($recordIP);
}

var_dump($ipConnues);