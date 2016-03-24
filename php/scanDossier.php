<?php
// Fonction scanDossier
function scanDossier($dossier)
{
	// Variables	
	$i = 0;
	$fichier = NULL;
	$contenu = NULL;
	$type = NULL;
	$path = NULL;
	$lien = NULL;
	$taille = NULL;
	$date = NULL;
	$ref = NULL;
	
	// Lecture du dossier courant
	$handle = opendir($dossier) or die('Erreur');
	
	while(false !== ($fichier = readdir($handle)))
	{
        if($fichier != "." && $fichier != ".." && !strpos($fichier, '.php'))
		{
			$i++;
			if(filetype($dossier.'/'.$fichier) == 'dir')
			{
				$type[$i] = 'dir';
				$path[$i] = $dossier.$fichier;
				$contenu[$i] = scanDossier($path[$i]);
			}
			else
			{
				$type[$i] = 'file';				
			}
			$lien[$i] = $fichier;
			$taille[$i] = FileSizeConvert(filesize($dossier.'/'.$fichier));
			$date[$i] = filemtime($dossier.'/'.$fichier);
			$ref[$i] = $date[$i];
		}
	}
	closedir($handle);
		
	arsort($date, SORT_NUMERIC);
	$a = 0;
	foreach($date as $index => $valeur)
	{
		$resultat[$a]['lien'] = $dossier.$lien[$index];
		$resultat[$a]['taille'] = $taille[$index];
		$resultat[$a]['path'] = $path[$index];
		$resultat[$a]['type'] = $type[$index];
		$resultat[$a]['date'] = date("d F Y H:i:s", $date[$index]);
		$resultat[$a]['contenu'] = $contenu[$index];
		$a++;
	}
	
	return $resultat;
}

function FileSizeConvert($bytes)
{
	$bytes = floatval($bytes);
	$arBytes = array(
						0 => array("UNIT" => "TB", "VALUE" => pow(1024, 4)),
						1 => array("UNIT" => "GB", "VALUE" => pow(1024, 3)),
						2 => array("UNIT" => "MB", "VALUE" => pow(1024, 2)),
						3 => array("UNIT" => "KB", "VALUE" => 1024),
						4 => array("UNIT" => "B", "VALUE" => 1),
					);

    foreach($arBytes as $arItem)
    {
        if($bytes >= $arItem["VALUE"])
        {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
            break;
        }
    }
    return $result;
}
?>