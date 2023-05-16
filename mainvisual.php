<section class="mainvisual">
    <figure class="bg">
        <img src="./css/images/main_bg_1.webp" alt="배경이미지1">
        <div></div>
    </figure>
    <div class="mainvisual-wrap">
        <h2>
            <span>Jung Minhyun</span>
            <span>Lee Juyeon</span>
        </h2>
        <div class="swiper">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <figure class="mainpic"><img src="./css/images/wedding_5.webp" alt=""></figure>
                </li>
                <li class="swiper-slide">
                    <figure class="mainpic"><img src="./css/images/wedding_6.webp" alt=""></figure>
                </li>
            </ul>
        </div>
        <div class="flex_wrap">
            <p>우리의 결혼을 축복해 주세요</p>
            <p>2023 / 9 / 8</p>
        </div>

        <div class="btn-wrap">
            <button class="swiper-button-prev"></button>
            <button class="swiper-button-next"></button>
        </div>
    </div>
</section>

<script>
    const swiper = new Swiper('.swiper', {        
        loop: true,          
        autoplay: {
            delay: 5000,
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