<!-- Traduction française par Flatpress communauté francophone - merci de laisser cette mention -->
<?php
	
	$lang['admin']['panel']['maintain'] = 'Maintenance';

	$lang['admin']['maintain']['default'] = array(
		'head'		=> 'Maintenance',
		'descr'		=> 'Si vous pensez qu\'il manque quelque chose, '.
					'ou que vous voulez r&eacute;soudre un probl&egrave;me.
					Regardez ici.',
		'opt0'		=> '&laquo; Retour au menu principal',
		'opt1'		=> 'Reconstruire index',
		'opt2'		=> 'Purger le cache des th&egrave;mes et templates',
		'opt3'		=> 'Restaurer les permissions de fichiers',
		'opt4'		=> 'Afficher infos PHP',
		'opt5'		=> 'V&eacute;rifier mises &agrave; jour',

		'chmod_info'	=> "Les permissions de fichiers (chmod) <strong>ne sont peut &ecirc;tre pas</strong>
					&agrave; 0777; propri&eacute;taire du fichier peut-&ecirc;tre pas identique.",
		
	);
	
	$lang['admin']['maintain']['default']['msgs'] = array(
		1		=> 'Op&eacute;ration effectu&eacute;e'
	);
	
	$lang['admin']['maintain']['updates'] = array(
		'head'	=> 'Mises &agrave; jour',
		'list'	=> '<ul>
		<li>Votre version de FlatPress <big>%s</big></li>
		<li>Derni&egrave;re version stable de FlatPress est <big><a href="%s">%s</a></big></li>
		<li>Derni&egrave;re version dev(beta, rc) de FlatPress est <big><a href="%s">%s</a></big></li>
		</ul>',
		'notice'=>'Note:'
		
	);
	
	
	
	$lang['admin']['maintain']['updates']['msgs'] = array(
		1		=> 'Mises &agrave; jour disponibles!',
		2		=> 'Logiciel &agrave; jour',
		-1		=> 'Impossible de r&eacute;cup&eacute;rer les mises &agrave; jour'
	);

?>
