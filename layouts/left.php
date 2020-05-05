<aside class="main-sidebar">
    <section class="sidebar">

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <?php
        $localIP = (Yii::$app->request->getUserIP() == '127.0.0.1' || Yii::$app->request->getUserIP() == "::1");

        $items = [
            ['label' => 'General', 'options' => ['class' => 'header']],
            ['label' => 'Dashboard', 'icon' => 'fa fa-bookmark', 'url' => ['/site/index']],
            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'], 'visible' => ($localIP && YII_ENV_DEV)],
            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'], 'visible' => ($localIP && YII_ENV_DEV)],
            ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
            ['label' => 'Modulos', 'options' => ['class' => 'header']]
        ];

        $itemApp = [];

        if (isset(Yii::$app->params['modules'])) {
            foreach (Yii::$app->params['modules'] as $module) {

                if (array_key_exists('visible', $module)) {
                    $module["visible"] = eval('return ' . $module["visible"] . ';');
                } else if (array_key_exists('roles', $module)) {
                    $module["visible"] = false;
                    foreach ($module['roles'] as $role) {
                        if (Yii::$app->user->can($role)) {
                            $module["visible"] = true;
                            break;
                        }
                    }
                } else {
                    $module["visible"] = true;
                }

                if (isset($module["items"])) {
                    foreach ($module["items"] as $key => $item) {
                        $module["items"][$key]["visible"] = (!isset($item["visible"]) || eval('return ' . $item["visible"] . ';'));
                    }
                }

                $itemApp[] = $module;
            }
        }
        ?>
        <?= segic\theme\widgets\Menu::widget(['options' => ['class' => 'sidebar-menu'], 'items' => array_merge($items, $itemApp),]) ?>
    </section>
</aside>
