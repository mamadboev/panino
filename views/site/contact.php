<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Contact';
?>
<!-- Page Content -->
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=Yii::t('app','Contact Us');?></h1>
                <span><?=Yii::t('app',"Contact us now and start collaborating!")?></span>
            </div>
        </div>
    </div>
</div>

<div class="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-phone"></i>
                    <h4><?=Yii::t('app','Phone');?></h4>
                    <p><?=Yii::t('app','Give us a call. Get the information you need!');?></p>
                    <a href="tel:<?=Yii::$app->params['phone_number_1'];?>"><?=Yii::$app->params['phone_number_1'];?></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-envelope"></i>
                    <h4><?=Yii::t('app','Email');?></h4>
                    <p><?=Yii::t('app','Write to our e-mail. We will send you a reply letter as soon as possible');?></p>
                    <a href="mailto:<?=Yii::$app->params['email_company'];?>"><?=Yii::$app->params['email_company'];?></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-map-marker"></i>
                    <h4><?=Yii::t('app','Location');?></h4>
                    <p><?=Yii::$app->params['location_name_'.substr(Yii::$app->language,0,2)];?></p>
                    <a href="https://goo.gl/maps/xqjtLQ3mSkW3JmLi8"><?=Yii::t('app','View on Google Maps');?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="map">
    <!-- How to change your own map point
        1. Go to Google Maps
        2. Click on your location point
        3. Click "Share" and choose "Embed map" tab
        4. Copy only URL and paste it within the src="" field below
    -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.783167222548!2d69.16065581499491!3d41.37879547926489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8fbf291737bd%3A0xb3c66432eaabd163!2sSamara%20Yanaf%20Foods%20llc!5e0!3m2!1sen!2s!4v1629715906391!5m2!1sen!2s" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="partners contact-partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-partners owl-carousel">
                    <div class="partner-item">
                        <img src="/assets/images/client-01.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
