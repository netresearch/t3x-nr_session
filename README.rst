Netresearch Session
===================

.. contents:: Inhaltsverzeichnis


Overview
========

Alternative session handler. Provides an interface to a more secure, faster and
scalable session data storage.

.. BEGIN ext_emconf.php

:Version live: `1.0.0 <http://urgit11.aida.de/typo3/nr_session/tree/v1.0.0>`_
:Company: Netresearch GmbH & Co.KG
:Author: | `Sebastian Mendel <~mendel.sebastian>`_

.. END ext_emconf.php

Features
========

Uses caching framework to store session data.

You can configure every caching framework backend to store session data - a
preferred one would be redis or any other memory based caching system.

Validate generated session id against session storage for uniqueness.

Every newly generated session id is checked against session data storage for its
uniqueness to ensure security and data privacy.

Adds an XCLASS for tslib_feuserauth to overwrite session storage handling.

Configuration
=============

Session storage is configured like any other caching framework configuration.
Name of the used caching configuration is 'nr_session'

TYPO3 4.6
---------

::

    $arCacheCfg = &$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations'];
    $arCacheCfg['nr_session'] = array(
        'backend'  => '\t3lib_cache_backend_RedisBackend',
        'frontend' => '\t3lib_cache_frontend_VariableFrontend',
        'options'  => array(
            'hostname'         => 'my.redis.host',
            //'port'             => 6379,
            'database'         => 0,
            //'password'         => '',
            //'compression'      => false,
            //'compressionLevel' => 1,
        ),
    );

TYPO3 4.5
---------

::

    $arCacheCfg = &$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations'];
    $arCacheCfg['nr_session'] = array(
        'backend'  => 't3lib_cache_backend_RedisBackend',
        'frontend' => 't3lib_cache_frontend_VariableFrontend',
        'options'  => array(
            'hostname'         => 'my.redis.host',
            //'port'             => 6379,
            'database'         => 0,
            //'password'         => '',
            //'compression'      => false,
            //'compressionLevel' => 1,
        ),
    );

You also need to set up your caching framework:

- http://wiki.typo3.org/Caching_framework#Enable_caching_framework_in_TYPO3_4.5_and_below
