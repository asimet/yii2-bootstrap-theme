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
                "url": "http://composer:2ZJ3axPvqU5Pp2N2pa89@gitlab.segic.cl/segic/usach-theme-yii2.git"
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


