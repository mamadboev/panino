<?php
$interval = Yii::$app->params['experience'];
?>
<!-- Page Content -->
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=Yii::t('app','Our Products');?></h1>

                <span><?=Yii::t('app',"We have over {$interval->format('%y years %m months')} years of experience");?></span>
            </div>
        </div>
    </div>
</div>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2><?=Yii::t('app','Our');?> <em><?=Yii::t('app','products');?></em></h2>
                    <span><?=Yii::t('app','Our products are definitely for you');?></span>
                </div>
            </div>
            <?php echo \app\widgets\product\Products::widget([])?>
        </div>
    </div>
</div>
