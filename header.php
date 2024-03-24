<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package potolkiGeometry
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>	
  <meta charset="UTF-8" />
  <meta name="description" content="Лучшие в своем деле!!" />
  <title>Геометрия | Натяжные потолки</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://potolki-geometry.ru/favicon.ico" type="image/x-icon">
  <meta name="yandex-verification" content="0b09f37faae4ca9e" />
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(69852769, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/69852769" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NHPJW4V');</script>
<!-- End Google Tag Manager -->

<?php wp_head(); ?>
</head>

<body class="page wrapper">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHPJW4V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <!-- <header class="header">
    <div class="header__top">
      <div class="header__container">
          <a class="header__tel" onclick="ym(88656003, 'reachGoal', 'tel'); return true;" href="tel:+79532109127"><?php the_field('tel-1') ?></a>
          <a class="header__tel" onclick="ym(88656003, 'reachGoal', 'tel'); return true;" href="tel:+79532109127"><?php the_field('tel-2') ?></a>
          <a class="header__whatsapp" id="header__whatsapp" onclick="ym(88656003, 'reachGoal', 'wa-1'); return true;" href="whatsapp://send?phone=79532109127">
          <svg>
            <use xlink:href="<? echo get_template_directory_uri();?>/img/symbols.svg#svg-whatsapp"></use>
          </svg><span><?php the_field('whatsapp') ?></span></a><a class="header__inst" href="https://www.instagram.com/geometry_nhk/">
          <svg>
            <use xlink:href="<? echo get_template_directory_uri();?>/img/symbols.svg#svg-inst"></use>
          </svg><span><?php the_field('inst') ?></span></a>
		<a class="header__inst" href="https://t.me/geometry_nhk">
          
    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M21 5L2 12.5L9 13.5M21 5L18.5 20L9 13.5M21 5L9 13.5M9 13.5V19L12.2488 15.7229" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span>telegram</span></a>
          <a class="header__inst" href="https://vk.com/geometry_nhk">
          

    <svg width="1024px" height="1024px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M3 248c0-38 26-53 58-55l149 1c9 0 17 6 20 15 34 110 76 178 126 255 3 6 8 9 13 9 4 0 8-2 11-7l3-11 1-173c0-25-12-29-40-33-11-2-18-12-18-22 0-2 0-4 1-6 14-43 58-65 120-65l56-1c46 0 88 20 88 79v227c4 3 8 5 13 5 8 0 18-5 26-18 52-73 111-160 119-206 0-2 1-3 2-5 11-22 39-37 51-41 2-1 5-2 9-2h155l10 1c15 0 26 10 31 19 9 14 7 29 8 35v7c-15 91-119 193-163 259-6 8-9 15-9 22 0 6 3 12 8 18l146 184c8 11 12 24 12 35 0 33-31 52-61 55l-17 1H779c-3 0-5 1-8 1-17 0-31-9-41-19-32-39-63-79-94-118-6-8-8-9-14-13-7 29-13 59-20 89l-3 17c-5 18-18 37-42 42l-14 1h-98C272 830 117 584 8 277c-3-8-5-19-5-29zm601 259c-26 0-55-15-55-43V234c0-27-12-37-45-37l-57 2c-32 0-50 5-65 15 23 11 44 26 44 68v176c-3 35-32 58-60 58-19 0-36-11-46-29-45-68-83-132-116-224l-9-26-133-1c-18 0-16 1-16 10 0 6 1 14 2 19l21 56c109 282 246 467 376 467h100c14 0 13-17 16-27l19-88c4-9 7-17 14-24 8-8 17-11 26-11 19 0 37 15 49 29l85 108c7 11 13 13 17 13h165c16 0 30-5 30-15 0-3-1-7-3-10L818 582c-12-15-17-30-17-45 0-16 6-32 16-46 42-63 132-153 153-227l3-13c-1-5-1-9-2-14H814c-10 4-18 10-24 18l-6 19c-23 64-86 152-131 213-15 14-32 20-49 20z"/></svg>
    <span>vkontakte</span></a>
      </div>
      </div>
      <div class="container">
        <div class="header__box">
          <div class="header__logo"><img src="<?php the_field('logo') ?>" alt="" />
            <div class="header__text"><span><?php the_field('logo-text') ?></span><span><?php the_field('logo-text-2') ?></span></div>
          </div>
          <div class="header__burger"><img src="<? echo get_template_directory_uri();?>/img/menu-button.svg" alt="" /></div>
          <ul class="header__list">
            <li class="header__item"><a class="header__link" href="#gl"><?php the_field('nav-1') ?></a></li>
            <li class="header__item"><a class="header__link" href="#sect-2"><?php the_field('nav-2') ?></a></li>
            <li class="header__item"><a class="header__link" href="#sect-3"><?php the_field('nav-3') ?></a></li>
            <li class="header__item"><a class="header__link" href="#sect-4"><?php the_field('nav-4') ?></a></li>
            <li class="header__item"><a class="header__link" href="#sect-5"><?php the_field('nav-5')?></a></li>
            <li class="header__item"><a class="header__link" href="#sect-6"><?php the_field('nav-6') ?></a></li>
            <li class="header__item"><a class="header__link" href="#sect-6"><?php the_field('nav-7') ?></a></li>
          </ul>
        </div>
        <div class="header__container header__container_mobile">
            <a class="header__tel" onclick="ym(88656003, 'reachGoal', 'tel'); return true;" href="tel:+79532109127"><?php the_field('tel-1') ?></a>
            <a class="header__tel" onclick="ym(88656003, 'reachGoal', 'tel'); return true;" href="tel:+79532109127"><?php the_field('tel-2') ?></a>
            <a class="header__inst" href="https://www.instagram.com/geometry_nhk/">
            <svg>
              <use xlink:href="<? echo get_template_directory_uri();?>/img/symbols.svg#svg-inst"></use>
            </svg><span><?php the_field('inst') ?></span></a>
            <a class="header__whatsapp" onclick="ym(88656003, 'reachGoal', 'wa-1'); return true;" id="footer__whatsapp" href="whatsapp://send?phone=79532109127">
            <svg>
              <use xlink:href="<? echo get_template_directory_uri();?>/img/symbols.svg#svg-whatsapp"></use>
            </svg><span><?php the_field('whatsapp') ?></span></a></div>
      </div>
  </header> -->



  <header class="z-10 w-full md-28 transition-colors header py-5 fixed">
            <div class="container">
        
                <div class="flex items-center justify-between">
                        
                    <!-- Левая часть шапки -->
                    <div class="hidden md:flex justify-between items-center gap-10">
                        <div class="flex items-center justify-between gap-2">
                            <a href="/" class="flex items-center justify-between gap-2">
                                <img src="<?php echo get_template_directory_uri() .'/img/new_img/icons/logo__header.svg';?>" class="" alt="логотиа в шапке">
                            
                                <span class="text-black font-medium">Геометрия</span>
                            </a>
                        </div>
        
                        <div>
                            <ul class="mobile gap-2 flex-wrap text-main-black hidden md:flex items-center justify-center">
                                <li class="transform hover:scale-105 transition-all mr-4"><a class="text-black font-medium " href="/about_company">О нас</a></li>
                                <li class="transform hover:scale-105 transition-all mr-4"><a class="text-black font-medium nav-link" href="#"
                                        data-goto=".page-section-2">Услуги</a></li>
                                <li class="transform hover:scale-105 transition-all mr-4"><a class="text-black font-medium nav-link" href="#"
                                        data-goto=".page-section-3">Выполненные проекты</a></li>
                                <li class="transform hover:scale-105 transition-all mr-4"><a class="text-black font-medium nav-link" href="#"
                                        data-goto=".page-section-4">Отзывы</a></li>
                                
                            </ul>
                        </div>
                    </div>
        
                    <div class="flex md:hidden items-center justify-between gap-2">
                        <a href="/" class="flex md:hidden items-center justify-between gap-2">
                            <img src="<?php echo get_template_directory_uri() .'/img/new_img/icons/logo__header.svg'; ?>" class="" alt="логотип в шапке">
                            <span class="text-black font-bold">Геометрия</span>
                        </a>
                    </div>
        
        
                    <!-- Правая часть шапки -->
                    <div class="hidden md:flex items-center justify-between">
                        <a href="https://api.whatsapp.com/send/?phone=79532109127">
                            <img class="md:hidden block bg-bg-gray p-2 rounded-md" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/sap.svg'; ?>" alt="" >
                        </a>
        
                        <li class="flex items-center justify-center sm:gap-0 xs:gap-0 gap-0 md:gap-2 transform hover:scale-105 transition-all">
                            <img src="<?php echo get_template_directory_uri() .'/img/new_img/icons/call.svg'; ?>" alt="">
                            <a class="text-black font-bold  nav-link" href="tel:+79532109127">
                                +7-953-210-91-27
                            </a>
                        </li>
        
                        <li class="list-none">
                            <a href="https://www.instagram.com/geometry_nhk/">
                                <img class="transform hover:scale-105 transition-all p-2" src="<?php echo get_template_directory_uri() .'/img/new_img/icons/inst.svg'; ?>" alt="" >
                            </a>
                        </li>
        
                        <li class="list-none">
                            <a class="nav-link" href="https://api.whatsapp.com/send/?phone=79532109127">
                            <img class="transform hover:scale-105 transition-all p-2" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/sap.svg'; ?>" alt="" >
                            </a>
                        </li>

                        
                        <li class="list-none">
                            <a href="https://t.me/geometry_nhk">
                                    <img class="transform hover:scale-105 transition-all p-2" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/tg.svg'; ?>">
                                </a>
                        </li>

                     
        
                        <a class="text-white font-semibold bg-blue button__padding btn__main popup-link" href="#popup1">
                            Оставить заявку
                        </a>
                    </div>
        
            
        
                    <!-- Кнопка для мобильного меню -->
                    <div class="flex md:hidden items-center">

                        <li class=" hidden xs:flex mr-4 sm:flex md:hidden items-center justify-center sm:gap-0 xs:gap-0 gap-0 md:gap-2 transform hover:scale-105 transition-all">
                            <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/call.svg'; ?>" alt="">
                            <a class="text-black font-bold phone nav-link" href="tel:+79532109127">
                                +7-953-210-91-27
                            </a>
                        </li>
        
                        <li class="hidden xs:hidden mr-4 sm:flex md:hidden sm:list-none">
                            <a href="https://www.instagram.com/geometry_nhk/">
                                <img class="transform hover:scale-105 transition-all p-2" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/inst.svg'; ?>" alt="" >
                            </a>
                        </li>
        
                        <li class="hidden xs:hidden mr-4 sm:flex md:hidden">
                            <a class="nav-link" href="https://api.whatsapp.com/send/?phone=79532109127">
                            <img class="transform hover:scale-105 transition-all p-2" src="<?php echo get_template_directory_uri() . '/img/img/icons/sap.svg'; ?>" alt="" >
                            </a>
                        </li>

                        <button class="btn__menu--mobile md:hidden flex">
                                <svg class="h-3 w-3" viewBox="0 0 64 48">
                                    <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                    <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                    <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                </svg>
                        </button>
                    </div>
        
                    <!-- Мобильное меню -->
                    <div class="mobile-menu">
                        <div class="container">

                            <nav class="catalog-menu">
                                <!-- <?php wp_nav_menu([
                                    'theme_location' => 'mobile-menu',
                                    'container' => 'ul',
                                    'menu_class' => 'mobile-menu--nav', 
                                    ]); 
                                ?> -->
                                    <ul>
                                        <li class="text-white pt-2 pb-5 nav-link"><a href="/about_company">О нас</a></li>
                                        <li class="text-white pt-2 pb-5 nav-link">Услуги</li>
                                        <li class="text-white pt-2 pb-5 nav-link">Выполненные проекты</li>
                                        <li class="text-white pt-2 pb-5 nav-link">Отзывы</li>

                                        <li class="mr-4 flex pt-2 pb-5 gap-2">
                                            <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/call__white.svg'; ?>" alt="">
                                            <a class="text-white font-bold nav-link" href="tel:+79532109127">
                                                +7-953-210-91-27
                                            </a>
                                        </li>
                                    </ul>

                                        
                                         
                            <ul class="flex justify-start padding__bottom__link">
                                <li class="mr-2 list-none pt-2 pb-5 gap-2">
                                    <a href="https://www.instagram.com/geometry_nhk/">
                                        <img class="" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/inst__white.svg'; ?>" alt="" >
                                    </a>
                                </li>
                                
                                <li class="mr-2 list-none pt-2 pb-5 gap-2 padding__bottom__link">
                                    <a href="https://api.whatsapp.com/send/?phone=79532109127">
                                        <img class="" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/sap__white.svg'; ?>" alt="" >
                                    </a>
                                </li>
                                <li class="mr-2 list-none pt-2 pb-5 gap-2 padding__bottom__link">
                                    <a href="https://t.me/geometry_nhk">
                                        <img class="" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/tg__white.svg'; ?>" alt="" >
                                    </a>
                                </li>
                            </ul>
                                    
                            

                                    <a class="text-blue font-semibold bg-white button__padding btn__main__white popup-link" href="#popup1">
                                        Оставить заявку
                                    </a>


                            </nav>                
                        </div>
                    </div>
                </div>
        
            </div>
        </header>