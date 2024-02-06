
<?php
    //LAZY STUFF
    $homeArray = array();
    for($i = 0; $i < 6; $i++) {
        $homeArray[] = "<a href=\"#\">Home ". ($i+1)."</a>";
    }

    $companyArray = array(
        "<a href=\"#\">About Us Two</a>",
        "<a href=\"#\">Why Choose Us</a>",
        "<a href=\"#\">Team Member</a>",
        "<a href=\"#\">Single Team</a>"
    );

    $itSolutionArray = array(
        "<a href=\"#\">IT Services</a>",
        "<a href=\"#\">Managed IT Services</a>",
        "<a href=\"#\">Industries</a>",
        "<a href=\"#\">Business Solutions</a>",
        "<a href=\"#\">IT Services Details</a>",
    );

    $elementsArray = array(
        "<a href=\"#\">Services</a>",
        "<a href=\"#\">Info Box</a>",
        "<a href=\"#\">Pricing Plan</a>",
        "<a href=\"#\">Team</a>",
        "<a href=\"#\">Countdown</a>",
        "<a href=\"#\">Accordion</a>"
    );

    $contactsArray = array();
    for($i = 0; $i < 4; $i++) {
        $contactsArray[] = "<a href=\"#\">Contacts style ". ($i+1)."</a>";
    }

    function echoArray($array){
        for($i = 0; $i < count($array); $i++){
            echo $array[$i];
        }
    }
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navElement = document.getElementById('navbar');
        const logoElement = document.getElementById('logo');
        const mobileDropdownOpeners = document.querySelectorAll('.mobile-dropdown-opener');

        mobileDropdownOpeners.forEach(function (opener) {
            opener.addEventListener('click', function () {
                const parent = opener.parentElement;
                toggleDropdown(parent);
            });
        });

        function handleScroll() {
            const scrollTop = window.scrollY;
            const windowHeight = window.innerHeight;
            const documentHeight = document.body.clientHeight;

            const scrollPercentage = (scrollTop / (documentHeight - windowHeight)) * 100;
            if (scrollPercentage > 1) {
                navElement.classList.add('nav-scroll');
                //logoElement.src = 'app/themes/techpros/assets/images/logo-transparent.png';
            } else {
                navElement.classList.remove('nav-scroll');
                //logoElement.src = 'app/themes/techpros/assets/images/main-logo.png';
            }
        }

        handleScroll();
        window.addEventListener('scroll', handleScroll);
    });

    function openHamburgerMenu() {
        const hamburger = document.getElementById('hamburger');
        const mobileNavLink = document.querySelector(".mobile-nav-links");
        if(!hamburger.classList.contains('hamburger-is-open')){
            hamburger.classList.add('hamburger-is-open');
            mobileNavLink.classList.add('mobile-nav-links-is-open');
        } else {
            hamburger.classList.remove('hamburger-is-open');
            mobileNavLink.classList.remove('mobile-nav-links-is-open');
        }
    }

    function toggleDropdown(menuElement) {
        var dropdown = menuElement.querySelector('.mobile-dropdown');
        if (dropdown.style.display === 'block') {
            dropdown.style.display = 'none';
        } else {
            dropdown.style.display = 'block';
        }
    }
</script>

<nav id="navbar" class="navbar">
    <div class="container">
        <img id="logo" src="<?= esc_url( get_template_directory_uri() . '/assets/images/main-logo.png' ); ?>">
        <!--MOBILE MENU -->
        <div class="mobile-menu">
            <div class="techpros-hamburger d-flex justify-content-between">
                <div>TechPros</div>
                <div onclick="openHamburgerMenu()" id="hamburger">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
            </div>
            <div class="mobile-nav-links"><!--SERVE ANIMAZIONE -->
                <div class="mobile-nav-link">
                    <a href="#">Home</a>
                    <span class="mobile-dropdown-opener">+</span>
                    <div class="mobile-dropdown">
                        <?php
                            for($i=0; $i < count($homeArray); $i++){
                                echo $homeArray[$i];
                            }
                        ?>
                        <a href="#">FAQ</a>
                    </div>
                </div>
                <div class="mobile-nav-link">
                    <a href="#">Company</a>
                    <span class="mobile-dropdown-opener">+</span>
                    <div class="mobile-dropdown">
                        <?php
                            for($i = 0; $i < count($companyArray); $i++){
                                echo $companyArray[$i];
                            }
                        ?>
                        <!-- <div class="mobile-nav-link">
                            <a href="#">Portfolio</a>
                            <span class="mobile-dropdown-opener">+</span>
                        </div>
                        <div class="mobile-dropdown">
                            <a href="#">Portfolio Two</a>
                            <a href="#">Portfolio Three</a>
                        </div>
                        <div class="mobile-nav-link">
                            <a href="#">Our Service</a>
                            <span class="mobile-dropdown-opener">+</span>
                        </div>
                        <div class="mobile-dropdown">
                            <a href="#">Our Service Two</a>
                            <a href="#">Our Service Three</a>
                        </div> -->
                        <a href="#">Case study</a>
                        <a href="#">Pricing plan</a>
                        <a href="#">Faq</a>
                    </div>
                </div>
                <div class="mobile-nav-link">
                    <a href="#">IT Solution</a>
                    <span class="mobile-dropdown-opener">+</span>
                    <div class="mobile-dropdown">
                        <?php echoArray($itSolutionArray); ?>
                    </div>
                </div>
                <div class="mobile-nav-link">
                    <a href="#">Elements</a>
                    <span class="mobile-dropdown-opener">+</span>
                    <div class="mobile-dropdown">
                        <?php echoArray($elementsArray); ?>
                    </div>
                </div>
                <div class="mobile-nav-link">
                    <a href="#">Blog</a>
                    <span class="mobile-dropdown-opener">+</span>
                    <div class="mobile-dropdown">
                        <a href="#">Blog List</a>
                        <a href="#">Blog Grid</a>
                        <a href="#">Blog 2column</a>
                    </div>
                </div>
                <div class="mobile-nav-link">
                    <a href="#">Contact</a>
                    <span class="mobile-dropdown-opener">+</span>
                    <div class="mobile-dropdown">
                        <?php echoArray($contactsArray); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF MOBILE -->
        <div class="nav-links">
            <div class="nav-link">
                <a href="#">Home</a>
                <div class="dropdown">
                    <?php echoArray($homeArray); ?>
                    <a href="#">FAQ</a>
                </div>
            </div>
            <div class="nav-link">
                <a href="#">Company</a>
                <div class="dropdown">
                    <?php echoArray($companyArray); ?>
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
                    <?php echoArray($itSolutionArray); ?>
                </div>
            </div>
            <div class="nav-link">
                <a href="#">Elements</a>
                <div class="dropdown">
                    <?php echoArray($elementsArray); ?>
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
                    <?php echoArray($contactsArray); ?>
                </div>
            </div>
        </div>
        <button>Get a quote</button>
    </div>
</nav>