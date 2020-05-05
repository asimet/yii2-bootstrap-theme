<?php

namespace segic\theme;

use yii\base\BootstrapInterface;

/**
 * Bootstrap class registers module and user application component. It also creates some url rules which will be applied
 * when UrlManager.enablePrettyUrl is enabled.
 *
 */
class Bootstrap implements BootstrapInterface {

    /** @inheritdoc */
    public function bootstrap($app) {

        $views = $app->get('view');
        $pathMap = [];

        if (isset($views->theme) && isset($views->theme->pathMap) && is_array($views->theme->pathMap)) {
            $pathMap = $views->theme->pathMap;
        }

        $pathMap['@app/views/layouts'] = '@segic/theme/layouts';

        $app->set('view', [
            'class' => 'yii\web\View',
            'theme' => [
                'pathMap' => $pathMap
            ]
        ]);
    }

}
