<?php
/*
Template Name: 404 - страница
*/
get_header();
?>


<body class="wrapper section__404">
    <section>
        <div class="box">
            <div class="box__ghost">
                <div class="symbol"></div>
                <div class="symbol"></div>
                <div class="symbol"></div>
                <div class="symbol"></div>
                <div class="symbol"></div>
                <div class="symbol"></div>
                
                <div class="box__ghost-container">
                <div class="box__ghost-eyes">
                    <div class="box__eye-left"></div>
                    <div class="box__eye-right"></div>
                </div>
                <div class="box__ghost-bottom">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                </div>
                <div class="box__ghost-shadow"></div>
            </div>
            
            <div class="box__description">
                <div class="box__description-container">
                <div class="box__description-title">Whoops!</div>
                <div class="box__description-text">It seems like we couldn't find the page you were looking for</div>
                </div>
                
                <a href="/" target="_blank" class="box__button">Go back</a>
                
            </div>
            
            </div>
    </section>


    <script src="js/module/404.js"></script>
</body>


<?php get_footer(); ?>