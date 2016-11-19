<?php


for ($i=10; $i<100;$i++){
file_put_contents("emails.txt", "\nemail$i@uol.com.br",FILE_APPEND);
}

$file = file_get_contents("emails.txt");
echo nl2br($file);

