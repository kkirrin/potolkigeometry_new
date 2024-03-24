export const initSlider = () => {

    // слайдер "Категории"
    const category = document.querySelector('.install');
    console.log('Я тут')
    if (category) {
        const item = new Swiper('.install-swiper', {
            loop: false,
            spaceBetween: 30,
            speed: 1500,
            breakpoints: {
                320: {
                    slidesPerView: 1.2,
                    spaceBetween: 20,
                },
                374: {
                    slidesPerView: 1.2,
                    spaceBetween: 20,
                },
                480: {
                    slidesPerView: 1.4,
                    spaceBetween: 20,
                },
                767: {
                    slidesPerView: 2,
                },
                1023: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
        });
    }
}
export const initProjectSlider = () => {

    // слайдер "Категории"
    const category = document.querySelector('.project');
    console.log('Я тут')
    if (category) {
        const item = new Swiper('.project-swiper', {
            loop: false,
            spaceBetween: 30,
            speed: 1500,
            breakpoints: {
                320: {
                    slidesPerView: 1.2,
                    spaceBetween: 20,
                },
                374: {
                    slidesPerView: 1.2,
                    spaceBetween: 20,
                },
                480: {
                    slidesPerView: 1.4,
                    spaceBetween: 20,
                },
                767: {
                    slidesPerView: 2,
                },
                1023: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
            navigation: {
                nextEl: '.project-next',
                prevEl: '.project-prev',
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
        });
    }
}
export const initReviewSlider = () => {

    // слайдер "Категории"
    const category = document.querySelector('.review');
    console.log('Я тут')
    if (category) {
        const item = new Swiper('.review-swiper', {
            loop: true,
            spaceBetween: 30,
            speed: 1500,
            breakpoints: {
                374: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                767: {
                    slidesPerView: 2,
                },
                1023: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
            navigation: {
                nextEl: '.next-review',
                prevEl: '.prev-review',
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
        });
    }
}
