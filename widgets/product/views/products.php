<?php
/* @var $model \app\models\Product */
$info ='info_'.substr(Yii::$app->language,0,2);
?>

    <?php foreach ($model  as $item):?>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <div class="yogo_three_box" ">
                <figure><img style="width: 400px; height: 250px" src="/images/<?=$item->picture;?>" alt="#" /></figure>
                <h3><?=$item->name;?></h3>

            </div>
        </div>
    <?php endforeach;?>
