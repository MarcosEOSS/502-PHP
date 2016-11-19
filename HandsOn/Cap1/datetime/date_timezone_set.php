<?php

	setlocale(LC_ALL,"pt_BR.utf8", "portuguese");
	date_default_timezone_set("Asia/Tokyo");

	echo strftime("%c");
	echo "<br />";
	echo strftime("%A, %d de %B de %Y %R");
