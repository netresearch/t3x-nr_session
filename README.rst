Netresearch Session
===================

.. contents:: Inhaltsverzeichnis


Overview
========

Adds an XCLASS for tslib_feuserauth to overwrite session storage handling.

.. BEGIN ext_emconf.php

:Version live: `1.0.3 <http://urgit11.aida.de/typo3/nr_cache/tree/v1.0.3>`_
:Company: Netresearch GmbH & Co.KG
:Author: | `Sebastian Mendel <~mendel.sebastian>`_

.. END ext_emconf.php

Configuration
=============

Session storage is configured like any other caching configuration.
Name of the used caching configuration is 'nr_session'::

 $arCacheCfg = &$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations'];
 $arCacheCfg['nr_session'] = $arCacheCfg['default'];
 $arCacheCfg['nr_session']['frontend'] = '\t3lib_cache_frontend_StringFrontend';

