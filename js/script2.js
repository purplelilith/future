$(function(){

    /* nav 생기는 스크립트 */
    // 처음에는 안보이게 숨기기
    $("nav").hide();
    //  스크롤 탑 + fadein 효과 
    $(window).scroll(function(){
        var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
        var scrollTop = $(this).scrollTop() 
        if(	scrollTop > 200 && scrollBottom > 20){	
            $("nav").fadeIn(200);	
        }
        else{	
            $("nav").fadeOut(200);	
        }			
    });


    //nav 전화 버튼 팝업
    $('.nav-btn').click(function(e){
        e.preventDefault()
        $(this).parents('nav').toggleClass('on')
        $('.backdrop').toggleClass('on')
    })
    $('.cancel').click(function(e){
        e.preventDefault()
        $('nav').removeClass('on')
        $('.backdrop').removeClass('on')
    })

    /* gallery grid 형식에서 버튼 눌렀을 때 펼쳐지고 닫히기 */
    $('.fold').slideUp(0)
    $('#btn_fold').click(function(){
        $('.fold').slideToggle(500)
        $('#btn_fold').toggleClass('on')
    })

    /* account 아코디언 스크립트 */
    $('.account>ul>li>ul').slideUp()
                
    $('.account>ul>li>a').click(function(e){
        e.preventDefault();        
        $(this).siblings('ul').slideToggle(500)
        $(this).toggleClass('active')
    })

    //mainvisual swiper
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


    //swipe
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

    /* 복사하기 */
    var clipboard = new ClipboardJS('.copy')
    /* alert  */
/*     const notification = document.getElementById('alert-pop')
    // Show notification
    const showNotification = () => {
        notification.classList.add('show')
        setTimeout(() => {
            notification.classList.remove('show')
        }, 2000)
    } */

    Kakao.Share.createScrapButton({
        container: '#kakaotalk-sharing-btn',
        requestUrl: 'http://local.future.com',
        templateId: 94449
    });
    
    function fnShowNotification(){
        $('#alert-pop').addClass('show')
        setTimeout(()=>{
            $('#alert-pop').removeClass('show')
        }, 2000)
    }
    clipboard.on('success', function(){
        /* alert jquery */
        fnShowNotification()
    })

});//ready

