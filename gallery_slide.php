<section class="gallery_slide gallery">
    <h2>
        <span>Always Remember</span>
        <span>Our Moments</span>
    </h2>

    <div id="my-gallery" class="myswiper">
        <div class="swiper-wrapper">
            <figure class="swiper-slide" itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_4.webp" data-pswp-width="1024" data-pswp-height="683" >
                <img src="./css/images/wedding_4.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure class="swiper-slide" itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_9.webp" data-pswp-width="1024" data-pswp-height="1536" >
                <img src="./css/images/wedding_9.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure class="swiper-slide" itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_8.webp" data-pswp-width="1024" data-pswp-height="1536" >
                <img src="./css/images/wedding_8.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure class="swiper-slide" itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_17.webp" data-pswp-width="1024" data-pswp-height="1536" >
                <img src="./css/images/wedding_17.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure class="swiper-slide" itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_6.webp" data-pswp-width="1024" data-pswp-height="1536" >
                <img src="./css/images/wedding_6.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure class="swiper-slide" itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_22.webp" data-pswp-width="1024" data-pswp-height="1536" >
                <img src="./css/images/wedding_22.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure class="swiper-slide" itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_14.webp" data-pswp-width="1024" data-pswp-height="683" >
                <img src="./css/images/wedding_14.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure class="swiper-slide" itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_11.webp" data-pswp-width="1024" data-pswp-height="1536">
                <img src="./css/images/wedding_11.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
        </div>
        <div class="gallery-btn-wrap">
            <button class="swiper-button-prev"></button>
            <button class="swiper-button-next"></button>
        </div>  
    </div>
</section>


<script>
    //swipe 적용
    let galleryswiper = new Swiper(".myswiper", {
    direction: 'horizontal',
    slidesPerView: 1,
    speed: 1500,
    autoplay: {
        delay: 2000,
        disableOnInteraction:false 
    },
    loop: true,   
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    }
  });
</script>
<script type="module">
    import PhotoSwipeLightbox from './js/photoswipe-lightbox.esm.min.js';
    const lightbox = new PhotoSwipeLightbox({
        gallery: '#my-gallery',
        children: 'a',
        zoom: false,
        showHideAnimationType: 'fade',
        showAnimationDuration: 500,
        hideAnimationDuration: 500,
        imageClickAction: 'next',
        tapAction: 'next',
        pswpModule: () => import('./js/photoswipe.esm.min.js')
        
    });
    lightbox.init();
</script>