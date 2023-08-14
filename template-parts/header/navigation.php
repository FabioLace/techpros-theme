<nav class="d-flex flex-row">
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const mainLinks = document.querySelectorAll('.nav-link');

            console.log(mainLinks);

            mainLinks.forEach(link => {
                link.addEventListener("click", () => {
                    console.log("CLICK");
                    mainLinks.forEach(otherLink => {
                        if (otherLink !== link) {
                            otherLink.querySelector('#drop-down').style.display = "none";
                        }
                    });
                    const dropDown = link.querySelector('#drop-down');
                    dropDown.style.display = "block";
                });
            });
        });
    </script>

    <img src="wp-content/themes/techpros/assets/images/main-logo.png">
    <div class="nav-links d-flex flex-row">
        <div class="nav-link">
            <a href="#">Home</a>
            <div id="drop-down">
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
            <div id="drop-down">
                <a href="#">About Us Two</a>
                <a href="#">Why Choose Us</a>
                <a href="#">Team Member</a>
                <a href="#">Single Team</a>
                <a href="#">Portfolio</a>
                    <div id="drop-down sub-menu">
                        <a href="#">Portfolio Two</a>
                        <a href="#">Portfolio Three</a>
                    </div>
                <a href="#">Our Service</a>
                    <div id="drop-down sub-menu">
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
            <div id="drop-down">
                <a href="#">IT Services</a>
                <a href="#">Managed IT Services</a>
                <a href="#">Industries</a>
                <a href="#">Business Solutions</a>
                <a href="#">IT Services Details</a>
            </div>
        </div>
        <div class="nav-link">
            <a href="#">Elements</a>
            <div id="drop-down">
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
            <div id="drop-down">
                <a href="#">Blog List</a>
                <a href="#">Blog Grid</a>
                <a href="#">Blog 2column</a>
            </div>
        </div>
        <div class="nav-link">
            <a href="#">Contact</a>
            <div id="drop-down">
                <a href="#">Contact Style One</a>
                <a href="#">Contact Style Two</a>
                <a href="#">Contact Style Three</a>
                <a href="#">Contact Style Four</a>
            </div>
        </div>
        <button>Get a quote</button>
    </div>
</nav>