<script>
    function enableColorChangeAtScroll(x){
        if(x.matches){
            window.addEventListener('scroll', () => {
                const scrollTop = window.scrollY;
                const windowHeight = window.innerHeight;
                const documentHeight = document.body.clientHeight;

                const scrollPercentage = (scrollTop / (documentHeight - windowHeight)) * 100;
                if (scrollPercentage > 1) {
                    navElement.classList.add('nav-scroll');
                    logoElement.src = 'wp-content/themes/techpros/assets/images/logo-transparent.png';
                } else {
                    navElement.classList.remove('nav-scroll');
                    logoElement.src = 'wp-content/themes/techpros/assets/images/main-logo.png';
                }
            });
        }
    }

    function openHamburgerMenu() {
        const hamburger = document.getElementsByClassName('hamburger');
        if(!hamburger.classList.contains('hamburger-is-open')){
            hamburger.classList.add('hamburger-is-open');
        } else {
            hamburger.classList.remove('hamburger-is-open');
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const navElement = document.getElementById('navbar');
        const logoElement = document.getElementById('logo');
        var x = window.matchMedia("(max-width: 1023px)");
        enableColorChangeAtScroll(x);
    });
</script>
<nav id="navbar">
    <img id="logo" src="wp-content/themes/techpros/assets/images/main-logo.png">
    <!-- START OF MOBILE -->
    <div class="mobile-menu">
        <h5>TechPros</h5>
        <div onclick="openHamburgerMenu()" class="hamburger">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>
        <div class="mobile-nav-links">
            <div class="nav-link">
                <a href="#">Home</a>
                <div class="dropdown">
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
                <div class="dropdown">
                    <a href="#">About Us Two</a>
                    <a href="#">Why Choose Us</a>
                    <a href="#">Team Member</a>
                    <a href="#">Single Team</a>
                    <a class="link-with-sub-menu" href="#">Portfolio</a>
                        <div class="sub-menu">
                            <a href="#">Portfolio Two</a>
                            <a href="#">Portfolio Three</a>
                        </div>
                    <a class="link-with-sub-menu" href="#">Our Service</a>
                        <div class="sub-menu">
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
                <div class="dropdown">
                    <a href="#">IT Services</a>
                    <a href="#">Managed IT Services</a>
                    <a href="#">Industries</a>
                    <a href="#">Business Solutions</a>
                    <a href="#">IT Services Details</a>
                </div>
            </div>
            <div class="nav-link">
                <a href="#">Elements</a>
                <div class="dropdown">
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
                <div class="dropdown">
                    <a href="#">Blog List</a>
                    <a href="#">Blog Grid</a>
                    <a href="#">Blog 2column</a>
                </div>
            </div>
            <div class="nav-link">
                <a href="#">Contact</a>
                <div class="dropdown">
                    <a href="#">Contact Style One</a>
                    <a href="#">Contact Style Two</a>
                    <a href="#">Contact Style Three</a>
                    <a href="#">Contact Style Four</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF MOBILE -->
    <div class="nav-links">
        <div class="nav-link">
            <a href="#">Home</a>
            <div class="dropdown">
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
            <div class="dropdown">
                <a href="#">About Us Two</a>
                <a href="#">Why Choose Us</a>
                <a href="#">Team Member</a>
                <a href="#">Single Team</a>
                <a class="link-with-sub-menu" href="#">Portfolio</a>
                    <div class="sub-menu">
                        <a href="#">Portfolio Two</a>
                        <a href="#">Portfolio Three</a>
                    </div>
                <a class="link-with-sub-menu" href="#">Our Service</a>
                    <div class="sub-menu">
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
            <div class="dropdown">
                <a href="#">IT Services</a>
                <a href="#">Managed IT Services</a>
                <a href="#">Industries</a>
                <a href="#">Business Solutions</a>
                <a href="#">IT Services Details</a>
            </div>
        </div>
        <div class="nav-link">
            <a href="#">Elements</a>
            <div class="dropdown">
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
            <div class="dropdown">
                <a href="#">Blog List</a>
                <a href="#">Blog Grid</a>
                <a href="#">Blog 2column</a>
            </div>
        </div>
        <div class="nav-link">
            <a href="#">Contact</a>
            <div class="dropdown">
                <a href="#">Contact Style One</a>
                <a href="#">Contact Style Two</a>
                <a href="#">Contact Style Three</a>
                <a href="#">Contact Style Four</a>
            </div>
        </div>
    </div>
    <button>Get a quote</button>
</nav>