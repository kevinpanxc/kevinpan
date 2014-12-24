<?php

	header("Content-Type: application/json");
	$folder = $_POST["folder"];
	$jsonData = '{';

	$dir = $folder."/";
	if (is_dir($dir)) {
		if ($dirHandle = opendir($dir)) {
			$i = 0;
			while ($file = readdir($dirHandle)) {
				if(!is_dir($file) && (strpos($file, '.jpg') || strpos($file, '.png'))){
					$i++;
					$src = "$dir$file";
					$jsonData .= '"img'.$i.'":{ "num":"'.$i.'","src":"'.$src.'", "name":"'.$file.'", "captions":"false" },';
			    }
			}
			closedir($dirHandle);
		} 

	}

	$captionsDir = $folder."/Captions/";
	if (is_dir($captionsDir)) {
		if ($captionsDirHandle = opendir($captionsDir)) {
			$i = 0;
			while ($file = readdir($captionsDirHandle)) {
				if(!is_dir($file) && strpos($file, '.txt')){
					$i++;
					$captions = file_get_contents("$captionsDir$file");
					$jsonData .= '"cap'.$i.'":{ "num":"'.$i.'","captionsString":"'.$captions.'", "name":"'.$file.'", "captions":"true" },';
				}
			}
		}
	}

	$jsonData = chop($jsonData, ",");
	$jsonData .= '}';
	echo $jsonData;

?>