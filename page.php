<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package potolkiGeometry
 */

get_header();
?>

<ul class="header__list-burger">
    <div class="header__close"><img src="<? echo get_template_directory_uri();  ?>/img/close.png" alt="" /></div>
    <li class="header__item"><a class="header__link" href="#gl"><?php the_field('nav-1') ?></a></li>
    <li class="header__item"><a class="header__link" href="#sect-2"><?php the_field('nav-2') ?></a></li>
    <li class="header__item"><a class="header__link" href="#sect-3"><?php the_field('nav-3') ?></a></li>
    <li class="header__item"><a class="header__link" href="#sect-4"><?php the_field('nav-4') ?></a></li>
    <li class="header__item"><a class="header__link" href="#sect-5"><?php the_field('nav-5')?></a></li>
    <li class="header__item"><a class="header__link" href="#sect-6"><?php the_field('nav-6') ?></a></li>
    <li class="header__item"><a class="header__link" href="#sect-6"><?php the_field('nav-7') ?></a></li>
</ul>
<main class="main">
    <div class="section section_intro" id="gl">
        <div class="container">
            <div class="intro">
                <div class="intro__substrate">
                    <div class="intro__title">
                        <h1><?php the_field('intro-title') ?> </h1>
                    </div>
                    <div class="intro__text">
                        <p><?php the_field('intro-text-1') ?></p>
                        <p><?php the_field('intro-text-2') ?></p>
                        <p><?php the_field('intro-text-3') ?></p>
                    </div>
                </div>
            </div>
            <div>


            </div>
            <div class="form" id="form-footer">
                <?php echo do_shortcode('[contact-form-7 id="390" title="Контактная форма 1"]'); ?>
            </div>

        </div>
    </div>
    <div class="section section__intro_moblie">
        <div class="intro__img"><img src="<? echo get_template_directory_uri();?>/img/intro-bg.jpg" alt="" /></div>
        <div class="intro">
            <div class="intro__substrate">
                <div class="intro__title">
                    <h1><?php the_field('intro-title') ?></h1>
                </div>
                <div class="intro__text">
                    <p><?php the_field('intro-text-1')?></p>
                    <p><?php the_field('intro-text-2')?></p>
                    <p><?php the_field('intro-text-3')?></p>
                </div>
            </div>
            <div class="form" id="form-footer">
                <?php echo do_shortcode('[contact-form-7 id="390" title="Контактная форма 1"]'); ?>
            </div>


        </div>
    </div>
    <div class="section section_counter">
        <div class="container">
            <div class="counter">
                <ul class="counter__list">
                    <li class="counter__item"><img src="<? echo get_template_directory_uri();?>/img/guarantee.svg"
                            alt="" /><span><?php the_field('banner-text-1')?></span></li>
                    <li class="counter__item"> <img src="<? echo get_template_directory_uri();?>/img/clock.svg"
                            alt="" /><span><?php the_field('banner-text-2')?></span></li>
                    <li class="counter__item"><img src="<? echo get_template_directory_uri();?>/img/flash.svg"
                            alt="" /><span><?php the_field('banner-text-3')?></span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="catalog">
                <div class="catalog__title" style="text-align: center;"><span>Примеры наших работ</span></div>
                <div class="slider swiper-wrapper">
                    <?php 
$images = get_field("slider");
if ($images) : ?>
                    <?php foreach( $images as $image ): ?>
                    <a href="<?php echo esc_url($image); ?>" data-fancybox="gallery" class="slider__item swiper-slide">
                        <img src="<?php echo esc_url($image); ?>" alt="">
                    </a>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="sect-2">
        <div class="container">
            <div class="catalog">
                <div class="catalog__title"><span><?php the_field('catalog-title')?></span></div>
                <ul class="catalog__list">
                    <li class="catalog__item">
                        <div class="catalog__img"><img src="<?php the_field('card-1')?>"></div>
                        <div class="catalog__text"><?php the_field('card-text-1')?><br>
                            <?php the_field('card-1-price')?></div>
                    </li>
                    <li class="catalog__item">
                        <div class="catalog__img"><img src="<?php the_field('card-2')?>" alt="" /></div>
                        <div class="catalog__text"><?php the_field('card-text-2')?><br>
                            <?php the_field('card-2-price')?></div>
                    </li>
                    <li class="catalog__item">
                        <div class="catalog__img"><img src="<?php the_field('card-3')?>" alt="" /></div>
                        <div class="catalog__text"><?php the_field('card-text-3')?><br>
                            <?php the_field('card-3-price')?></div>
                    </li>
                </ul>
                <ul class="catalog__list catalog__list_size">
                    <li class="catalog__item">
                        <div class="catalog__img"><img src="<?php the_field('card-4')?>" alt="" /></div>
                        <div class="catalog__text"><?php the_field('card-text-4')?><br>
                            <?php the_field('card-4-price')?></div>
                    </li>
                    <li class="catalog__item">
                        <div class="catalog__img"><img src="<?php the_field('card-5')?>" alt="" /></div>
                        <div class="catalog__text"><?php the_field('card-text-5')?><br>
                            <?php the_field('card-5-price')?></div>
                    </li>
                    <li class="catalog__item">
                        <div class="catalog__img"><img src="<?php the_field('card-6')?>" alt="" /></div>
                        <div class="catalog__text"><?php the_field('card-text-6')?><br>
                            <?php the_field('card-6-price')?></div>
                    </li>
                    <li class="catalog__item">
                        <div class="catalog__img"><img src="<?php the_field('card-7')?>" alt="" /></div>
                        <div class="catalog__text"><?php the_field('card-text-7')?><br>
                            <?php the_field('card-7-price')?></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section" id="sect-3">
        <div class="container">
            <div class="services">
                <div class="services__title"><span>Услуги</span></div>
                <ul class="services__list">
                    <li class="services__item">
                        <div class="services__img"><img src="<?php the_field('serv-1')?>" alt="" /></div>
                        <div class="services__text"><span><?php the_field('serv-1-text')?><br>
                                <?php the_field('serv-1-price')?></span></div>
                    </li>
                    <li class="services__item">
                        <div class="services__img"><img src="<?php the_field('serv-2')?>" alt="" /></div>
                        <div class="services__text"><span><?php the_field('serv-2-text')?><br>
                                <?php the_field('serv-2-price')?></span></div>
                    </li>
                    <li class="services__item">
                        <div class="services__img"><img src="<?php the_field('serv-3')?>" alt="" /></div>
                        <div class="services__text"><span><?php the_field('serv-3-text')?><br>
                                <?php the_field('serv-3-price')?></span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section_calc" id="sect-4">
        <div class="container">
            <div class="video">Отзывы наших клиентов</div>
            <div class="video__list">
                <div class="video__item" data-url="/video/video-1.mp4">
                    <div class="video__img"><img
                            src="/wp-content/uploads/2022/04/Снимок-экрана-2022-04-16-в-18.19.44.png" alt=""><button
                            class="play video-play"><img src="/wp-content/uploads/2022/04/play.png" alt=""></button>
                    </div>
                    <div class="video__name">Валерия, г. Находка</div>
                    <div class="video__text">Заказывала потолок в компании Геометрия маме в подарок, созвонились с
                        ребятами, все обсудили и в течение 2-3 дней мне сделали потолок очень чисто, качественно...
                    </div>
                    <div class="video__name" style="  font-size: 14px;
  font-weight: 500;">Обычный, матовый потолок</div>
                    <button class="video__show video-play">Смотреть отзыв</button>
                </div>
                <div class="video__item" data-url="/video/video-2.mp4">
                    <div class="video__img"><img
                            src="/wp-content/uploads/2022/04/Снимок-экрана-2022-04-16-в-18.41.10.png" alt=""><button
                            class="play video-play"><img src="/wp-content/uploads/2022/04/play.png" alt=""></button>
                    </div>
                    <div class="video__name">Алексей, г. Владивосток</div>
                    <div class="video__text">Обратился к ребятам в фирму Геометрия сделать потолки в квартире 24 кв. м.
                        Сделали все без косяков, без грязи, без пыли, идеальный подход...</div>
                    <div class="video__name" style="  font-size: 14px;
  font-weight: 500;">Обычный, матовый потолок</div>
                    <button class="video__show video-play">Смотреть отзыв</button>
                </div>
                <div class="video__item" data-url="/video/video-3.mp4">
                    <div class="video__img"><img
                            src="/wp-content/uploads/2022/04/Снимок-экрана-2022-04-16-в-18.42.05.png" alt=""><button
                            class="play video-play"><img src="/wp-content/uploads/2022/04/play.png" alt=""></button>
                    </div>
                    <div class="video__name">Лариса, п. Ливадия</div>
                    <div class="video__text">Полтора года назад обратилась в компанию Геометрия с просьбой натянуть
                        потолок в одной из комнат. Приехали быстро, померяли и уже через два дня приехали ребята
                        монтажники, все сделали быстренько, аккуратно...</div>
                    <div class="video__name" style="  font-size: 14px;
  font-weight: 500;">Обычный, матовый потолок</div>
                    <button class="video__show video-play">Смотреть отзыв</button>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="section section_calc" id="sect-4">
      <div class="container">
        <div class="calc">
          <div class="calc__title"><span>Калькулятор</span></div>
         <div class="calc__box">
            <div class="calc__text">
              <p>
                <label for="amount">Площадь:</label>
                <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;" />
              </p>
              <div id="slider"></div>
            </div>
            <div class="calc__text">
              <p>
                <label for="amountTwo">Точка освещения:</label>
                <input type="text" id="amountTwo" style="border:0; color:#f6931f; font-weight:bold;" />
              </p>
              <div id="sliderTwo"></div>
            </div>
            <div class="calc__itog"><span>Стоимость:</span>
              <div class="calc__sum">0</div>
            </div>
            <div class="calc__btn"><a href="#" class="calc__left-btn" data-izimodal-open="#modal">Заказать замер</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="section">
        <div class="container">
            <div class="stages">
                <div class="stages__title"><span>Как мы работаем</span></div>
                <ul class="stages__list">
                    <li class="stages__item">
                        <div class="stages__img"><img src="<?php the_field('step-1')?>" alt="" /></div>
                        <div class="stages__text"><span> <?php the_field('stage-1')?></span></div>
                    </li>
                    <li class="stages__item">
                        <div class="stages__img"><img src="<?php the_field('step-2')?>" alt="" /></div>
                        <div class="stages__text"><?php the_field('stage-2')?></div>
                    </li>
                    <li class="stages__item">
                        <div class="stages__img"><img src="<?php the_field('step-3')?>" alt="" /></div>
                        <div class="stages__text"><?php the_field('stage-3')?></div>
                    </li>
                    <li class="stages__item">
                        <div class="stages__img"><img src="<?php the_field('step-4')?>" alt="" /></div>
                        <div class="stages__text"><?php the_field('stage-4')?></div>
                    </li>
                    <li class="stages__item">
                        <div class="stages__img"><img src="<?php the_field('step-5')?>" alt="" /></div>
                        <div class="stages__text"><?php the_field('stage-5')?></div>
                    </li>
                    <li class="stages__item">
                        <div class="stages__img"><img src="<?php the_field('step-6')?>" alt="" /></div>
                        <div class="stages__text"><?php the_field('stage-6')?></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section_question" id="sect-5">
        <div class="container">
            <div class="question">
                <div class="question__title"><span><?php the_field('ques-title')?></span></div>
                <ul class="question__list">
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-1')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer">
                            <?php the_field('answ-1')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-2')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"><?php the_field('answ-2')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-3')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"><?php the_field('answ-3')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"> <?php the_field('ques-4')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"><?php the_field('answ-4')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-5')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"><?php the_field('answ-5')?>.</div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-6')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"><?php the_field('answ-6')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-7')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"><?php the_field('answ-7')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-8')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"> <?php the_field('answ-8')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"> <?php the_field('ques-9')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"> <?php the_field('answ-9')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"> <?php the_field('ques-10')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"> <?php the_field('answ-10')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"> <?php the_field('ques-11')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"> <?php the_field('answ-11')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-12')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"> <?php the_field('answ-12')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-13')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"><?php the_field('answ-13')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-14')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"><?php the_field('answ-14')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-15')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"><?php the_field('answ-15')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-16')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" />
                        </div>
                        <div class="question__answer"><?php the_field('answ-16')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"> <?php the_field('ques-17')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"> <?php the_field('answ-17')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-18')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"> <?php the_field('answ-18')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"><?php the_field('ques-19')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" />
                        </div>
                        <div class="question__answer"> <?php the_field('answ-19')?></div>
                    </li>
                    <li class="question__item">
                        <div class="question__text"> <?php the_field('ques-20')?><img
                                src="<? echo get_template_directory_uri();?>/img/down-arrow.png" /></div>
                        <div class="question__answer"> <?php the_field('answ-20')?></div>
                    </li>
                </ul>
                <button class="question__more">
                    Показать все вопросы
                </button>
            </div>
            <div class="form" id="form-footer">
                <?php echo do_shortcode('[contact-form-7 id="390" title="Контактная форма 1"]'); ?>
            </div>

            <!-- <form id="form" class="form-send-1" action="mail.php" method="post">
                <div class="form" id="form-footer">
                    <div class="form__title"><span><?php the_field('form-title')?></span></div>
                    <div class="form__box">
                        <div class="form__name">
                            <input type="text" class="putName" name="name" placeholder="Введите ваше имя" required>
                        </div>
                        <div class="form__tel">
                            <input name="phone" type="tel" class="putPhone" placeholder="Введите номер телефона"
                                required>
                        </div>
                        <button class="form__btn"><span><input type="submit" name="submit"
                                    onclick="ym(88656003, 'reachGoal', 'form-1'); return true;" class="btn"
                                    value="<?php the_field('form-btn')?>"></span></button>
                    </div>
                </div>
            </form> -->
        </div>
    </div>
</main>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const plays = document.querySelectorAll('.video-play');
    const videoModal = document.querySelector('.video-modal');
    const closeModal = document.querySelector('.video-modal__close');
    plays.forEach(play => {
        play.addEventListener('click', () => {
            videoModal.querySelector('.video-modal__box').innerHTML = '';
            videoModal.style.display = 'flex';
            videoModal.querySelector('.video-modal__box').innerHTML =
                `<video controls="controls" autoplay="autoplay" style=" max-height: 600px;"><source src="${play.closest('.video__item').dataset.url}"></video>`;
        })
    });

    closeModal.addEventListener('click', () => {
        videoModal.querySelector('.video-modal__box').innerHTML = '';
        videoModal.style.display = 'none';
    })
})
</script>
<?php
get_footer();