<div class="account">
    <h3>마음 전하실 곳</h3>

    <ul>
        <li>
            <a href="#">신랑 측에게 마음 전하기</a>
            <ul>
                <li>
                    <p>
                        신한은행 123-45-56789
                        <span>정민현</span>
                    </p>
                    <div class="btn-wrap"><button class="acc_copy" data-clipboard-text="123456789" >계좌 복사</button></div>
                </li>
                <li>
                    <p>
                        국민은행 123-45-56789
                        <span>정진한</span>
                    </p>
                    <div class="btn-wrap"><button class="acc_copy" data-clipboard-text="123456789">계좌 복사</button></div>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">신부 측에게 마음 전하기</a>
            <ul>
                <li>
                    <p>
                        신한은행 123-45-56789
                        <span>이주연</span>
                    </p>
                    <div class="btn-wrap"><button class="acc_copy" data-clipboard-text="123456789">계좌 복사</button></div>
                </li>
                <li>
                    <p>
                        국민은행 123-45-56789
                        <span>이형규</span>
                    </p>
                    <div class="btn-wrap"><button class="acc_copy" data-clipboard-text="123456789">계좌 복사</button></div>
                </li>
            </ul>
        </li>
    </ul>
</div>

<script>
    $('.account>ul>li>ul').slideUp()

    $('.account>ul>li>a').click(function(e){
        e.preventDefault();        
        $(this).siblings('ul').slideToggle(500)
        $(this).toggleClass('active')
    })

    new ClipboardJS('.acc_copy')
</script>