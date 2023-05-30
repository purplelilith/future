<div class="share">
    <div class="btn-wrap">
        <button id="kakaotalk-sharing-btn">카카오톡 공유</button>
        <button class="url_copy" data-clipboard-text="123456789">URL 복사</button>
    </div>
</div>

<script>
    new ClipboardJS('.url_copy')
</script>

<script>
    Kakao.Share.createScrapButton({
    container: '#kakaotalk-sharing-btn',
    requestUrl: 'https://developers.kakao.com',
    templateId: kakaotalk-sharing-btn,
    });
</script>