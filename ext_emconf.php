<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "nr_session".
 *
 * Auto generated 21-08-2014 10:37
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Netresearch session module.',
	'description' => 'Provides a more secure, stable and scalable session handler which uses caching framework.',
	'category' => 'fe',
	'author' => 'Sebastian Mendel',
	'author_company' => 'Netresearch GmbH & Co.KG',
	'author_email' => 'sebastian.mendel@netresearch.de',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-5.5.99',
			'typo3' => '4.5.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'nr_cache' => '1.0.4-',
			'nr_lock' => '1.0.0-',
		),
	),
	'state' => 'stable',
	'version' => '1.0.0',
	'_md5_values_when_last_written' => 'a:7:{s:9:"build.xml";s:4:"3f95";s:9:"ChangeLog";s:4:"92a7";s:16:"ext_autoload.php";s:4:"8487";s:12:"ext_icon.gif";s:4:"a459";s:17:"ext_localconf.php";s:4:"dd7e";s:10:"README.rst";s:4:"8e77";s:15:"src/Session.php";s:4:"53f5";}',
);

?>
