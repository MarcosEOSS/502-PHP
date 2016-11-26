<?php

$fileName = "teste.txt";
$stream = fopen($fileName,"w+");
fclose($stream);

if(file_exists($fileName)){
	chmod($fileName, 0777);
	echo ("Permissao alterada<hr />");
}

$info = stat($fileName);
var_dump($info);

if(!file_exists("touch.txt")){
	touch("touch.txt");
	echo "<br />Arquivo touch.txt foi criado!";
}

if(file_exists("touch.txt")){
	unlink("touch.txt");
	echo "<br />Arquivo touch.txt foi apagado!";
}

if(file_exists($fileName)){
	copy($fileName, "teste2.txt");
}

rename("teste2.txt", "teste1.txt");

$consulta = glob("manipulacao_arquivos/*.txt");
echo "<pre>";

print_r($consulta);


$str = fopen("teste3","w+");

if(flock($str,LOCK_EX|LOCK_NB)){
	
}

