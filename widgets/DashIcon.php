<?php

namespace segic\theme\widgets;

use \yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class DashIcon extends Widget {

    public $visible = true; // TODO : integrated ?
    private $colors = ['red', 'yellow', 'aqua', 'blue', 'light-blue', 'green', 'navy', 'teal', 'olive', 'lime', 'orange', 'fuchsia', 'purple', 'maroon', 'black'];
    public $color = 1;
    public $url = "#";
    public $label = "icon";
    public $details = "";
    public $icon = "fa-envira";
    public $items = [];
    public $subItemSeparator = "<br/>";

    public function run() {

        if ($this->visible) {

            echo Html::beginTag('a', ['href' => Url::to($this->url)]);
            echo Html::beginTag('div', ['class' => 'col-md-3 col-sm-6 col-xs-12']);
            echo Html::beginTag('div', ['class' => 'info-box']);

            echo Html::beginTag('span', ['class' => 'info-box-icon bg-' . $this->colors[$this->color]]);
            echo '<i class="' . $this->icon . '"></i>';
            echo Html::endTag('span');

            echo '<div class="info-box-content">';
            echo '<span class="info-box-text">' . $this->label . '</span>';

            if (!empty($this->items)) {
                $htmlOutItem = '<span class="info-box-number">';
                $itemList = [];

                foreach ($this->items as $key => $item) {
                    if (!isset($item["visible"]) || eval('return ' . $item["visible"] . ';')) {
                        $itemList [] = Html::a($item['label'], Url::to($item['url']));
                    }
                }

                $htmlOutItem .= implode($this->subItemSeparator, $itemList);
                $htmlOutItem .= '</span>';

                echo $htmlOutItem;
            }

            echo ' </div>';
            echo Html::endTag('div');
            echo Html::endTag('div');
            echo Html::endTag('a');
        }
    }

}
