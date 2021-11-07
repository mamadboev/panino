<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'About Us';
$interval = Yii::$app->params['experience'];
?>
<!-- Page Content -->
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=Yii::t('app','About Us');?></h1>

                <span><?=Yii::t('app',"We have over {$interval->format('%y years %m months')} years of experience");?></span>
            </div>
        </div>
    </div>
</div>

<div class="more-info about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <h2><?=Yii::t('app',"Get to know about");?> <em><?=Yii::t('app','our company');?></em></h2>
                              <?=Yii::t('app',"<p>Our company want to create own brand.
                                    <br><br>You can know about our company in this page. This page give to you many information .</p>");?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="/assets/images/slide_panino.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2><?=Yii::t('app','What they say ');?><em><?=Yii::t('app','about us');?></em></h2>
                    <span><?=Yii::t('app','The achievements we have made');?></span>
                </div>
            </div>
            <?php echo \app\widgets\achievements\Achievements::widget();?>
        </div>
    </div>
</div>
