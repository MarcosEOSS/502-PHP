<?php

	$dom = new DOMDocument();
	$dom->load("cursos.xml");

	//$carga = $dom->createElement("carga_horaria", "40");

	$cursos = $dom->getElementsByTagName("curso");

	//$i=0;
	//foreach ($cursos as $item){
	//	$item = $dom->getElementsByTagName("curso")->item($i);
	//	$item->appendChild($carga);
	//	$i++;
	//}

	foreach ($cursos as $item){
		$carga = $dom->createElement("carga_horaria","40");
		$item->appendChild($carga);
	}
	

	

	//$dom->save("cursos.xml");
	
	header("Content-type: text/xml");

	print_r($dom->saveXML());

