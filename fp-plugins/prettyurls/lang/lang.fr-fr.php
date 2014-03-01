<?php
	$lang['plugin']['prettyurls']['errors'] = array (
		-2	=> 'Impossible de trouver ou de cr&eacute;er le fichier <code>.htaccess</code> dans le r&eacute;pertoire '.
				'principal. PrettyURLs peut ne pas fonctionner correctement, voyez le panneau de configuration.'
	);
	
	$lang['admin']['plugin']['submenu']['prettyurls'] = 'PrettyURLs Config';
	$lang['admin']['plugin']['prettyurls'] = array(
		'head'		=> 'Configuration de PrettyURLs',
		'description'=>'Ceci est l\'&eacute;diteur qui vous permet de modifier le fichier '.
						'<code><a class="hint" href="http://wiki.flatpress.org/doc:plugins:prettyurls#htaccess">.htaccess</a></code>.',
		'cantsave'	=> 'Vous ne pouvez pas &eacute;diter ce fichier, parce qu\'il n\'est pas autoris&eacute; en <strong>&eacute;criture</strong>. Vous devez autoriser l\'&eacute;criture du fichier ou copier-coller vers un fichier &agrave; transf&eacute;rer comme <a class="hint" href="http://wiki.flatpress.org/doc:plugins:prettyurls#manual_upload">d&eacute;crit ici</a>',
		'submit'	=> 'Save'
	);
	$lang['admin']['plugin']['prettyurls']['msgs'] = array(
		1		=> '.htaccess enregistr&eacute;',
		-1		=> '.htaccess n\'a pas &eacute;t&eacute; enregistr&eacute; (v&eacute;rifiez les permissions de <code>'. BLOG_ROOT .'</code>)?'
	);
	
?>