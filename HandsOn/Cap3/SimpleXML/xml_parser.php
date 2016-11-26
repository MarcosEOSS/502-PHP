<?php

	$parser = xml_parser_create();
	xml_set_element_handler($parser,"elInicio","elFinaliza");
	xml_set_character_data_handler($parser, "elTexto");

	$xml = new SplfileObject("cursos.xml");

	foreach($xml as $linha){
		xml_parse($parser,$linha);

	}
	
	xml_parser_free($parser);

	function elInicio($parser, $nome, $atributos){
		echo "Inicio da tag: ". $nome ."Atributos: " . print_r($atributos,true) ."<br />";
	}

	function elFinaliza($parser, $nome){
		echo "Fim da tag: ". $nome."<hr />";
	}

	function elTexto($parser, $texto){
		If($texto){
			echo "Texto: ". $texto."<br />";
		}
	}