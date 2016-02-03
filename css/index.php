<?php

$debug = false;
$timeout = 0;

$file_array = Array(
	'layout.css',
	'article.css',
	'header.css',
	'nav_head.css',
	'nav_right.css',
	'main.css',
	'footer.css',
	'fonts.css',
	'joomla.css',
	'kalender.css',
	'plugin_fixes.css',
	'scoute_dich_aktion.css',
	'leiterprofile.css',
	'contacts.css',
	'blueberry.css',
	'bilder.css',
);

function import($filename) {
	global $debug;
	
	$return = '';
	
	if(is_file($filename)) {
		if($debug) {
			$return .= "\n\n\n";
			$return .=  '/* ***********************************************'."\n";
			$return .=  ' * imported file '.$filename."\n";
			$return .=  ' *'."\n";
			$return .=  ' */'."\n";
		}
		
		$fp = fopen($filename, 'r');
		while(!feof($fp))
			$return .= fgets($fp);
		fclose($fp);
		
		if(!$debug) {
			/* compress */
			$return = str_replace(array("\n", "\r", "\t"), array("","",""), $return);
		}
	}
	return $return;
}

header("Content-Type: text/css");

if (!is_file('_complete.css') || (filemtime('_complete.css') + $timeout < time())) {
	$fp = fopen('_complete.css', 'w+');
	foreach($file_array AS $file) {
		fputs($fp, import($file));
	}
	fclose($fp);
}

header('Location: _complete.css');