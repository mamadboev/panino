<?php
 /**
 * Created by Sublime Text.
 * User: Admin@_2
 * Date: 06.04.18
 * Time: 10:23
 */

namespace app\widgets\language;

use Yii;
use yii\base\Widget;

class LanguageWidget extends Widget
{
    public $style = "cursor: default;background-color: #deefde;";

    public function init()
    {
        parent::init();        
    }

    public function run()
    {
        switch (Yii::$app->language) {
            case 'ru-RU':
                $lang['ru-class'] = $this->style;
                $lang['uz-class'] = '';
                $lang['en-class'] = '';
                break;
            case 'uz-UZ':
                $lang['ru-class'] = '';
                $lang['uz-class'] = $this->style;
                $lang['en-class'] = '';
                break;
            case 'en-US':
                $lang['ru-class'] = '';
                $lang['uz-class'] = '';
                $lang['en-class'] = $this->style;
                break;
            default:
                $lang = [
                'ru-class' => $this->style,
                'en-class' => '',
                'uz-class' => ''
            ];
            break;
        }
        //LanguageWidgetAsset::register($this->getView()); //TODO delete
        return $this->render('language', ['lang' => $lang]);
        //return Html::encode($this->message); //TODO delete
    }
}
?>