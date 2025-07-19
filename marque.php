<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<section class="marquee-one">
    <div class="container-fluid p-0">
        <div class="swiper-slider marquee">
            <div class="swiper-wrapper">
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="Belgelendirme">Belgelendirme</h2>
                    </div>
                </article>
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="Kalite Kontrol Desteği">Kalite Kontrol Desteği</h2>
                    </div>
                </article>
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="Kaynak Mühendisliği">Kaynak Mühendisliği</h2>
                    </div>
                </article>
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="İSO Danışmanlık">İSO Danışmanlık</h2>
                    </div>
                </article>
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="İSO Danışmanlık">İSO Danışmanlık</h2>
                    </div>
                </article>
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="İSO Danışmanlık">İSO Danışmanlık</h2>
                    </div>
                </article>
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="İSO Danışmanlık">İSO Danışmanlık</h2>
                    </div>
                </article>
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="İSO Danışmanlık">İSO Danışmanlık</h2>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".marquee", {
        slidesPerView: "auto",
        loop: true,
        allowTouchMove: false, // Kullanıcının kaydırmasını engelle
        speed: 20000, // Daha yavaş ve sabit hız
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        freeMode: true,
        freeModeMomentum: false, // ivme etkisini devre dışı bırak
        grabCursor: false,
    });
</script>

<style>
    .marquee-one .swiper-slide {
        width: auto !important;
    }

    .pbmit-marquee-effect-style-1 {
        padding: 0 2rem;
    }

    .pbmit-element-title {
        font-size: 2rem;
        white-space: nowrap;
    }
</style>