<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span><i class="fa fa-angle-down"></i> <?= substr(Yii::$app->language, 0, 2) ;?></span>
    </a>
    <ul class="dropdown-menu nav-language-menu">
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li class="language-list">
                    <a href="#" data-language="uz-UZ" style=".<?= $lang['uz-class'] ?>." >
                        UZ
                    </a>
                    <a href="#" data-language="ru-RU" style=".<?= $lang['ru-class'] ?>." >
                        RU
                    </a>
                    <a href="#" data-language="en-US" style=".<?= $lang['en-class'] ?>.">
                        EN
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>