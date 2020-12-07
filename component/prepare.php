<?php
require("config.php");

function fix_code($buffer) {
	return (str_replace("/>", ">", $buffer));
}

if(stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")) {
	if(preg_match("/application\/xhtml\+xml;q=0(\.[1-9]+)/i", $_SERVER["HTTP_ACCEPT"], $matches)) {
		$xhtml_q = $matches[1];
		if(preg_match("/text\/html;q=0(\.[1-9]+)/i", $_SERVER["HTTP_ACCEPT"], $matches)) {
			$html_q = $matches[1];
			if($xhtml_q >= $html_q) {
				$mime = "application/xhtml+xml";
			}
		}
	} else {
		$mime = "application/xhtml+xml";
	}
}

if (stristr($_SERVER["HTTP_USER_AGENT"], "W3C_Validator")) {
	$mime = "application/xhtml+xml";
}

if($mime == "application/xhtml+xml") {
	$prolog_type = "<?xml version='1.0' encoding='$charset' ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.1//EN' 'http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='".$lang."'>\n";
} elseif ($html5 = true) {
	$prolog_type = "<!DOCTYPE html>\n<html lang='".$lang."'>\n";
	$mime = 'text/html';
} else {
	ob_start("fix_code");
	$prolog_type = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html lang='".$lang."'>\n";
}

header("Content-Type: $mime;charset=$charset");
header("Vary: Accept");

echo($prolog_type);
?>
