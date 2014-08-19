<?php
/**
 * Extension config script
 *
 * PHP version 5
 *
 * @category   Netresearch
 * @package    Session
 * @subpackage Configuration
 * @author     Sebastian Mendel <sebastian.mendel@netresearch.de>
 * @license    http://www.aida.de AIDA Copyright
 * @link       http://www.aida.de
 */

defined('TYPO3_MODE') or die('Access denied.');

$arCacheCfg = &$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations'];

if (! empty($arCacheCfg['nr_session'])) {
    if (empty($arCacheCfg['nr_session']['frontend'])) {
        $arCacheCfg['nr_session']['frontend']
            = '\t3lib_cache_frontend_VariableFrontend';
    }

    $arCacheCfg['nr_session']['options']['defaultLifetime']
        = $TYPO3_CONF_VARS['FE']['sessionDataLifetime'];

    // register XCLASS to overwrite session storage handling
    $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['tslib/class.tslib_feuserauth.php']
        = t3lib_extMgm::extPath('nr_session') . 'src/Session.php';

    require_once t3lib_extMgm::extPath('nr_session') . 'src/Session.php';
    class ux_tslib_feUserAuth extends \Netresearch\Session\Session {}
}

?>
