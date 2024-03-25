<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package potolkiGeometry
 */

/*
Template Name: Главная - страница
*/

get_header();
?>


<main>
            <h1 class="visually-hidden">Территория натуральных продуктов</h1>
            <!-- Главный экран -->
                <section class="relative pt-8 md:pt-24">
                    <img class="main__image  absolute -z-10 left-0" src="<?php echo get_template_directory_uri() . '/img/new_img/main__section/bg_main.png'; ?>" alt="задний фон">
                    <div class="container z-10 text-center">
                        <div class="hero__title__container">
                            <h2 class="text-white text-2xl md:text-6xl font-semibold pb-5">Натяжные потолки в <br><span class="py-2 px-5 bg-blue rounded-xl text-white">Находке и округе</span></h2>
                            <p class="text-white font-medium pb-8 font-base">Геометрия - выбор тех, кто ценит стиль и качество. <br>Выполняем монтаж потолков под ключ в Находке и округе</p>
                            <a class="rounded-xl bg-white p-4 font-bold btn__main__white popup-link" href="#popup1">
                                Бесплатный замер
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Качество -->
                <!-- <section class="pt-11 md:pt-24">
                    <div class="container">
                        <h2 class="py-10 text-center">Честно исполняем обязательства и следим за <span class="py-2 px-5 bg-blue rounded-xl text-white">качеством работ</span></h2>
                        <div class="grid reason__list gap-3">
                            <div class="p-10 bg-light-blue rounded-xl flex flex-col justify-center items-center transform hover:shadow-xl shadow-black hover:scale-105 transition-all">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/quality1.svg'; ?>" alt="картинка"> 
                                <p class="text-center pt-2 font-semibold text-xl md:text-2xl">Качество</p>
                                <p class="text-center pt-2 font-light text-black opacity-70 text-base">Гарантия 15 лет</p>
                            </div>
                            <div class="p-10 bg-light-blue rounded-xl flex flex-col justify-center items-center transform hover:shadow-xl shadow-black hover:scale-105 transition-all">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/quality2.svg'; ?>" alt="картинка"> 
                                <p class="text-center pt-2 font-semibold text-xl md:text-2xl">Аккуратность</p>
                                <p class="text-center pt-2 font-light text-black opacity-70 text-base">Безопасно для электропроводки</p>
                            </div>
                            <div class="p-10 bg-light-blue rounded-xl flex flex-col justify-center items-center transform hover:shadow-xl shadow-black hover:scale-105 transition-all">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/quality3.svg'; ?>" alt="картинка"> 
                                <p class="text-center pt-2 font-semibold text-xl md:text-2xl">Скорость</p>
                                <p class="text-center pt-2 font-light text-black opacity-70 text-base">Выполним монтаж за 2—3 часа</p>
                            </div>
                            <div class="p-10 bg-light-blue rounded-xl flex flex-col justify-center items-center transform hover:shadow-xl shadow-black hover:scale-105 transition-all">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/quality4.svg'; ?>" alt="картинка"> 
                                <p class="text-center pt-2 font-semibold text-xl md:text-2xl">Чистая работа</p>
                                <p class="text-center pt-2 font-light text-black opacity-70 text-base">После себя не оставляем грязи и мусора</p>
                            </div>
                        </div>
                    </div>
                </section> -->
                <section class="pt-11 md:pt-24">
                    <div class="container">
                        <h2 class="py-10 text-start text-lg sm:text-2xl md:text-4xl">Причины заказать потолки у Геометрии:</h2>
                        <div class="grid reason__list gap-3">
                            <div class="p-10 bg-light-blue rounded-xl flex flex-col justify-center items-center transform hover:shadow-xl shadow-black hover:scale-105 transition-all">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/quality1.svg'; ?>" alt="картинка"> 
                                <p class="text-center pt-2 font-semibold text-xl md:text-2xl">Качество</p>
                                <p class="text-center pt-2 font-light text-black opacity-70 text-base">Гарантия 15 лет</p>
                            </div>
                            <div class="p-10 bg-light-blue rounded-xl flex flex-col justify-center items-center transform hover:shadow-xl shadow-black hover:scale-105 transition-all">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/quality3.svg'; ?>" alt="картинка"> 
                                <p class="text-center pt-2 font-semibold text-xl md:text-2xl">Скорость</p>
                                <p class="text-center pt-2 font-light text-black opacity-70 text-base">Выполним монтаж за 2—3 часа</p>
                            </div>
                            <div class="p-10 bg-light-blue rounded-xl flex flex-col justify-center items-center transform hover:shadow-xl shadow-black hover:scale-105 transition-all">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/quality2.svg'; ?>" alt="картинка"> 
                                <p class="text-center pt-2 font-semibold text-xl md:text-2xl">Сервисное обслуживание</p>
                                <!-- <p class="text-center pt-2 font-light text-black opacity-70 text-base">Безопасно для электропроводки</p> -->
                            </div>
                            <div class="p-10 bg-light-blue rounded-xl flex flex-col justify-center items-center transform hover:shadow-xl shadow-black hover:scale-105 transition-all">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/quality5.svg'; ?>" alt="картинка"> 
                                <p class="text-center pt-2 font-semibold text-xl md:text-2xl">Контроль качества</p>
                                <!-- <p class="text-center pt-2 font-light text-black opacity-70 text-base">После себя не оставляем грязи и мусора</p> -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Галерея -->
                <section class="pt-9 md:pt-24">
                    <div class="container">
                        
                        <ul class="flex flex-wrap gap-1 spring__list gallery-wrapper">
                            <li class="w-[600px]">
                                <h2 class=" text-center">Реализуем <span class="py-2 px-5 bg-blue rounded-xl text-white">любой</span> вид натяжного потолка</h2>
                                <p class="text-center py-4 font-light text-black opacity-70 text-base">А так же поможем с выбором и проконсультируем по любому вопросу</p>
                            </li>
                            <li class="p-2 rounded-xl hover:shadow-xl shadow-black transform hover:scale-105 transition-all">
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_3.png'; ?>">
                                    <img class="transition-all rounded-xl object-fill h-[360px] pb-2" src="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_3.png'; ?>" data-caption="Image caption">
                                </a>
                               <p class="text-black opacity-70 text-base">Теневой потолок Eurokraab
                                от 1400 руб. м/пог.</p>
                            </li>                      
                            <li class="p-2 rounded-xl hover:shadow-xl shadow-black transform hover:scale-105 transition-all">           
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_6.png'; ?>">                 
                                    <img class="object-fill rounded-xl  h-[360px] pb-2" src="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_6.png'; ?>" data-caption="Image caption">
                                </a>
                                <p class="text-black opacity-70 text-base">Трековые системы
                                    от 1000 руб. м/пог.</p>
                            </li>
                            <li class="p-2 rounded-xl hover:shadow-xl shadow-black transform hover:scale-105 transition-all">
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_4.png'; ?>">
                                    <img class="object-fill rounded-xl w-full h-[360px] pb-2" src="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_4.png'; ?>" data-caption="Image caption">
                                </a>
                               <p class="text-black opacity-70 text-base">Световая линия
                                3000 руб. м/пог.</p>
                            </li>
                            <li class="p-2 rounded-xl hover:shadow-xl shadow-black transform hover:scale-105 transition-all">
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_7.png'; ?>">
                                    <img class="object-fill rounded-xl h-[360px] pb-2" src="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_7.png'; ?>" data-caption="Image caption">
                                </a>
                               <p class="text-black opacity-70 text-base">Тканевые потолки Descor  
                                от 2000р/м в кв</p>
                            </li>
                            <li class="p-2 rounded-xl hover:shadow-xl shadow-black transform hover:scale-105 transition-all">
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_8.png'; ?>">
                                    <img class="object-fill rounded-xl h-[360px] pb-2" src="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_8.png'; ?>" data-caption="Image caption">
                                </a>
                               <p class="text-black opacity-70 text-base">Классический потолок с белой вставкой
                                от 700 руб. м/кв.</p>
                            </li>
                            <li class="p-2 rounded-xl hover:shadow-xl shadow-black transform hover:scale-105 transition-all">
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_2.png'; ?>">
                                    <img class="object-fill rounded-xl  h-[360px] pb-2" src="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_2.png'; ?>" data-caption="Image caption">
                                </a>
                               <p class="text-black opacity-70 text-base">Парящий потолок
                                от 1500 руб. м/кв.</p>
                            </li>
                            <li class="p-2 rounded-xl hover:shadow-xl shadow-black transform hover:scale-105 transition-all">
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_5.png'; ?>">
                                    <img class="rounded-xl w-full object-fill h-[360px] pb-2" src="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_5.png'; ?>" data-caption="Image caption">
                                </a>
                               <p class="text-black opacity-70 text-base">Контурный потолок
                                </p>
                            </li>
                            <li class="p-2 rounded-xl hover:shadow-xl shadow-black transform hover:scale-105 transition-all">
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_1.png'; ?>">
                                    <img class=" rounded-xl object-fill h-[360px] pb-2" src="<?php echo get_template_directory_uri() . '/img/new_img/gallery/gallery_1.png'; ?>" data-caption="Image caption">
                                </a>
                               <p class="text-black opacity-70 text-base">Двухуровневый потолк
                                от 2000 руб. м/кв.</p>
                            </li>
                        </ul>
                    </div>
                </section>
                
                
                <!-- Весенняя акция -->
                <section class="pt-9 md:pt-24">
                    <div class="container rounded-3xl relative overflow-hidden">
                        <div class="spring__container relative">
                            <img src="<?php echo get_template_directory_uri() . '/img/new_img/bg-spring.png'; ?>" alt="" class="absolute inset-0 w-full h-full object-cover rounded-3xl">
                            <div class="spring__container__inner bg-white flex flex-col justify-center items-center">
                                <h2>Весенняя акция</h2>
                                <p class="text-center">Успейте заказать монтаж потолков до конца мая <br> и мы установим софиты бесплатно</p>
                                <a style="margin-bottom: -30px;" class="text-white rounded-xl bg-blue p-4 mt-5 font-bold btn__main popup-link" href="#popup1">
                                    Бесплатный замер
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Дополнительные услуги -->
                 <section class="page-section-2 pt-8 md:pt-24">
                    <div class="container">   
                        <h2 class="text-center py-10">Дополнительные услуги</h2>
                        <ul class="grid grid-cols-1 xs:grid-cols-1 sm:grid-cols-2 md:flex gap-5 flex-wrap services__list gallery-wrapper">
                            <li class="w-full  md:max-w-sm transform shadow-black hover:scale-105 hover:shadow-2xl transition-all rounded-xl p-2">
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/services/srvc_1.png'; ?>">
                                    <img class="rounded-2xl pb-5" src="<?php echo get_template_directory_uri() . '/img/new_img/services/srvc_1.png'; ?>" data-caption="Image caption">
                                </a>
                                <p class="text-black text-base opacity-70 text-start">Слив воды с натяжного потолка 3500 рублей</p>
                            </li>
                            <li class="w-full md:max-w-sm transform shadow-black hover:scale-105 hover:shadow-2xl transition-all rounded-xl p-2">
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/services/srvc_2.png'; ?>">
                                    <img class="rounded-2xl pb-5" src="<?php echo get_template_directory_uri() . '/img/new_img/services/srvc_2.png'; ?>" data-caption="Image caption">
                                </a>
                                <p class="text-black text-base opacity-70 text-start">Демонтаж/монтаж/ремонт потолка
                                    3500 рублей</p>
                            </li>
                            <li class="w-full  md:max-w-sm transform shadow-black hover:scale-105 hover:shadow-2xl transition-all rounded-xl p-2">
                                <a href="<?php echo get_template_directory_uri() . '/img/new_img/services/srvc_3.png'; ?>">
                                    <img class="rounded-2xl pb-5" src="<?php echo get_template_directory_uri() . '/img/new_img/services/srvc_3.png'; ?>" data-caption="Image caption">
                                </a>
                                <p class="text-black text-base opacity-70 text-start">Фото печать
                                    от 1500 м/кв. рублей</p>
                            </li>
                        </ul>        
                            
                        
                    </div>
                </section> 

                <!-- Проекты в находке -->
                <section class="pt-8 md:pt-24 project">
                    <div class="container relative">   

                        <div class="arrows__slider">             
                            <button
                                class="project-prev rounded-full bg-yellow p-4">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/arrow_prev.svg'; ?>" alt="влево">
                            </button>
                            <button
                                class="project-next rounded-full bg-yellow p-4">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/arrow_next.svg'; ?>"alt="вправо" >
                            </button>
                        </div>
                            <h2 class='text-center py-10'><span class="py-2 pattern__blue bg-blue rounded-xl text-white">Каждый пятый </span>натяжной потолок в Находке сделан нашей компанией</h2>
                                <div class="flex justify-center items-center gap-10 flex-wrap project-swiper swiper">
                                    <ul class="swiper-wrapper max-h-full install__list gallery-wrapper">


                                    <?php
                                        $photos = get_field('prjctHakh');
                                        if ($photos) {
                                            foreach ($photos as $photo) {
                                                echo '<li class="swiper-slide">';
                                                echo '<a href="' . esc_url($photo['url']) . '">';
                                                echo '<img class="rounded-xl object-cover xs:h-[317px] sm:h-[370px] md:h-[350px]m" src="' . esc_url($photo['url']) . '" alt="">';
                                                echo '</a>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo 'No photos found.'; 
                                        }
                                        ?>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Как происходит устонановка -->
                 <section class="pt-8 md:pt-24 install">
                    <div class="">   
                        <div class="w-0 min-w-[100%]">
                            <h2 class='text-center py-10 install__text'>Как происходит установка?</h2>
                            <div class="flex justify-center items-center gap-10 flex-wrap install-swiper swiper">
                                <ul class="swiper-wrapper max-h-full install__list">
                                    <li class="swiper-slide -z-10">
                                        <div class=" relative bg-white rounded-lg ">
                                            <img src="<?php echo get_template_directory_uri() . '/img/new_img/install/one.svg'; ?>" alt="">
                                            <span class="text-center text-blue text-lg font-medium">Ваша заявка</span>
                                            <img class="absolute arrow__slide__install -right-14 top-0" src="<?php echo get_template_directory_uri() . '/img/new_img/install/arrow__right.svg'; ?>" alt="">
                                        </div>
                                    </li>
                                    <li class="swiper-slide -z-10">
                                        <div class="mt-10 relative bg-white rounded-lg ">
                                            <img src="<?php echo get_template_directory_uri() . '/img/new_img/install/second.svg'; ?>" alt="">
                                            <span class="text-center text-blue text-lg font-medium">Выезд мастера на замер</span>
                                            <img class="absolute arrow__slide__install -right-14 bottom-0" src="<?php echo get_template_directory_uri() . '/img/new_img/install/arrow__left.svg'; ?>" alt="">
                                        </div>
                                    </li>
                                    <li class="swiper-slide -z-10">
                                        <div class=" relative bg-white rounded-lg ">
                                            <img src="<?php echo get_template_directory_uri() . '/img/new_img/install/three.svg'; ?>" alt="">
                                            <span class="text-center text-blue text-lg font-medium">Подписание договора</span>
                                            <img class="absolute arrow__slide__install -right-14 top-0" src="<?php echo get_template_directory_uri() . '/img/new_img/install/arrow__right.svg'; ?>" alt="">
                                        </div>
                                    </li>
                                    <li class="swiper-slide -z-10">
                                        <div class="mt-10 relative bg-white rounded-lg ">
                                            <img src="<?php echo get_template_directory_uri() . '/img/new_img/install/four.svg'; ?>" alt="">
                                            <span class="text-center text-blue text-lg font-medium">Монтаж</span>
                                            <img class="absolute arrow__slide__install -right-14 bottom-0" src="<?php echo get_template_directory_uri() . '/img/new_img/install/arrow__left.svg'; ?>" alt="">
                                        </div>
                                    </li>
                                    <li class="swiper-slide">
                                        <div class=" relative bg-white rounded-lg ">
                                            <img src="<?php echo get_template_directory_uri() . '/img/new_img/install/five.svg'; ?>" alt="">
                                            <span class="text-center text-blue text-lg font-medium">Оплата</span>
                                            <img class="absolute arrow__slide__install -right-14 top-0" src="<?php echo get_template_directory_uri() . '/img/new_img/install/arrow__right.svg'; ?>" alt="">
                                        </div>
                                    </li>
                                    <li class="swiper-slide">
                                        <div class="mt-10 relative bg-white rounded-lg ">
                                            <img src="<?php echo get_template_directory_uri() . '/img/new_img/install/six.svg'; ?>" alt="">
                                            <span class="text-center text-blue text-lg font-medium">Уборка и анкета качества</span>
                                            <img class="absolute arrow__slide__install -right-14 bottom-0" src="<?php echo get_template_directory_uri() . '/img/new_img/install/arrow__left.svg'; ?>" alt="">
                                        </div>
                                    </li>
                                    
                                </ul> 
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Отзывы -->
                 <section class="page-section-4 pt-8 md:pt-24 review">
                    <div class="container relative">   

                       

                        <div class=" w-0 min-w-[100%]">
                            <h2 class='text-center py-10'>Ознакомьтесь с отзывами <span class="py-2 px-5 bg-blue rounded-xl text-white">клиентов</span></h2>

                    

                            <script src="https://res.smartwidgets.ru/app.js" defer></script>
                            <div class="sw-app" data-app="71e4438fe9387438b1a32b5ad861100b"></div>

                            <script>
                            const initElement = () => {
                                setTimeout(() => {
                                    const element = document.querySelector('.sw-review-bottom a');
                                    element.style.removeProperty('display',); 
                                    element.style.setProperty('display', 'none'); 
                                    console.log(element);
                                }, 2000);
                            }


                                initElement()
                            </script>
                           
                        </div>
                    </div>
                </section> 
               
                <!-- Карта -->
                <section class="pt-8 md:pt-24 review">
                    <div class="container">   
                        <h2 class='text-center py-10'>Ещё мы работаем в Партизанске, Ливадии, Врангеле, Большом Камне, и Фокино.</h2>
                    </div>
                    
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7eac3cdb49c8074a168d866e8338bbab5926a3ad8752eb7e829a4324796c3151&amp;width=100%25&amp;height=638&amp;lang=ru_RU&amp;scroll=true"></script>
                    

                    <div class="container relative">   
                        <div class="map__contact xs:left-[0px] sm:left-[100px] md:left-[180px] flex rounded-3xl py-4 px-10 bg-white absolute bottom-0 sm:justify-start md:justify-center items-center gap-10 flex-col md:flex-row">
                            <div class="transform hover:scale-105 transition-all flex gap-2 justify-center items-center">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/call.svg'; ?>">
                                <a class="font-medium" href="tel:+79532109127">+7-953-210-91-27</a>
                            </div>
                            <div class="transform hover:scale-105 transition-all flex gap-2 justify-center items-center">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/call.svg'; ?>">
                                <a class="font-medium" href="tel:+74236640999">+7-4236-640-999</a>
                            </div>
                            <div class="transform hover:scale-105 transition-all flex gap-2 justify-center items-center">
                                <img src="<?php echo get_template_directory_uri() . '/img/new_img/icons/email.svg'; ?>">
                                <a class="font-medium" href="mailto:geometry.z2023@mail.ru">geometry.z2023@mail.ru</a>
                            </div>
                            <div class="flex gap-3">
                                <a href="https://api.whatsapp.com/send/?phone=79532109127">
                                    <img class="transform hover:scale-105 shadow-black hover:shadow-2xl transition-all" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/sap.svg'; ?>">
                                </a>
                                
                                <a href="https://www.instagram.com/geometry_nhk/">
                                <img class="transform hover:scale-105 shadow-black hover:shadow-2xl transition-all" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/inst.svg'; ?>">
                                </a>

                                <a href="https://t.me/geometry_nhk">
                                    <img class="transform hover:scale-105 shadow-black hover:shadow-2xl transition-all" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/tg.svg'; ?>">
                                </a>

                                <a href="https://vk.com/geometry_nhk">
                                    <img class="transform hover:scale-105 shadow-black hover:shadow-2xl transition-all" src="<?php echo get_template_directory_uri() . '/img/new_img/icons/vk.svg'; ?>">
                                </a>

                            </div>
                        </div>
                    </div>
                </section>
            </main>


            

<?php
get_sidebar();
get_footer();
