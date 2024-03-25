<?php

/*
Template Name: О нас - страница
*/

get_header('second');
?>


<main>

            <section class="pt-24">
                <div class="container">

                    <div class="breadcrumb">
                        <ul class="breadcrumb__list flex items-center justify-start gap-2">
                            <li class="breadcrumb__item text-bg-black opacity-60 ">
                                <a href="/" class="font-medium">
                                    Главная
                                </a>
                            </li>
                            <li class="opacity-60 text-bg-black">
                                -
                            </li>
                            <li class="breadcrumb__item">
                                <span class="font-medium text-bg-black">О нас</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>



            <h1 class="visually-hidden">Территория натуральных продуктов</h1>
            <!-- Главный экран -->
                <section class="relative pt-2">
                    <div class="container">
                        <h2>
                            О нашей компании
                        </h2>

                        <p class="text-black opacity-70 py-2">
                            Наша компания работает с 2015 года и выполняет самые сложные современные проекты в Находкинском Городском округе. 
                        </p>

                        <p class="text-black opacity-70 py-2">
                            С началом своей деятельности - сосредоточили внимание на внедрении дизайнерских потолков и развитии в ногу с трендами.
                        </p>

                        <p class="text-black opacity-70 py-2">
                            ГЕОМЕТРИЯ — это сплоченная профессиональная команда специалистов, прилагающая максимум усилий, что позволяет в максимально сжатые сроки выполнять заказы любого уровня сложности. 
                            Все сотрудники компании прошли обучение и начали работу с такими премиальными профильными системами, как KRAAB systems, FLEXY, Lumfer и др. 
                        </p>

                        <p class="text-black opacity-70 py-2">
                           На данный момент мы сохраняем лидерскую позицию в округе по обьемам работ и количеству довольных клиентов. На счету компании Геометрия более 5000 закрытых обьектов.
                        </p>
                    </div>
                </section> 

                <!-- Качество -->
                <section class="pt-6 sm:pt-12 md:pt-14">
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

                <!-- Наши сотрудники -->
                <section class="relative pt-6 sm:pt-12 md:pt-14">
                <div class="container">
                    <h2 class="py-5 text-start">
                        Наши сотрудники
                    </h2>
                    
                    <div class="grid md:flex flex-wrap justify-start items-center team__list py-5">

                        <div class="flex justify-center items-center flex-col">
                            <div>
                                <img class="h-[320px] rounded-2xl w-[290px] object-cover" src="<?php echo get_template_directory_uri() . '/img/new_img/man_1.jpeg'; ?>" alt="тут будет фото сотрудника">
                            </div>
                            <p class="font-semibold py-4">Манаков Сергей Николаевич</p>
                            <p class="pb-2" style="text-wrap: balance;">Руководитель компании</p>
                        </div>

                        <div class="flex justify-center items-center flex-col">   
                            <div>
                                <img class="h-[320px] rounded-2xl w-[290px] object-cover" src="<?php echo get_template_directory_uri() . '/img/new_img/man_2.jpeg'; ?>" alt="тут будет фото сотрудника">
                            </div>
                            <p class="font-semibold py-4">Рахвалов Роман Алексеевич </p>
                            <p class="pb-2" style="text-wrap: balance;">Менеджер по продажам</p>
                        </div>

                        <div class="flex justify-center items-center flex-col">   
                            <div>
                                <img class="h-[320px] rounded-2xl w-[290px] object-cover" src="<?php echo get_template_directory_uri() . '/img/new_img/man_3.jpeg'; ?>" alt="тут будет фото сотрудника">
                            </div>
                            <p class="font-semibold py-4">Минаев Семен Олегович</p>
                            <p class="pb-2" style="text-wrap: balance;">Специалист монтажного производства</p>
                        </div>

                        <div class="flex justify-center items-center flex-col">  
                            <div>
                                <img class="h-[320px] rounded-2xl w-[290px] object-cover" src="<?php echo get_template_directory_uri() . '/img/new_img/man_4.jpeg'; ?>" alt="тут будет фото сотрудника">
                            </div>
                            <p class="font-semibold py-4">Рождествин Михаил Викторович</p>
                            <p class="pb-2" style="text-wrap: balance;">Специалист можнтажного производства</p>
                        </div>
                </div>
                </section> 

                <!-- Баннер -->
                <section class="relative h-[600px] pt-6 sm:pt-12 md:pt-14">
                    <img class="banner__img__main h-[600px]" src="<?php echo get_template_directory_uri() . '/img/new_img/bg-final.png'; ?>">

                    <div class="container relative flex justify-center">
                        <div class="absolute banner__container__top">
                            <h2 class="text-center text-white pt-4">Клиенты доверяют <br> нам <span class="py-2 px-5 bg-blue rounded-xl text-white">не первый год</span></h2>
                            <p class="text-center text-white py-10">Доверьтесь и вы! Запишитесь на бесплатный замер, <br> наш мастер приедет к вам в ближайшее свободное время</p>
                                <?php echo do_shortcode('[contact-form-7 id="534" title="Заявка в футере"]'); ?>

                        </div>
                    </div>

                    
                    <div class="banner__container__bottom flex rounded-3xl py-4 px-10 bg-white sm:justify-start md:justify-center items-center gap-10 flex-row flex-wrap -bottom-72 md:bottom-0 absolute">
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
                </section>
            </main>

            

<?php get_footer();