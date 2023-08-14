<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navElement = document.getElementById('navbar');
        const logoElement = document.getElementById('logo');

        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            const windowHeight = window.innerHeight;
            const documentHeight = document.body.clientHeight;

            // Calcola la percentuale di scroll
            const scrollPercentage = (scrollTop / (documentHeight - windowHeight)) * 100;
            console.log(scrollPercentage);
            // Cambia il colore in base alla percentuale di scroll
            if (scrollPercentage > 1) {
                navElement.classList.add('nav-scroll');
                logoElement.src = 'wp-content/themes/techpros/assets/images/logo-transparent.png';
            } else {
                navElement.classList.remove('nav-scroll');
                logoElement.src = 'wp-content/themes/techpros/assets/images/main-logo.png';
            }
        });

        /*const mainLinks = document.querySelectorAll('.nav-link');

        console.log(mainLinks);

        mainLinks.forEach(link => {
            link.addEventListener("mouseover", () => {
                mainLinks.forEach(otherLink => {
                    if (otherLink !== link) {
                        otherLink.querySelector('.drop-down');
                    }
                });
                const dropDown = link.querySelector('.drop-down');
                dropDown.classList.add('show');
            });

            link.addEventListener("mouseout", () => {
                const dropDown = link.querySelector('.drop-down');
                dropDown.classList.remove('show');
            });
        });*/
    });
</script>

<nav id="navbar" class="d-flex flex-row">
    <img id="logo" src="wp-content/themes/techpros/assets/images/main-logo.png">
    <div class="nav-links d-flex flex-row">
        <div class="nav-link">
            <a href="#">Home</a>
            <div class="drop-down">
                <a href="#">HOME ONE</a>
                <a href="#">HOME TWO</a>
                <a href="#">HOME THREE</a>
                <a href="#">HOME FOUR</a>
                <a href="#">HOME FIVE</a>
                <a href="#">HOME SIX</a>
                <a href="#">FAQ</a>
            </div>
        </div>
        <div class="nav-link">
            <a href="#">Company</a>
            <div class="drop-down">
                <a href="#">About Us Two</a>
                <a href="#">Why Choose Us</a>
                <a href="#">Team Member</a>
                <a href="#">Single Team</a>
                <a href="#">Portfolio</a>
                    <div class="drop-down sub-menu">
                        <a href="#">Portfolio Two</a>
                        <a href="#">Portfolio Three</a>
                    </div>
                <a href="#">Our Service</a>
                    <div class="drop-down sub-menu">
                        <a href="#">Our Service Two</a>
                        <a href="#">Our Service Three</a>
                    </div>
                <a href="#">Case study</a>
                <a href="#">Pricing plan</a>
                <a href="#">Faq</a>
            </div>
        </div>
        <div class="nav-link">
            <a href="#">IT Solution</a>
            <div class="drop-down">
                <a href="#">IT Services</a>
                <a href="#">Managed IT Services</a>
                <a href="#">Industries</a>
                <a href="#">Business Solutions</a>
                <a href="#">IT Services Details</a>
            </div>
        </div>
        <div class="nav-link">
            <a href="#">Elements</a>
            <div class="drop-down">
                <a href="#">Services</a>
                <a href="#">Info Box</a>
                <a href="#">Pricing Plan</a>
                <a href="#">Team</a>
                <a href="#">Countdown</a>
                <a href="#">Accordion</a>
            </div>
        </div>
        <div class="nav-link">
            <a href="#">Blog</a>
            <div class="drop-down">
                <a href="#">Blog List</a>
                <a href="#">Blog Grid</a>
                <a href="#">Blog 2column</a>
            </div>
        </div>
        <div class="nav-link">
            <a href="#">Contact</a>
            <div class="drop-down">
                <a href="#">Contact Style One</a>
                <a href="#">Contact Style Two</a>
                <a href="#">Contact Style Three</a>
                <a href="#">Contact Style Four</a>
            </div>
        </div>
    </div>
    <button>Get a quote</button>
</nav>