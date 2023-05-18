<div class="gallery_grid gallery-page">
    <h2>
        <span>Always Remember</span>
        <span>Our Moments</span>
    </h2>

    <div id="my-gallery">
        <div class="flexwrap">
            <figure itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_4.webp" data-pswp-width="1024" data-pswp-height="683" >
                <img src="./css/images/thumb_wedding_4.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_9.webp" data-pswp-width="1024" data-pswp-height="1536" >
                <img src="./css/images/thumb_wedding_9.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_8.webp" data-pswp-width="1024" data-pswp-height="1536" >
                <img src="./css/images/thumb_wedding_8.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
        </div>
        <div class="flexwrap">
            <figure itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_17.webp" data-pswp-width="1024" data-pswp-height="1536" >
                <img src="./css/images/thumb_wedding_17.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_6.webp" data-pswp-width="1024" data-pswp-height="1536" >
                <img src="./css/images/thumb_wedding_6.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_22.webp" data-pswp-width="1024" data-pswp-height="1536" >
                <img src="./css/images/thumb_wedding_22.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
        </div>
        <div class="flexwrap">
            <figure itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_1.webp" data-pswp-width="1024" data-pswp-height="683" >
                <img src="./css/images/thumb_wedding_1.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_14.webp" data-pswp-width="1024" data-pswp-height="683" >
                <img src="./css/images/thumb_wedding_14.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure itemprop="associatedMedia" itemscope>
            <a href="./css/images/wedding_11.webp" data-pswp-width="1024" data-pswp-height="1536">
                <img src="./css/images/thumb_wedding_11.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
        </div>
    </div>
</div>

<script type="module">
    import PhotoSwipeLightbox from './js/photoswipe-lightbox.esm.min.js';
    const lightbox = new PhotoSwipeLightbox({
        gallery: '#my-gallery',
        children: 'a',
        pswpModule: () => import('./js/photoswipe.esm.min.js')
    });
    lightbox.init();
</script>