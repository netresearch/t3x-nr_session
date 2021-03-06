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
 * @author     Sebastian Mendel <sebastian.mendel@netresearch.de>
 * @license    AGPL http://www.netresearch.de/
 * @link       http://www.netresearch.de/
 */

defined('TYPO3_MODE') or die('Access denied.');

$strPath = t3lib_extMgm::extPath('nr_session');

return array(
    'netresearch\session\session'
        => $strPath . 'src/Session.php',
);
?>
