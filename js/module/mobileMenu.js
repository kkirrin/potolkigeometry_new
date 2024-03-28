export const initMobileMenu = () => {
    const body = document.querySelector('body');
    if(body) {
        const mobileMenu = document.querySelector('.mobile-menu')
        const mobileMenuButton = document.querySelector('.btn__menu--mobile')
        console.log(mobileMenuButton)
        console.log('Я Тут')
    
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
        console.log(mobileMenuLinks)
        const menuLinks = document.querySelectorAll('.menu a');
    
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', (evt) => {
                body.classList.remove('lock');
                mobileMenu.classList.remove('is-active');
                mobileMenuButton.classList.remove('active'); 
            });
        });

        mobileMenuButton.addEventListener('click', (evt) => {
            // evt.preventDefault();
            mobileMenuButton.classList.toggle('active');
            mobileMenu.classList.toggle('is-active');
            body.classList.toggle('lock');

        })
    

        menuLinks.forEach(link => {
            link.addEventListener('click', (evt) => {
                // menuButton.classList.remove('active');
                menu.classList.remove('is-active');
                body.classList.remove('lock');
            });
        })
  
    }
    
  }
