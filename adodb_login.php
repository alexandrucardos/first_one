<?php

include('C:\Users\alexandru.cardos\Dropbox\Site\adodb5\adodb.inc.php');

$DB = NewADOConnection('mysql');


$DB->Connect('localhost','test','test','baza de date');

$test = $DB->Execute("select t.numeTask from taskuri t where t.idTask = 1;");


echo $test ;
echo "</br>".$test ;
print_r($test);
