<div class="gallery_grid gallery-page">
    <h2>
        <span>Always Remember</span>
        <span>Our Moments</span>
    </h2>

    <div class="pswp-gallery" id="my-gallery">
        <div class="flexwrap">
            <figure>
            <a href="./css/images/wedding_4.webp" itemprop="contentUrl">
                <img src="./css/images/thumb_wedding_4.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure>
            <a href="https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_b.jpg" itemprop="contentUrl" data-size="964x1024">
                <img src="./css/images/thumb_wedding_9.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure>
            <a href="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg" itemprop="contentUrl" data-size="1024x683">
                <img src="./css/images/thumb_wedding_8.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
        </div>
        <div class="flexwrap">
            <figure>
            <a href="https://farm3.staticflickr.com/2567/5697107145_a4c2eaa0cd_o.jpg" itemprop="contentUrl" data-size="1024x1024">
                <img src="./css/images/thumb_wedding_17.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure>
            <a href="https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_b.jpg" itemprop="contentUrl" data-size="964x1024">
                <img src="./css/images/thumb_wedding_6.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure>
            <a href="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg" itemprop="contentUrl" data-size="1024x683">
                <img src="./css/images/thumb_wedding_22.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
        </div>
        <div class="flexwrap">
            <figure>
            <a href="https://farm3.staticflickr.com/2567/5697107145_a4c2eaa0cd_o.jpg" itemprop="contentUrl" data-size="1024x1024">
                <img src="./css/images/thumb_wedding_1.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure>
            <a href="https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_b.jpg" itemprop="contentUrl" data-size="964x1024">
                <img src="./css/images/thumb_wedding_14.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
            <figure>
            <a href="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg" itemprop="contentUrl" data-size="1024x683">
                <img src="./css/images/thumb_wedding_11.webp" itemprop="thumbnail" alt="" />
            </a>
            </figure>
        </div>
    </div>
</div>

<script type="module">    
    import PhotoSwipeLightbox from './js/photoswipe-lightbox.esm.min.js';
    import './css/photoswipe.css'
    
    const lightbox = new PhotoSwipeLightbox({
    gallery: '#my-gallery',
    children: 'a',
    pswpModule: () => import('./js/photoswipe.esm.min.js')
    });
    lightbox.init();
</script>