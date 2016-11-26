<?php

$file = new SplFileObject("produtos.txt","a+");

while (!$file->eof()){

	$linha = $file->fgets();
	echo $linha . "<br />";
}

echo "<br />";

foreach($file as $linha){
	echo $linha . "<br />";
}

//Arquivo temporario

$temp = new SplFileObject();
$temp = fwrite("Sou um arquivo temporario");
$temp = rewind();
echo $temp->fgets();