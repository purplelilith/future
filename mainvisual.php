<!-- <section class="mainvisual mainvisual1">
    <figure class="bg">
        <img src="./css/images/main_bg_1.webp" alt="배경이미지1">
        <div></div>
    </figure>
    <div class="mainvisual1-wrap">
        <h2>
            <span>Jung Minhyun</span>
            <span>Lee Juyeon</span>
        </h2>
        <div class="swiper">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <figure class="mainpic"><img src="./css/images/wedding_8.webp" alt=""></figure>
                </li>
                <li class="swiper-slide">
                    <figure class="mainpic"><img src="./css/images/wedding_5.webp" alt=""></figure>
                </li>
            </ul>
        </div>
        <div class="flex_wrap">
            <p>우리의 결혼을 축복해 주세요</p>
            <p>2023 / 9 / 8</p>
        </div>

        <div class="main-btn-wrap">
            <button class="swiper-button-prev"></button>
            <button class="swiper-button-next"></button>
        </div>
    </div>
</section> -->

<section class="mainvisual mainvisual2">
    <div class="swiper">
        <ul class="swiper-wrapper">
            <li class="swiper-slide">
                <img src="./css/images/wedding_8.webp" alt="">
            </li>
            <li class="swiper-slide">
                <img src="./css/images/wedding_5.webp" alt="">
            </li>
        </ul>        
    </div>
    <div class="mainvisual2_wrap">        
        <div class="textbox">
            <h2>
                <span>Jung Minhyun</span>
                <span>Lee Juyeon</span>
            </h2>
            <p>우리의 결혼을 축복해 주세요</p>
            <p>2023 / 9 / 8</p>
        </div>
        <div class="main-btn-wrap">
            <button class="swiper-button-prev"></button>
            <button class="swiper-button-next"></button>
        </div>
    </div>
</section>

<script>
    let mainswiper = new Swiper('.swiper', {        
        loop: true,          
        autoplay: {
            delay: 5000,
            disableOnInteraction:false 
        },            
        speed : 1000,  
        slidesPerView: 1,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }, 
    });

</script>