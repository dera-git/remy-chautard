(function ($) {
    "use strict";

    let initSwiper = false;
    let swiper;
    const progressBar = document.querySelector('.kl-breadcrumb-line-progress');

    $(document).ready(function () {
        $('.kl-navbar-toggler').on('click', function(){
            if($(this).hasClass('collapsed')){
                $('body').removeClass('kl-menu-is-show');
            } else {
                $('body').addClass('kl-menu-is-show');
            }
        });

        $('.kl-close-menu').on('click', function(){
            document.querySelector('.kl-navbar-toggler').click();
        });
          
        initializeSwiper();
    });

    $(window).on('resize orientationchange', function () {
        initializeSwiper();
    });


    function initializeSwiper() {
        if (window.innerWidth >= 768) {
            if (!initSwiper) {
                initSwiper = true;
                swiper = new Swiper(".kl-swiper-container", {
                    slidesPerView: "auto",
                    freeMode: true,
                    mousewheel: {
                        releaseOnEdges: true,
                        sensitivity: 3,
                    },
                });

                if(progressBar) {
                    swiper.on('progress', () => {
                        const progress = swiper.progress;
                        progressBar.style.width = `${progress * 100}%`;
                    });
                }
            }
        } else if (initSwiper) {
            swiper.destroy();
            initSwiper = false;
        }
    }

    // Load more posts 
    const btnLoadMore = document.querySelector('.js-load-more-post')
    const itemPost = document.querySelectorAll('.kl-animate-block')

    btnLoadMore?.addEventListener('click', () => {
        btnLoadMore.style.display = 'none'

        itemPost.forEach((item) => {
            item.className = item.className !== 'show kl-card-post' ? 'show kl-card-post' : 'hide';
            if (item.className === 'show kl-card-post') {
                setTimeout(function () {
                    item.style.display = 'block';
                    if(swiper) { swiper.update(); }
                }, 0);
            }
            if (item.className === 'hide') {
                setTimeout(function () {
                    item.style.display = 'none';
                    if(swiper) { swiper.update(); }
                }, 700);
            }
        })
    })

})(jQuery);

