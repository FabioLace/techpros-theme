<div class="our-services">
    <div class="services-content">
        <div class="text-button d-flex flex-row mb-5">
            <div class="text">
                <h4> // Full Cycle IT Solution Services </h4>
                <h1 class="font-600">End-To-End<br>Secure IT Service </h1>
            </div>
            <button class="view-services">
                View All Services <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>
        <div class="services-cards d-flex flex-row justify-content-center">
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const serviceCards = document.getElementsByClassName("card");
                    const circleCards = document.getElementsByClassName("circle");

                    try{
                        for(let i = 0; i < serviceCards.length; i++) {
                            serviceCards[i].addEventListener("mousehover", function(){
                                serviceCards[i].classList.add = "activated";
                                circleCards[i].style.display = "block";
                            });

                            serviceCards[i].addEventListener("mouseout", function(){
                                serviceCards[i].classList.remove = "activated";
                                circleCards[i].style.display = "none";
                            });
                        }
                    } catch(e){
                        console.log(e);
                    }
                });
            </script>

            <div class="card">
                <h2>Cyber Security</h2>
                <span class="icon-card">
                    <span class="circle"></span>
                    <i class="fa-solid fa-network-wired"></i>
                </span>
                <div>
                    Trouble that bound ensue that equaly blame belongs to those through weakness.
                </div>
                <a>Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="card activated">
                <h2>Web Development</h2>
                <span class="icon-card">
                    <span class="circle"></span>
                </span>
                <div>
                    Trouble that bound ensue that equaly blame belongs to those through weakness.
                </div>
                <a>Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="card">
                <h2>Mobile Development</h2>
                <span class="icon-card">
                    <i class="fa-solid fa-newtrork-wired"></i>
                </span>
                <div>
                    Trouble that bound ensue that equaly blame belongs to those through weakness.
                </div>
                <a>Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="card">
                <h2>IT Consultancy</h2>
                <span class="icon-card">
                    <i class="fa-solid fa-newtrork-wired"></i>
                </span>
                <div>
                    Trouble that bound ensue that equaly blame belongs to those through weakness.
                </div>
                <a>Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
