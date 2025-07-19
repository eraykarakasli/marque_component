<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dikey Marquee Swiper</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #111;
            font-family: Arial, sans-serif;
            color: white;
        }

        .marquee-vertical {
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .marquee-vertical .swiper {
            height: 100%;
            width: 100%;
        }

        .marquee-vertical .swiper-wrapper {
            display: flex;
            flex-direction: column;
        }

        .marquee-vertical .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
            font-size: 2rem;
            white-space: nowrap;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .pbmit-element-title {
            margin: 0;
        }
    </style>
</head>

<body>

    <section class="marquee-vertical">
        <div class="swiper marquee-vertical-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <h2 class="pbmit-element-title">Belgelendirme</h2>
                </div>
                <div class="swiper-slide">
                    <h2 class="pbmit-element-title">Kalite Kontrol Desteği</h2>
                </div>
                <div class="swiper-slide">
                    <h2 class="pbmit-element-title">Kaynak Mühendisliği</h2>
                </div>
                <div class="swiper-slide">
                    <h2 class="pbmit-element-title">İSO Danışmanlık</h2>
                </div>
                <div class="swiper-slide">
                    <h2 class="pbmit-element-title">Muayene Hizmetleri</h2>
                </div>
                <div class="swiper-slide">
                    <h2 class="pbmit-element-title">Ürün Takibi</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".marquee-vertical-swiper", {
            direction: "vertical", // Dikey kayma
            loop: true, // Sonsuz döngü
            slidesPerView: "auto", // Aynı anda birkaç öğe gösterebilir
            spaceBetween: 0,
            speed: 2000, // Tüm döngünün süresi (ms cinsinden)
            allowTouchMove: false, // Kullanıcı müdahalesi kapalı
            autoplay: {
                delay: 0, // Duraksamadan devam
                disableOnInteraction: false // Kullanıcı etkileşimi olsa bile durmasın
            },
            // freeMode kaldırıldı çünkü hız dengesizliği yaratıyordu
        });
    </script>


</body>

</html>