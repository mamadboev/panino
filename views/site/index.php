<?php
Yii::$app->language = Yii::$app->request->get('language') ?? Yii::$app->language;

$url = Yii::$app->homeUrl;
/**@var $model \app\models\Message */

?>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>flexed</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="<?=$url;?>images/loading.gif" alt="" /></div>
</div>

<div class="wrapper">
    <!-- end loader -->

    <div id="content">
        <!-- header -->
        <div>
            <!-- header inner -->
            <div class="head-top">
                <div class="container">
                    <div class="row" >
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="email">
                                <a href="#"><img src="<?=$url;?>images/mail_icon.png" /> <?=Yii::t('app','Email');?>
                                    : <a  href="mailto:<?=Yii::$app->params['email_company'];?>"><?=Yii::$app->params['email_company'];?></a></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4"">
                            <div class="logo">
                                <a href="#"><img src="<?=$url;?>images/img_1.png" /></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="contact_nu">
                                <a href="#"> <img src="<?=$url;?>images/phone_icon.png" /> <?=Yii::t('app','Contact');
                                ?> : <a href="tel:<?=Yii::$app->params['phone_number_1'];?>"><?=Yii::$app->params['phone_number_1'];?></a></a>
                                <br> &emsp;&emsp;&emsp;&emsp;<?=Yii::$app->params['work_time_'.substr(Yii::$app->language,0,2)];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php

        ?>
            <div class="bg">
                <div class="container">
                    <nav class="navigation navbar-expand-md  navbar-dark ">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarsExample04">

                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><?= Yii::t('app',"Home");?> <span class="sr-only">
                                    (current)
                                    </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about"><?=Yii::t('app','About');?> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#products"><?=Yii::t('app','Products');?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#online"><?=Yii::t('app','Great choice');?></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#contact"><?=Yii::t('app','Contact us');?></a>
                                </li>
                            </ul>
                            <div id="lang">
                                <?php

                                $languageItem = new cetver\LanguageSelector\items\DropDownLanguageItem([
                                    'languages' => [
                                        'en-US' => '<span class="flag-icon flag-icon-us"></span> English',
                                        'ru-RU' => '<span class="flag-icon flag-icon-ru"></span> Russian',
                                        'uz-UZ' => '<span class="flag-icon flag-icon-de"></span> Uzbek',
                                    ],
                                    'options' => ['encode' => false],
                                ]);
                                $languageItem = $languageItem->toArray();
                                $languageDropdownItems = \yii\helpers\ArrayHelper::remove($languageItem, 'items');
                                echo \yii\bootstrap\ButtonDropdown::widget([
                                    'label' => $languageItem['label'],
                                    'encodeLabel' => false,
                                    'options' => ['class' => 'btn-default'],
                                    'dropdown' => [
                                        'items' => $languageDropdownItems
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- end header inner -->
        </div>
        <!-- end header -->
        <!-- start slider section -->
        <div class="slider_section banner_main">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide" src="<?=$url;?>images/panino_blok.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="<?=$url;?>images/slivochnoy_utro_min.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="<?=$url;?>images/chudo_pechka_red.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="<?=$url;?>images/panino.jpg" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"><?=Yii::t('app','Previous');?></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"><?=Yii::t('app','Next');?></span>
                </a>
            </div>
        </div>
        <!-- end slider section -->

        <!-- six_box-->
        <div id="about" class="about top_layer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pppp">
                        <div class="about_box">
                            <div class="about_box_text">
                                <div class="title">
                                    <h2><?=Yii::t('app','About us');?></strong></h2>
                                </div>
                                <p><?=Yii::t('app','You can read about us somethig here.');?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 pppp">

                        <div class="about_box_img">
                            <figure><img src="<?=$url;?>images/slide_panino.jpg" alt="#" /></figure>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end six_box-->

        <!-- We Do Yogas -->
        <div id="products" class="weyoga">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2><?=Yii::t('app','Our');?> <strong class="black"><?=Yii::t('app','Products');
                            ?></strong></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php echo \app\widgets\product\Products::widget();?>
                </div>
            </div>
        </div>
        <!-- end We Do Yogas -->

        <!-- yoga online -->
        <div id="online" class="yoga">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2><?=Yii::t('app','Great');?><strong class="black"> <?=Yii::t('app','choice');
                            ?></strong></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="yoga_box">
                            <video width="100%"  controls>
                                <source src="/assets/videos/panino.mp4" type="video/mp4">
                                <source src="mov_bbb.ogg" type="video/ogg">
                                <?=Yii::t('app',' Your browser does not support HTML video.');?>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end yoga online -->

        <!-- footer -->
        <div id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2><?=Yii::t('app','Contact us');?></strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding">

                    <form class="main_form" id="contactForm" name="sentMessage">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" id="name" placeholder="<?=Yii::t('app','Name');?>"
                                       type="text"
                                       required="required" data-validation-required-message=<?=Yii::t('app',"Iltimos ismingizni kiriting");?> >
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" id="email" placeholder="<?=Yii::t('app','Email');?>"
                                       type="text"  required="required" data-validation-required-message=<?=Yii::t('app',"Iltimos email addresingizni kiriting");?>>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" id="phone" placeholder="<?=Yii::t('app','Phone');?>"
                                       type="text"  required="required" data-validation-required-message=<?=Yii::t('app',"Iltimos telefon raqamingizni kiriting");?> >
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="form-control" id="message" placeholder="<?=Yii::t('app','Message');?>"
                                          type="text" required="required" data-validation-required-message=<?=Yii::t('app',"Iltimos xabar bo'sh bo'lmasin");?>></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div id="success"></div>
                                <button class="send"  id="sendMessageButton"><?=Yii::t('app','Send');?></button>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <ul class="mail-icon">
                                    <li><img src="<?=$url;?>images/phone_icon.png" />  <a style="color: whitesmoke" href="tel:<?=Yii::$app->params['phone_number_1'];?>"><?=Yii::$app->params['phone_number_1'];?></a></li>
                                    <li><img src="<?=$url;?>images/mail_icon.png" /><a style="color: whitesmoke" href="mailto:<?=Yii::$app->params['email_company'];?>"><?=Yii::$app->params['email_company'];?></a></li>

                                </ul>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <ul class="social_icon">
                                    <li> <a href="https://www.facebook.com/Samara-Yanaf-Foods-104204434998628"><i class="fa fa-facebook-f"></i></a></li>
                                    <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padddd">
                    <div class="map_section">
                        <div id="map">
                            <!-- How to change your own map point
                                1. Go to Google Maps
                                2. Click on your location point
                                3. Click "Share" and choose "Embed map" tab
                                4. Copy only URL and paste it within the src="" field below
                            -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.783167222548!2d69.16065581499491!3d41.37879547926489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8fbf291737bd%3A0xb3c66432eaabd163!2sSamara%20Yanaf%20Foods%20llc!5e0!3m2!1sen!2s!4v1629715906391!5m2!1sen!2s" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<footer>
    <div class="footer">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <p>© 2016 <?=Yii::$app->params['name'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
</div>
</div>
<div class="overlay"></div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>

</body>
</html>