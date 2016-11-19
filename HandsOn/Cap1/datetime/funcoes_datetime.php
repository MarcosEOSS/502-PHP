<?php

	echo date('d/m/Y H:i:s');
	echo "<br />";
	echo date('d/m/Y ');
	echo "<br />";
	echo date('d-m-y');
	echo "<br />";
	echo date('Y-m-d');
	echo "<br />";
	echo date('d');
	echo "<br />";
	echo date('m');
	echo "<br />";
	echo date('Y');
	echo "<hr />";
	echo time();
	echo "<br />";
	echo microtime();
	echo "<hr />";

	$proxSemana = time() + (7 * 24 * 60 * 60);
	echo date('d-m-Y', $proxSemana);
	echo "<hr />";

	echo microtime(true);
	echo "<hr />";

	echo date("d-m-Y",strtotime("now"));
	echo "<br />";
	echo date("d-m-Y",strtotime("next day"));
	echo "<br />";
	echo date("d-m-Y",strtotime("next week"));
	echo "<br />";
	echo date("d-m-Y",strtotime("+ 1 week"));
	echo "<br />";
	echo date("d-m-Y",strtotime("tomorrow"));
	echo "<br />";
	echo date("d-m-Y",strtotime("+ 2 days"));
	echo "<br />";
	echo date("d-m-Y",strtotime("+ 1 month"));
	echo "<br />";
	echo date("d-m-Y",strtotime("+ 1 year"));
	echo "<hr />";
	echo date("d-m-Y H:i:s",mktime(15,11,11,11,20,16));
	echo "<br />";
	echo date("d-m-Y h:i:s",mktime(15,11,11,11,20,16));
