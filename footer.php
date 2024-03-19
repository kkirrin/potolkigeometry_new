<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package potolkiGeometry
 */

?>
<!-- <div class="map">
	  <div class="container">
        <div class="map__title">Находимся в Находке. Работаем в Партизанске, Ливадии, Врангеле, Большом Камне, и Фокино.</div>
	</div>  
	  <img src="/wp-content/uploads/2022/04/map.jpg" alt="">
  </div>
  <footer class="footer" id="sect-6">
    <div class="container">
      <div class="footer__top">
        <div class="footer__logo">
          <div class="header__logo"><img src="<?php the_field('logo') ?>" alt="">
            <div class="header__text"><span><?php the_field('logo-text') ?></span><span><?php the_field('logo-text-2') ?></span></div>
          </div>
        </div>
        <div class="footer__communication">
            <a class="header__tel" onclick="ym(88656003, 'reachGoal', 'tel'); return true;" href="tel:+79532109127"><?php the_field('tel-1') ?></a><br>
            <a class="header__whatsapp" onclick="ym(88656003, 'reachGoal', 'wa-1'); return true;" href="whatsapp://send?phone=79532109127">
            <svg>
              <use xlink:href="<? echo get_template_directory_uri();?>/img/symbols.svg#svg-whatsapp"></use>
            </svg><span><?php the_field('whatsapp') ?></span></a><a class="header__inst" href="https://www.instagram.com/geometry_nhk/">
            <svg>
              <use xlink:href="<? echo get_template_directory_uri();?>/img/symbols.svg#svg-inst"></use>
            </svg><span><?php the_field('inst') ?></span></a><br>
			<a class="header__inst" href="https://t.me/geometry_nhk">
          
<svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21 5L2 12.5L9 13.5M21 5L18.5 20L9 13.5M21 5L9 13.5M9 13.5V19L12.2488 15.7229" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<span>telegram</span></a>
		  <a class="header__inst" href="https://vk.com/geometry_nhk">
          

<svg width="1024px" height="1024px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M3 248c0-38 26-53 58-55l149 1c9 0 17 6 20 15 34 110 76 178 126 255 3 6 8 9 13 9 4 0 8-2 11-7l3-11 1-173c0-25-12-29-40-33-11-2-18-12-18-22 0-2 0-4 1-6 14-43 58-65 120-65l56-1c46 0 88 20 88 79v227c4 3 8 5 13 5 8 0 18-5 26-18 52-73 111-160 119-206 0-2 1-3 2-5 11-22 39-37 51-41 2-1 5-2 9-2h155l10 1c15 0 26 10 31 19 9 14 7 29 8 35v7c-15 91-119 193-163 259-6 8-9 15-9 22 0 6 3 12 8 18l146 184c8 11 12 24 12 35 0 33-31 52-61 55l-17 1H779c-3 0-5 1-8 1-17 0-31-9-41-19-32-39-63-79-94-118-6-8-8-9-14-13-7 29-13 59-20 89l-3 17c-5 18-18 37-42 42l-14 1h-98C272 830 117 584 8 277c-3-8-5-19-5-29zm601 259c-26 0-55-15-55-43V234c0-27-12-37-45-37l-57 2c-32 0-50 5-65 15 23 11 44 26 44 68v176c-3 35-32 58-60 58-19 0-36-11-46-29-45-68-83-132-116-224l-9-26-133-1c-18 0-16 1-16 10 0 6 1 14 2 19l21 56c109 282 246 467 376 467h100c14 0 13-17 16-27l19-88c4-9 7-17 14-24 8-8 17-11 26-11 19 0 37 15 49 29l85 108c7 11 13 13 17 13h165c16 0 30-5 30-15 0-3-1-7-3-10L818 582c-12-15-17-30-17-45 0-16 6-32 16-46 42-63 132-153 153-227l3-13c-1-5-1-9-2-14H814c-10 4-18 10-24 18l-6 19c-23 64-86 152-131 213-15 14-32 20-49 20z"/></svg>
<span>vkontakte</span></a>
			<br><br>
            <div class="footer__text" style="margin-top:20px"><span class="footer__btn" data-izimodal-open="#modal-3"><?php the_field('director') ?></span></div>
        </div>
      </div>

     

    </div>
    <div class="footer__bottom">
      <div class="footer__text"><span><?php the_field('copy') ?></span></div>
    </div>
    </div>
  </footer>
  <div id="modal" class="form-modal">
    <form id="form" class="form-calc-1" action="mail.php" method="post">
          <div class="form">
            <div class="form__title"><span><?php the_field('form-title')?></span></div>
            <div class="form__box">
              <div class="form__name">
                <input type="text" class="putName" name="name" placeholder="Введите ваше имя" required>
              </div>
              <div class="form__tel">
                <input name="phone" type="tel" class="putPhone" placeholder="Введите номер телефона" required>
              </div>
              <button class="form__btn"><span><input type="submit" onclick="ym(88656003, 'reachGoal', 'form-calc-1'); return true;" name="submit" class="btn" value="<?php the_field('form-btn')?>"></span></button>
            </div>
          </div>
      </form> 
  </div>
  <div id="modal-3" class="form-modal">
      <form id="form" class="form-director-1" action="mail.php" method="post">
        <div class="form">
          <div class="form__title">
            <span><?php the_field('director')?>
            </span>
          </div>
          <div class="form__box">
            <div class="form__name">
              <input type="text" class="putName" name="name" placeholder="Введите ваше имя" required>
            </div>
            <div class="form__tel">
              <input name="phone" type="tel" class="putPhone" placeholder="Введите номер телефона" required>
            </div>
            <div class="form__tel form__director-mail">
              <input name="message" type="tel" class="putPhone" placeholder="Введите ваше сообщение" required>
            </div>
            <button class="form__btn form__btn_big">
              <input type="submit" onclick="ym(88656003, 'reachGoal', 'send-dir'); return true;" name="submit" class="btn" value="<?php the_field('form-btn')?>">
            </button>
            <input type="hidden" name="formData" value="Заявка с сайта">
          </div>
          </div>
      </form>
  </div>
 <div class="video-modal">
      <div class="video-modal__content">
        <button class="video-modal__close">&#65794;	</button>
        <div class="video-modal__box"><video controls="controls"><source src="/video/video-1.mp4"></video></div>
     </div>
  </div>
  <script src="<? echo get_template_directory_uri();?>/js/libs.js"></script>
  <script src="<? echo get_template_directory_uri();?>/js/script.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('.slider').slick();  
</script>
   <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
<?php wp_footer(); ?>
</body>

</html> -->


</div>
    <?php wp_footer(); ?>
    <div class="scroll-top transform hover:scale-105 transition-all">
        <img src="<?php echo get_template_directory_uri().'/img/new_img/icons/arrow.svg'; ?>" alt="стрелка вверх">
    </div>
    <script src="<?php echo get_template_directory_uri().'/js/swiper-bundle.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri().'/js/wow.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri().'/js/baguettebox.js'; ?>"></script>
    <script type="module" src="<?php echo get_template_directory_uri().'/js/main.js'; ?>"></script>
</body>


<section id="popup1" class="popup">
    <div class="popup__body rounded-2xl">
        <div class="popup__content rounded-2xl">
            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg width="30" height="30" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                    <path
                        d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                    </path>
                </svg>
            </button>
            <p class="text-black text-lg font-semibold pb-2">Обратный звонок</p>
            <p class="popup__desc" class="mb-7">Оставьте свои данные и мы свяжемся с вами, чтобы уточнить детали</p>

            <div class="form-wrapper">
                
                
                <!-- <form action="" class="flex flex-col gap-5"> -->
                    <!-- <input placeholder="Ваше имя" class="form__input">

                    <input placeholder="+7 999 999 99 99" class="form__input">

                    <a class="text-white up nav-link bg-blue p-2 rounded-2xl btn__main popup-link" href="#popup1">
                        Оставить заявку
                    </a> -->
                  <div class="form-wrapper">  
                    <?php echo do_shortcode('[contact-form-7 id="533" title="Заявка"]'); ?>
                  </div>
                <!-- </form> -->
            </div>
            
        </div>
    </div>
</section>

</html>
