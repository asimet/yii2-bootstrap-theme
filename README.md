Theme USACH
===========

Version
-------
4.1

Install Composer (composer.json)
--------------------------------

    {
        "repositories": [
            [...]
            {
                "type": "vcs",
                "url": ""
            }
        ],
        "require": {
            [...]
            "segic/usach-theme-yii2": "dev-master"
        }
    }

Configuración WebApp (web.php)
------------------------------

    'bootstrap' => ['log', '\\segic\\theme\\Bootstrap']


