<div class="benefits-partners">
    <div class="benefits">
        <img src="<?= esc_url( get_template_directory_uri() . '/assets/images/why-choose.png' ); ?>">
        <div class="text">
            <div class="h5-line">
                <h5>Our benefits</h5>
                <div class="line"></div>
            </div>
            <h3>Few Reasons Why You<br>Should Choose Us</h3>
            <p>Our team applies its wide-ranging experience to determining the strategies that will best enable our clients to achieve clear, long-term objectives.</p>
            <div class="paragraphs">
                <div class="paragraph">
                    <span class="icon">
                        <i class="fa-solid fa-layer-group"></i>
                    </span>
                    <div class="paragraph-text">
                        <h2>Product Designs</h2>
                        <p>High standards of professionalism, integrity. Establishment of close working relationships.</p>
                    </div>
                </div>
                <div class="paragraph">
                    <span class="icon">
                        <i class="fa-regular fa-handshake"></i>
                    </span>
                    <div class="paragraph-text">
                        <h2>Big Data Analysis</h2>
                        <p>Statistical analysis to help an organization to gain insights from large information web sets.</p>
                    </div>
                </div>
                <div class="paragraph">
                    <span class="icon">
                        <i class="fa-regular fa-handshake"></i>
                    </span>
                    <div class="paragraph-text">
                        <h2>Mantain App Data</h2>
                        <p>We Create the optimal platform to develop and run digital applications for our clients app.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="partners mt-5">
        <script>
            window.onLoad = function(){
                var swiper = new Swiper(".swiper", {
                    pagination: {
                        el: '.swiper-pagination',
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    scrollbar: {
                        el: '.swiper-scrollbar',
                    },
                });
                if(swiper){
                    console.log("SWIPER LOADED?");
                } else {
                    console.log("SWIPER NOT FOUND");
                }
            };
        </script>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?= esc_url( get_template_directory_uri() . '/assets/images/brand1.png' ); ?>" >
                </div>
                <div class="swiper-slide">
                    <img src="<?= esc_url( get_template_directory_uri() . '/assets/images/brand2.png' ); ?>" >
                </div>
                <div class="swiper-slide">
                    <img src="<?= esc_url( get_template_directory_uri() . '/assets/images/brand3.png' ); ?>" >
                </div>
                <div class="swiper-slide">
                    <img src="<?= esc_url( get_template_directory_uri() . '/assets/images/brand4.png' ); ?>" >
                </div>
                <div class="swiper-slide">
                    <img src="<?= esc_url( get_template_directory_uri() . '/assets/images/brand5.png' ); ?>" >
                </div>
                <div class="swiper-slide">
                    <img src="<?= esc_url( get_template_directory_uri() . '/assets/images/brand6.png' ); ?>" >
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>            
    </div>
</div>