<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "nr_lock".
 *
 * Auto generated 31-07-2014 13:27
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Netresearch session module.',
	'description' => 'Provides session handler which uses caching framework.',
	'category' => 'fe',
	'author' => 'Sebastian Mendel',
	'author_company' => 'Netresearch GmbH & Co.KG',
	'author_email' => 'sebastian.mendel@netresearch.de',
	'shy' => '',
	'dependencies' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-5.99.99',
			'typo3' => '4.5.0-4.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'_md5_values_when_last_written' => 'a:10:{s:9:"build.xml";s:4:"3f95";s:9:"ChangeLog";s:4:"8da3";s:16:"ext_autoload.php";s:4:"99e3";s:17:"ext_localconf.php";s:4:"6fe2";s:10:"README.rst";s:4:"355a";s:18:"doc/ide_helper.php";s:4:"02db";s:12:"src/Lock.php";s:4:"6a79";s:24:"src/Backend/Abstract.php";s:4:"70ae";s:25:"src/Backend/Couchbase.php";s:4:"8dd7";s:21:"src/Backend/Redis.php";s:4:"75e0";}',
	'suggests' => array(
	),
);

?>
