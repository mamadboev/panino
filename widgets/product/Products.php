<?php


namespace app\widgets\product;


use app\models\Product;
use yii\base\Widget;

class Products extends Widget
{
    public function run()
    {
        $model = Product::find()->all();
        return $this->render('products',['model'=>$model]);

    }
}