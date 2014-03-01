<!-- Traduction française par Flatpress communauté francophone - merci de laisser cette mention -->
<?php


	$lang['admin']['entry']['submenu'] = 
	array (
		'list'		=> 'G&eacute;rer les articles',
		'write'		=> 'Ecrire un article',
		'cats'		=> 'G&eacute;rer les cat&eacute;gories'
	);


	/* action par défaut */
	
	$lang['admin']['entry']['list'] = 
	array(
		'head'		=> 'G&eacute;rer les articles',
		'descr'		=> 'S&eacute;lectionner un article &agrave; &eacute;diter ou<a href="admin.php?p=entry&amp;action=write"> ajouter un nouvel article</a>'.
					'<br /><a href="admin.php?p=entry&amp;action=cats">Editer les cat&eacute;gories</a>',
		'filter'	=> 'Filtrer: ',
		'nofilter'	=> 'Tout Afficher',
		'filterbtn'	=> 'Appliquer filtre',
		'sel'		=> 'Sel', // checkbox
		'date'		=> 'Date',
		'title'		=> 'Titre',
		'author'	=> 'Auteur',
		'comms'		=> '#Comms', // commentaires
		'action'	=> 'Action',
		'act_del'	=> 'Effacer',
		'act_view'	=> 'Voir',
		'act_edit'	=> 'Editer'
	);
	
	/* écrire action */
	$lang['admin']['entry']['write'] = 
	array(
		'head'		=> 'Ecrire un article',
		'descr'		=> 'Editer les formulaire d\'&eacute;criture de l\'article',
		'uploader'	=> 'Uploader',
		'fieldset1'	=> 'Editer',
		'subject'	=> 'Sujet (*):',
		'content'	=> 'Contenu (*):',
		'fieldset2'	=> 'Soumettre',
		'submit'	=> 'Publier',
		'preview'	=> 'Aper&ccedil;u',
		'savecontinue'	=> 'enregistrer et continuer',
		'archive'	=> 'Archiver',
		'nocategories'	=> 'Pas de cat&eacute;gories d&eacute;finies. <a href="admin.php?p=entry&amp;action=cats"> Cr&eacute;er '. 
					'categories</a>  &agrave; partir de l\'article principal. '.
					'<a href="#save">Enregistrer</a> votre premi&egrave;re entr&eacute;e.',
		'saveopts'	=> 'Enregistrer options',
		'success'	=> 'Votre article a &eacute;t&eacute; publi&eacute;',
		'otheropts'	=> 'Autres options',
		'commmsg'	=> 'G&eacute;rer les commentaires de cet article',
		'delmsg'	=> 'Effacer cet article',
		//'back'		=> 'Back discarding changes',
	);
	

	$lang['admin']['entry']['list']['msgs'] = array(
		1	=> 'Article a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s',
		-1	=> 'Une erreur est apparue pendant l\'enregistrement de l\'article',
		2	=> 'Article effac&eacute;',
		-2	=>	 'Une erreur est apparue pendant la suppression de l\'article',
	);

	
	$lang['admin']['entry']['write']['error'] = array(
		'subject'	=> 'Compl&eacute;tez le sujet',
		'content'	=> 'Compl&eacute;tez correctement le formulaire',
	);
	
	$lang['admin']['entry']['write']['msgs'] = array(
		1	=> 'Article a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s',
		-1	=> 'Une erreur est apparue: votre article n\'a pas &eacute;t&eacute; enregistr&eacute;',
		-2	=> 'Une erreur est apparue: votre article n\'a pas &eacute;t&eacute; enregistr&eacute;; index peut &ecirc;tre endommag&eacute;',
		-3	=> 'Une erreur est apparue: votre article n\'a pas &eacute;t&eacute; enregistr&eacute;',
		-4	=> 'Une erreur est apparue: votre article n\'a pas &eacute;t&eacute; enregistr&eacute;; index peut &ecirc;tre endommag&eacute;',
		'draft'=> 'Vous &eacute;ditez actuellement <strong>draft</strong> article'
	);

	
	/* comments */
	
	$lang['admin']['entry']['commentlist'] = 
	array(
		'head'		=> "Commentaires de l\'article ", 
		'descr'		=> 'S&eacute;lectionner un commentaire &agrave; effacer',
		'sel'		=> 'Sel',
		'content'	=> 'Contenu',
		'date'		=> 'Date',
		'author'	=> 'Auteur',
		'email'		=> 'Email',
		'ip'		=> 'IP',
		'actions'	=> 'Actions',
		'act_edit'	=> 'Editer',
		'act_del'	=> 'Effacer',
		'act_del_confirm' => 'Confirmez-vous la suppression du commentaire?',
		'nocomments'	=> 'pas de commentaires pour cet article.',
		
	
	);

	$lang['admin']['entry']['commentlist']['msgs'] =
	array(
		1	=> 'Commentaire effac&eacute; avec succ&egrave;s',
		-1	=> 'Une erreur est apparue durant la suppression du commentaire',
		
	);

	$lang['admin']['entry']['commedit'] = 
	array(
		'head'		=> "Editer commentaire de l\'article", 
		'content'	=> 'Contenu',
		'date'		=> 'Date',
		'author'	=> 'Auteur',
		'www'		=> 'Site Web',
		'email'		=> 'Email',
		'ip'		=> 'IP',
		'loggedin'	=> 'Utilisateur enregistr&eacute;',
		'submit'	=> 'Enregistrer'
		
	
	);

	$lang['admin']['entry']['commedit']['msgs'] =
	array(
		1	=> 'Commentaire a &eacute;t&eacute; modifi&eacute;',
		-1	=> 'Une erreur est apparue durant l\'&eacute;dition du commentaire',
	);
	
	/* delete action */
	
	$lang['admin']['entry']['delete'] = 
	array(
		'head'		=> 'Supprimer article', 
		'descr'		=> 'Vous allez supprimer l\'article suivant:',
		'preview'	=> 'Aper&ccedil;u',
		'confirm'	=> 'Confirmez-vous l\'action?',
		'fset'		=> 'Effacer',
		'ok'		=> 'Oui, effacer cet article',
		'cancel'	=> 'Non, retour au panel',
		'err'		=> 'L\'entr&eacute;e sp&eacute;cifi&eacute;e n\'existe pas',
	
	);
	
	/* cat�gories gestionnaire */
	
	$lang['admin']['entry']['cats'] =
	array(
		'head'		=> 'Editer cat&eacute;gories',
		'descr'		=> '<p>Utilisez le formulaire pour ajouter et &eacute;diter vos cat&eacute;gories. </p><p>Chaque item doit &ecirc;tre au format "nom cat&eacute;gorie: <em>num&eacute;ro de cat&eacute;gorie</em>". Placez des tirets devant les articles pour cr&eacute;er des hi&eacute;rarchies.</p>
		
	<p>Exemple:</p>
	<pre>
Accueil :1
Infos :2
--Annonces :3
--Ev&egrave;nements :4
----Misc :5
Technologie :6
	</pre>',
		'clear'		=> 'Effacer toutes les donn&eacute;es des cat&eacute;gories',
	
		'fset1'		=> 'Editeur',
		'fset2'		=> 'Appliquer modifications',
		'submit'	=> 'Enregistrer'
	);
	
	$lang['admin']['entry']['cats']['msgs'] = array(
		
		1	=> 'Cat&eacute;gories enregistr&eacute;es',
		-1	=> 'Une erreur est apparue durant l\'enregistrement des cat&eacute;gories',
		2	=> 'Cat&eacute;gories effac&eacute;es',
		-2	=> 'Une erreur est apparue durant la suppression des cat&eacute;gories',
		-3 	=> 'Le num&eacute;ro de cat&eacute;gorie doit &ecirc;tre positif (0 pas permis)'

	);
	
	
		
?>
