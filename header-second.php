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
        
                        <li class="mr-4 flex items-center justify-center sm:gap-0 xs:gap-0 gap-0 md:gap-2 transform hover:scale-105 transition-all">
                            <img class="icons" src="<?php echo get_template_directory_uri() .'/img/new_img/icons/call.svg'; ?>" alt="">
                            <a class="text-black font-bold nav-link" href="tel:+79532109127">
                                +7-953-210-91-27
                            </a>
                        </li>
                        
                        <li class="mr-4 list-none">
                            <a href="https://www.instagram.com/geometry_nhk/">
                                <img class="transform hover:scale-105 icons transition-all p-2" src="<?php echo get_template_directory_uri() .'/img/new_img/icons/inst.svg'; ?>" alt="" >
                            </a>
                        </li>
        
                        <li class="mr-4 list-none">
                            <a class="nav-link" href="https://api.whatsapp.com/send/?phone=79532109127">
                            <img class="transform hover:scale-105 icons  transition-all p-2" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/sap.svg'; ?>" alt="" >
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
                                <img class="transform hover:scale-105 transition-all p-2 icons" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/inst.svg'; ?>" alt="" >
                            </a>
                        </li>
        
                        <li class="hidden xs:hidden mr-4 sm:flex md:hidden">
                            <a class="nav-link" href="https://api.whatsapp.com/send/?phone=79532109127">
                            <img class="transform hover:scale-105 transition-all p-2 icons" src="<?php echo get_template_directory_uri() . '/img/img/icons/sap.svg'; ?>" alt="" >
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
                            <ul>
                                <li class="text-white pt-2 pb-5 nav-link"><a href="/about_company">На главную</a></li>
                                

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
                                
                                <li class="mr-4 list-none pt-2 pb-5 gap-2 padding__bottom__link">
                                    <a href="https://api.whatsapp.com/send/?phone=79532109127">
                                        <img class="" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/sap__white.svg'; ?>" alt="" >
                                    </a>
                                </li>
                            </ul>
                            
                    

                            <a class="text-blue font-semibold bg-white button__padding btn__main__white popup-link" href="#popup1">
                                Оставить заявку
                            </a>       
                        </div>
                    </div>
                </div>
        
            </div>
        </header>