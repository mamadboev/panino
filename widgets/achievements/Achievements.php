<?php
namespace  app\widgets\achievements;

use yii\base\Widget;
use app\models\Achievements as Achievement;

class Achievements extends Widget
{
    public function run()
    {
        $model = Achievement::find()->all();
        return $this->render('achievements',['model'=>$model]);

    }
}