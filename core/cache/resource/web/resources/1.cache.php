<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => NULL,
    'content' => '<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2>New to&nbsp;MODX?</h2>

<p>Pages on a MODX site are called <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use&nbsp;cases.</p>

<p>Building your website is done through a combination of <b>Templates</b>, <b>Template Variables</b>, <b>Chunks</b>, <b>Snippets</b> and <b>Plugins</b>. Collectively these are known as <b>Elements</b>, and can also be found in the left-hand side of the manager, in the Elements&nbsp;tab.</p>

<p><a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/customizing-content/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular&nbsp;template.</p>

<p>With <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/using-snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and&nbsp;HTML.</p>

<p>Finally, <a href="https://rtfm.modx.com/revolution/2.x/developing-in-modx/basic-development/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by&nbsp;MODX.</p>

<p>To learn more about MODX, be sure to check out the <a href="https://rtfm.modx.com/revolution/2.x/getting-started">Getting Started</a> section in the official&nbsp;documentation.</p>
',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1564389059,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Главная - BATH</title>
    <base href="[[!++site_url]]">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="assets/css/swiper.css">
    <!--<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">-->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery_v3.4.1.min.js"></script>
</head>
<body>

<header class="head-top">
    <div class="container">
        <div class="head-top__wrap">
            <div class="head-top__mode-wrap">
                <p><span>Режим работы:</span> <br>С 10:00-23:00, Вс - выходной</p>
                <p></p>
            </div>
            <div class="head-top__logo-wrap">
                <!--<img src="" alt="">-->
                <p class="head-top__title">Sant-technics</p>
                <p>Интернет-магазин с сантехникой</p>
            </div>
            <div class="head-top__adress-wrap">
                <p>Лида, Цветной бульвар, д.11,<br> офис 406</p>
            </div>
        </div>
    </div>
</header>
<header class="header-b-call">
    <div class="container">
        <div class="header-b-call__info-list">
            <div class="header-b-call__item header-b-call__item--tel">
                <p>по телефону:</p>
                <a class="header-b-call__item-link" href="tel:+300 (30) 300 30 300">+300 (30) 300 30 300</a>
            </div>
            <div class="right-border"></div>
            <div class="header-b-call__item header-b-call__item--mail">
                <p>по email:</p>
                <a class="header-b-call__item-link header-b-call__item-link--green" href="mailto:info@s-constuction.com">info@s-constuction.com</a>
            </div>
            <div class="right-border"></div>
            <div class="header-b-call__item header-b-call__item--b-call">
                <p>Заказать обратный звонок</p>
                <a class="header-b-call__item-link btn" href="#">Обратный звонок</a>
            </div>
        </div>
    </div>
</header>

<section class="menu-wrap">
    <div class="container">
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__item">
                    <a class="menu__item-link" href="/" class="menu__item-link">Главная</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="produkcziya.html" class="menu__item-link">Продукция</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="uslugi.html" class="menu__item-link">Услуги</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="otzyivyi.html" class="menu__item-link">Отзывы</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="kontaktyi.html" class="menu__item-link">Контакты</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<section class="bg-wrap">
    <div class="container">
        <div class="bg"></div>
    </div>
</section>

<section class="main-slider">
    <div class="container">
        <div class="main-slider__container swiper-container">
            <div class="main-slider __wrapper swiper-wrapper">
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/bath/oval-bath.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Ванная</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/shower/sh.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Душевая</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/toilets/sq-unitazjpg.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Туалеты</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/kran/kran-kuch.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Краны</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/rakovina/rak.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Раковины</p>
                    </a>
                </div>
            </div>
            <!-- Add Arrows -->
        </div>
        <div class="main-slider__slide-btn-next swiper-button-next"></div>
        <div class="main-slider__slide-btn-prev swiper-button-prev"></div>
    </div>
</section>

<section class="garantee-wrap">
    <div class="container">
        <div class="garantee__inner">
            <div class="garantee__text">
                <div class="garantee__text-info">Проверенные поставщики</div>
                <div class="garantee__text-desc">Мы сотрудничаем только с проверенными постащиками.
                Качество - это наша визитная карточка.
                </div>
            </div>
            <div class="garantee__text">
                <div class="garantee__text-info">Демократичные цены</div>
                <div class="garantee__text-desc">Любая система скидок и наличие цены обусловлены большим опытом
                работы нашей компании. Мы заслуживаем репутацию надежных партнеров у наших поставщиков.
                </div>
            </div>
            <div class="garantee__text">
                <div class="garantee__text-info">Гарантия качества</div>
                <div class="garantee__text-desc">Гарантией качества на всю продукцию - обязательное условие продажи.
                Мы заботимся о наших клиентах и дорожим нашей репутацией.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="quality">
    <div class="container">
        <div class="quality__info">Качественная сантехника по доступным ценам</div>
        <div class="quality__desc">
            Наш магазин специализируется на сантехнике и изделиях из....Мы предлагаем богатый ассортимент
            качественной и прочной сантехники от самых именитых фирм-производителей из разных стран мира.
            В наших каталогах Вы найдете внушительный ассортимент, среди кторого можно выделить следующие категории товаров:
            <ul class="quality__list">
                <li class="quality__item">Душевые кабины и все комплектующие для душа</li>
                <li class="quality__item">Ванны, в том числе гидромассажные, акриловые.</li>
                <li class="quality__item">Аксессуары и комплектующие для ванной комнаты и для кухни</li>
            </ul>

        </div>
    </div>
</section>

<section class="suppliers">
    <div class="container">
        <div class="suppliers__container swiper-container">
            <div class="suppliers-slider __wrapper swiper-wrapper">
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/bb.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/bd.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/v.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/g.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/g.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/d.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/ker.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="suppliers__slide-btn-next swiper-button-next"></div>-->
        <!--<div class="suppliers__slide-btn-prev swiper-button-prev"></div>-->
    </div>
</section>

<footer class="head-top">
    <div class="container">
        <div class="head-top__wrap">
            <div class="head-top__mode-wrap head-top__mode-wrap--order">
                <p><span>Режим работы:</span> <br>С 10:00-23:00, Вс - выходной</p>
                <a class="header-b-call__item-link header-b-call__item-link--green" href="mailto:info@s-constuction.com">info@s-constuction.com</a>
            </div>
            <div class="head-top__logo-wrap head-top__logo-wrap--order">
                <!--<img src="" alt="">-->
                <p class="head-top__title">Sant-technics</p>
                <p>Интернет-магазин с сантехникой</p>
            </div>
            <div class="head-top__adress-wrap">
                <p>Контакты</p>
                <p>Лида, Цветной бульвар, д.11,<br> офис 406</p>
                <a class="header-b-call__item-link header-b-call__item-link--black" href="tel:+300 (30) 300 30 300">+300 (30) 300 30 300</a>
            </div>
        </div>
    </div>
</footer>
<!--<script src="assets/js/jquery-3.4.0.min.js"></script>-->
<!--<script src="assets/js/jquery.fancybox.min.js"></script>-->
<script src="assets/js/swiper.js"></script>
<script src="assets/js/js.js"></script>

</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Главная - BATH</title>
    <base href="[[!++site_url]]">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="assets/css/swiper.css">
    <!--<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">-->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery_v3.4.1.min.js"></script>
</head>
<body>',
    '[[$header]]' => '<header class="head-top">
    <div class="container">
        <div class="head-top__wrap">
            <div class="head-top__mode-wrap">
                <p><span>Режим работы:</span> <br>С 10:00-23:00, Вс - выходной</p>
                <p></p>
            </div>
            <div class="head-top__logo-wrap">
                <!--<img src="" alt="">-->
                <p class="head-top__title">Sant-technics</p>
                <p>Интернет-магазин с сантехникой</p>
            </div>
            <div class="head-top__adress-wrap">
                <p>Лида, Цветной бульвар, д.11,<br> офис 406</p>
            </div>
        </div>
    </div>
</header>
<header class="header-b-call">
    <div class="container">
        <div class="header-b-call__info-list">
            <div class="header-b-call__item header-b-call__item--tel">
                <p>по телефону:</p>
                <a class="header-b-call__item-link" href="tel:+300 (30) 300 30 300">+300 (30) 300 30 300</a>
            </div>
            <div class="right-border"></div>
            <div class="header-b-call__item header-b-call__item--mail">
                <p>по email:</p>
                <a class="header-b-call__item-link header-b-call__item-link--green" href="mailto:info@s-constuction.com">info@s-constuction.com</a>
            </div>
            <div class="right-border"></div>
            <div class="header-b-call__item header-b-call__item--b-call">
                <p>Заказать обратный звонок</p>
                <a class="header-b-call__item-link btn" href="#">Обратный звонок</a>
            </div>
        </div>
    </div>
</header>',
    '[[$menu-wrap]]' => '<section class="menu-wrap">
    <div class="container">
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__item">
                    <a class="menu__item-link" href="/" class="menu__item-link">Главная</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="produkcziya.html" class="menu__item-link">Продукция</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="uslugi.html" class="menu__item-link">Услуги</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="otzyivyi.html" class="menu__item-link">Отзывы</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="kontaktyi.html" class="menu__item-link">Контакты</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<section class="bg-wrap">
    <div class="container">
        <div class="bg"></div>
    </div>
</section>',
    '[[$main-slider]]' => '<section class="main-slider">
    <div class="container">
        <div class="main-slider__container swiper-container">
            <div class="main-slider __wrapper swiper-wrapper">
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/bath/oval-bath.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Ванная</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/shower/sh.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Душевая</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/toilets/sq-unitazjpg.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Туалеты</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/kran/kran-kuch.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Краны</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/rakovina/rak.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Раковины</p>
                    </a>
                </div>
            </div>
            <!-- Add Arrows -->
        </div>
        <div class="main-slider__slide-btn-next swiper-button-next"></div>
        <div class="main-slider__slide-btn-prev swiper-button-prev"></div>
    </div>
</section>',
    '[[$garantee-wrap]]' => '<section class="garantee-wrap">
    <div class="container">
        <div class="garantee__inner">
            <div class="garantee__text">
                <div class="garantee__text-info">Проверенные поставщики</div>
                <div class="garantee__text-desc">Мы сотрудничаем только с проверенными постащиками.
                Качество - это наша визитная карточка.
                </div>
            </div>
            <div class="garantee__text">
                <div class="garantee__text-info">Демократичные цены</div>
                <div class="garantee__text-desc">Любая система скидок и наличие цены обусловлены большим опытом
                работы нашей компании. Мы заслуживаем репутацию надежных партнеров у наших поставщиков.
                </div>
            </div>
            <div class="garantee__text">
                <div class="garantee__text-info">Гарантия качества</div>
                <div class="garantee__text-desc">Гарантией качества на всю продукцию - обязательное условие продажи.
                Мы заботимся о наших клиентах и дорожим нашей репутацией.
                </div>
            </div>
        </div>
    </div>
</section>',
    '[[$quality]]' => '<section class="quality">
    <div class="container">
        <div class="quality__info">Качественная сантехника по доступным ценам</div>
        <div class="quality__desc">
            Наш магазин специализируется на сантехнике и изделиях из....Мы предлагаем богатый ассортимент
            качественной и прочной сантехники от самых именитых фирм-производителей из разных стран мира.
            В наших каталогах Вы найдете внушительный ассортимент, среди кторого можно выделить следующие категории товаров:
            <ul class="quality__list">
                <li class="quality__item">Душевые кабины и все комплектующие для душа</li>
                <li class="quality__item">Ванны, в том числе гидромассажные, акриловые.</li>
                <li class="quality__item">Аксессуары и комплектующие для ванной комнаты и для кухни</li>
            </ul>

        </div>
    </div>
</section>',
    '[[$suppliers]]' => '<section class="suppliers">
    <div class="container">
        <div class="suppliers__container swiper-container">
            <div class="suppliers-slider __wrapper swiper-wrapper">
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/bb.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/bd.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/v.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/g.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/g.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/d.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/ker.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="suppliers__slide-btn-next swiper-button-next"></div>-->
        <!--<div class="suppliers__slide-btn-prev swiper-button-prev"></div>-->
    </div>
</section>',
    '[[$footer]]' => '<footer class="head-top">
    <div class="container">
        <div class="head-top__wrap">
            <div class="head-top__mode-wrap head-top__mode-wrap--order">
                <p><span>Режим работы:</span> <br>С 10:00-23:00, Вс - выходной</p>
                <a class="header-b-call__item-link header-b-call__item-link--green" href="mailto:info@s-constuction.com">info@s-constuction.com</a>
            </div>
            <div class="head-top__logo-wrap head-top__logo-wrap--order">
                <!--<img src="" alt="">-->
                <p class="head-top__title">Sant-technics</p>
                <p>Интернет-магазин с сантехникой</p>
            </div>
            <div class="head-top__adress-wrap">
                <p>Контакты</p>
                <p>Лида, Цветной бульвар, д.11,<br> офис 406</p>
                <a class="header-b-call__item-link header-b-call__item-link--black" href="tel:+300 (30) 300 30 300">+300 (30) 300 30 300</a>
            </div>
        </div>
    </div>
</footer>
<!--<script src="assets/js/jquery-3.4.0.min.js"></script>-->
<!--<script src="assets/js/jquery.fancybox.min.js"></script>-->
<script src="assets/js/swiper.js"></script>
<script src="assets/js/js.js"></script>

</body>
</html>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>[[*pagetitle]] - [[++site_name]]</title>
    <base href="[[!++site_url]]">
    <meta charset="[[++modx_charset]]">
    <meta name="description" content="[[*description]]">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="assets/css/swiper.css">
    <!--<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">-->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery_v3.4.1.min.js"></script>
</head>
<body>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>[[*pagetitle]] - [[++site_name]]</title>
    <base href="[[!++site_url]]">
    <meta charset="[[++modx_charset]]">
    <meta name="description" content="[[*description]]">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="assets/css/swiper.css">
    <!--<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">-->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery_v3.4.1.min.js"></script>
</head>
<body>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<header class="head-top">
    <div class="container">
        <div class="head-top__wrap">
            <div class="head-top__mode-wrap">
                <p><span>Режим работы:</span> <br>С 10:00-23:00, Вс - выходной</p>
                <p></p>
            </div>
            <div class="head-top__logo-wrap">
                <!--<img src="" alt="">-->
                <p class="head-top__title">Sant-technics</p>
                <p>Интернет-магазин с сантехникой</p>
            </div>
            <div class="head-top__adress-wrap">
                <p>Лида, Цветной бульвар, д.11,<br> офис 406</p>
            </div>
        </div>
    </div>
</header>
<header class="header-b-call">
    <div class="container">
        <div class="header-b-call__info-list">
            <div class="header-b-call__item header-b-call__item--tel">
                <p>по телефону:</p>
                <a class="header-b-call__item-link" href="tel:+300 (30) 300 30 300">+300 (30) 300 30 300</a>
            </div>
            <div class="right-border"></div>
            <div class="header-b-call__item header-b-call__item--mail">
                <p>по email:</p>
                <a class="header-b-call__item-link header-b-call__item-link--green" href="mailto:info@s-constuction.com">info@s-constuction.com</a>
            </div>
            <div class="right-border"></div>
            <div class="header-b-call__item header-b-call__item--b-call">
                <p>Заказать обратный звонок</p>
                <a class="header-b-call__item-link btn" href="#">Обратный звонок</a>
            </div>
        </div>
    </div>
</header>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<header class="head-top">
    <div class="container">
        <div class="head-top__wrap">
            <div class="head-top__mode-wrap">
                <p><span>Режим работы:</span> <br>С 10:00-23:00, Вс - выходной</p>
                <p></p>
            </div>
            <div class="head-top__logo-wrap">
                <!--<img src="" alt="">-->
                <p class="head-top__title">Sant-technics</p>
                <p>Интернет-магазин с сантехникой</p>
            </div>
            <div class="head-top__adress-wrap">
                <p>Лида, Цветной бульвар, д.11,<br> офис 406</p>
            </div>
        </div>
    </div>
</header>
<header class="header-b-call">
    <div class="container">
        <div class="header-b-call__info-list">
            <div class="header-b-call__item header-b-call__item--tel">
                <p>по телефону:</p>
                <a class="header-b-call__item-link" href="tel:+300 (30) 300 30 300">+300 (30) 300 30 300</a>
            </div>
            <div class="right-border"></div>
            <div class="header-b-call__item header-b-call__item--mail">
                <p>по email:</p>
                <a class="header-b-call__item-link header-b-call__item-link--green" href="mailto:info@s-constuction.com">info@s-constuction.com</a>
            </div>
            <div class="right-border"></div>
            <div class="header-b-call__item header-b-call__item--b-call">
                <p>Заказать обратный звонок</p>
                <a class="header-b-call__item-link btn" href="#">Обратный звонок</a>
            </div>
        </div>
    </div>
</header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'menu-wrap' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'menu-wrap',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section class="menu-wrap">
    <div class="container">
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__item">
                    <a class="menu__item-link" href="/" class="menu__item-link">Главная</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="[[~5]]" class="menu__item-link">Продукция</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="[[~6]]" class="menu__item-link">Услуги</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="[[~7]]" class="menu__item-link">Отзывы</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="[[~8]]" class="menu__item-link">Контакты</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<section class="bg-wrap">
    <div class="container">
        <div class="bg"></div>
    </div>
</section>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<section class="menu-wrap">
    <div class="container">
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__item">
                    <a class="menu__item-link" href="/" class="menu__item-link">Главная</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="[[~5]]" class="menu__item-link">Продукция</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="[[~6]]" class="menu__item-link">Услуги</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="[[~7]]" class="menu__item-link">Отзывы</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item-link" href="[[~8]]" class="menu__item-link">Контакты</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<section class="bg-wrap">
    <div class="container">
        <div class="bg"></div>
    </div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'main-slider' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'main-slider',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section class="main-slider">
    <div class="container">
        <div class="main-slider__container swiper-container">
            <div class="main-slider __wrapper swiper-wrapper">
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/bath/oval-bath.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Ванная</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/shower/sh.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Душевая</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/toilets/sq-unitazjpg.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Туалеты</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/kran/kran-kuch.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Краны</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/rakovina/rak.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Раковины</p>
                    </a>
                </div>
            </div>
            <!-- Add Arrows -->
        </div>
        <div class="main-slider__slide-btn-next swiper-button-next"></div>
        <div class="main-slider__slide-btn-prev swiper-button-prev"></div>
    </div>
</section>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<section class="main-slider">
    <div class="container">
        <div class="main-slider__container swiper-container">
            <div class="main-slider __wrapper swiper-wrapper">
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/bath/oval-bath.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Ванная</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/shower/sh.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Душевая</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/toilets/sq-unitazjpg.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Туалеты</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/kran/kran-kuch.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Краны</p>
                    </a>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__slide-img-wrap">
                        <img src="assets/img/categories/rakovina/rak.jpg" alt="">
                    </div>
                    <a class="main-slider__slide-link" href="#" class="main-slider__desc">
                        <p>Раковины</p>
                    </a>
                </div>
            </div>
            <!-- Add Arrows -->
        </div>
        <div class="main-slider__slide-btn-next swiper-button-next"></div>
        <div class="main-slider__slide-btn-prev swiper-button-prev"></div>
    </div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'garantee-wrap' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'garantee-wrap',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section class="garantee-wrap">
    <div class="container">
        <div class="garantee__inner">
            <div class="garantee__text">
                <div class="garantee__text-info">Проверенные поставщики</div>
                <div class="garantee__text-desc">Мы сотрудничаем только с проверенными постащиками.
                Качество - это наша визитная карточка.
                </div>
            </div>
            <div class="garantee__text">
                <div class="garantee__text-info">Демократичные цены</div>
                <div class="garantee__text-desc">Любая система скидок и наличие цены обусловлены большим опытом
                работы нашей компании. Мы заслуживаем репутацию надежных партнеров у наших поставщиков.
                </div>
            </div>
            <div class="garantee__text">
                <div class="garantee__text-info">Гарантия качества</div>
                <div class="garantee__text-desc">Гарантией качества на всю продукцию - обязательное условие продажи.
                Мы заботимся о наших клиентах и дорожим нашей репутацией.
                </div>
            </div>
        </div>
    </div>
</section>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<section class="garantee-wrap">
    <div class="container">
        <div class="garantee__inner">
            <div class="garantee__text">
                <div class="garantee__text-info">Проверенные поставщики</div>
                <div class="garantee__text-desc">Мы сотрудничаем только с проверенными постащиками.
                Качество - это наша визитная карточка.
                </div>
            </div>
            <div class="garantee__text">
                <div class="garantee__text-info">Демократичные цены</div>
                <div class="garantee__text-desc">Любая система скидок и наличие цены обусловлены большим опытом
                работы нашей компании. Мы заслуживаем репутацию надежных партнеров у наших поставщиков.
                </div>
            </div>
            <div class="garantee__text">
                <div class="garantee__text-info">Гарантия качества</div>
                <div class="garantee__text-desc">Гарантией качества на всю продукцию - обязательное условие продажи.
                Мы заботимся о наших клиентах и дорожим нашей репутацией.
                </div>
            </div>
        </div>
    </div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'quality' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'quality',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section class="quality">
    <div class="container">
        <div class="quality__info">Качественная сантехника по доступным ценам</div>
        <div class="quality__desc">
            Наш магазин специализируется на сантехнике и изделиях из....Мы предлагаем богатый ассортимент
            качественной и прочной сантехники от самых именитых фирм-производителей из разных стран мира.
            В наших каталогах Вы найдете внушительный ассортимент, среди кторого можно выделить следующие категории товаров:
            <ul class="quality__list">
                <li class="quality__item">Душевые кабины и все комплектующие для душа</li>
                <li class="quality__item">Ванны, в том числе гидромассажные, акриловые.</li>
                <li class="quality__item">Аксессуары и комплектующие для ванной комнаты и для кухни</li>
            </ul>

        </div>
    </div>
</section>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<section class="quality">
    <div class="container">
        <div class="quality__info">Качественная сантехника по доступным ценам</div>
        <div class="quality__desc">
            Наш магазин специализируется на сантехнике и изделиях из....Мы предлагаем богатый ассортимент
            качественной и прочной сантехники от самых именитых фирм-производителей из разных стран мира.
            В наших каталогах Вы найдете внушительный ассортимент, среди кторого можно выделить следующие категории товаров:
            <ul class="quality__list">
                <li class="quality__item">Душевые кабины и все комплектующие для душа</li>
                <li class="quality__item">Ванны, в том числе гидромассажные, акриловые.</li>
                <li class="quality__item">Аксессуары и комплектующие для ванной комнаты и для кухни</li>
            </ul>

        </div>
    </div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'suppliers' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'suppliers',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section class="suppliers">
    <div class="container">
        <div class="suppliers__container swiper-container">
            <div class="suppliers-slider __wrapper swiper-wrapper">
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/bb.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/bd.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/v.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/g.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/g.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/d.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/ker.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="suppliers__slide-btn-next swiper-button-next"></div>-->
        <!--<div class="suppliers__slide-btn-prev swiper-button-prev"></div>-->
    </div>
</section>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<section class="suppliers">
    <div class="container">
        <div class="suppliers__container swiper-container">
            <div class="suppliers-slider __wrapper swiper-wrapper">
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/bb.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/bd.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/v.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/g.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/g.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/d.png" alt="">
                    </div>
                </div>
                <div class="suppliers-slider__slide swiper-slide">
                    <div class="suppliers-slider__slide-img-wrap">
                        <img src="assets/img/categories/icons/ker.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="suppliers__slide-btn-next swiper-button-next"></div>-->
        <!--<div class="suppliers__slide-btn-prev swiper-button-prev"></div>-->
    </div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer class="head-top">
    <div class="container">
        <div class="head-top__wrap">
            <div class="head-top__mode-wrap head-top__mode-wrap--order">
                <p><span>Режим работы:</span> <br>С 10:00-23:00, Вс - выходной</p>
                <a class="header-b-call__item-link header-b-call__item-link--green" href="mailto:info@s-constuction.com">info@s-constuction.com</a>
            </div>
            <div class="head-top__logo-wrap head-top__logo-wrap--order">
                <!--<img src="" alt="">-->
                <p class="head-top__title">Sant-technics</p>
                <p>Интернет-магазин с сантехникой</p>
            </div>
            <div class="head-top__adress-wrap">
                <p>Контакты</p>
                <p>Лида, Цветной бульвар, д.11,<br> офис 406</p>
                <a class="header-b-call__item-link header-b-call__item-link--black" href="tel:+300 (30) 300 30 300">+300 (30) 300 30 300</a>
            </div>
        </div>
    </div>
</footer>
<!--<script src="assets/js/jquery-3.4.0.min.js"></script>-->
<!--<script src="assets/js/jquery.fancybox.min.js"></script>-->
<script src="assets/js/swiper.js"></script>
<script src="assets/js/js.js"></script>

</body>
</html>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<footer class="head-top">
    <div class="container">
        <div class="head-top__wrap">
            <div class="head-top__mode-wrap head-top__mode-wrap--order">
                <p><span>Режим работы:</span> <br>С 10:00-23:00, Вс - выходной</p>
                <a class="header-b-call__item-link header-b-call__item-link--green" href="mailto:info@s-constuction.com">info@s-constuction.com</a>
            </div>
            <div class="head-top__logo-wrap head-top__logo-wrap--order">
                <!--<img src="" alt="">-->
                <p class="head-top__title">Sant-technics</p>
                <p>Интернет-магазин с сантехникой</p>
            </div>
            <div class="head-top__adress-wrap">
                <p>Контакты</p>
                <p>Лида, Цветной бульвар, д.11,<br> офис 406</p>
                <a class="header-b-call__item-link header-b-call__item-link--black" href="tel:+300 (30) 300 30 300">+300 (30) 300 30 300</a>
            </div>
        </div>
    </div>
</footer>
<!--<script src="assets/js/jquery-3.4.0.min.js"></script>-->
<!--<script src="assets/js/jquery.fancybox.min.js"></script>-->
<script src="assets/js/swiper.js"></script>
<script src="assets/js/js.js"></script>

</body>
</html>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);