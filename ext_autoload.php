<?php
declare(encoding = 'UTF-8');

/**
 * NR Session autoloader configuration.
 *
 * PHP version 5
 *
 * @category   Netresearch
 * @package    Session
 * @subpackage Configuration
 * @author     Andre Hähnel <andre.haehnel@netresearch.de>
 * @license    http://www.aida.de AIDA Copyright
 * @link       http://www.aida.de
 */

defined('TYPO3_MODE') or die('Access denied.');

$strPath = t3lib_extMgm::extPath('nr_session');

return array(
    'netresearch\session\session'
        => $strPath . 'src/Session.php',
);
?>
