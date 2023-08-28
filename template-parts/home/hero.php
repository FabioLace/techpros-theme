<script>


    document.addEventListener("DOMContentLoaded", function() {

        const serviceWhiteElements = document.getElementsByClassName('service-white');
        const purpleIcons = document.getElementById('purple-icon');
        
        for (let i = 0; i < serviceWhiteElements.length; i++) {
            serviceWhiteElements[i].addEventListener('mouseenter', () => {
                console.log("hovered")
                purpleIcons.style.color = 'white';
            });

            serviceWhiteElements[i].addEventListener('mouseleave', () => {
                console.log("unhovered")
                purpleIcons.style.color = 'var(--secondary-color)';
            });
        }
    }); */
</script>

<div class="hero">
    <div class="hero-content">
        <div class="text">
            <h4 class="animate__animated animate__fadeInUp"> // Full Cycle IT Solution Services </h4>
            <h1 class="font-600 animate__animated animate__fadeInUp">End-To-End<br>Secure IT Service </h1>
            <p class="animate__animated animate__fadeInUp">
                Over the years, a wide range of developments and innovations in the
                global IT arena have led to many new IT-enabled
            </p>
        </div>
        <div class="hero-buttons animate__animated animate__fadeInUp">
            <button class="button how-it-works">
                How it works <i class="fa-solid fa-angle-right"></i>
            </button>
            <button class="button it-service">
                It service <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>
    </div>
    <div class="main-services">
        <div class="service service-1 service-white">
            <div class="service-content">
                <div class="icon-h2">
                    <i class="fa-solid fa-wallet" id="purple-icon"></i>
                    <h2>IT Consultancy</h2>
                </div>
                <div class="service-text">
                    There are many variations of passages of the Lorem Ipsum available, but this is an majority have suffered.
                </div>
            </div>
        </div>
        <div class="service service-2 service-purple">
            <div class="service-content">
                <div class="icon-h2">
                    <i class="fa-solid fa-microchip"></i>
                    <h2>Cyber Security</h2>
                </div>
                <div class="service-text">
                    There are many variations of passages of the Lorem Ipsum available, but this is an majority have suffered.
                </div>
            </div>
        </div>
        <div class="service service-3 service-white">
            <div class="service-content">
                <div class="icon-h2">
                    <i class="fa-solid fa-briefcase-clock" id="purple-icon"></i>
                    <h2>24/7 online support</h2>
                </div>
                <div class="service-text">
                    There are many variations of passages of the Lorem Ipsum available, but this is an majority have suffered.
                </div>
            </div>
        </div>
    </div>
</div>