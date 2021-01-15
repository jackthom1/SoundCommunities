<?php
define("PAGE_TITLE", "Home");
include("./atributes/header.php");
?>

<main>
    <!-- <div class="hero--pattern"></div> -->
    <div class="home--MainContent">
        <div class="home--left">
            <p class="home--Text">
                We Use Digital Radio and Music Production to Connect, Engage and Inspire
                Communities. <br>We Create Platforms and Opportunities for People to Step Up and Speak Out
                <br><span class="readMoreBtn">Read More</span>
            </p>
        </div>
        <div class="home--right">
        </div>
    </div>
    <div class="home--section2">
        <div class="home--grid" onclick="openModal('educationModal')">
            <img src="./Images/education.jpg" class="home--grid--image" alt="Ricardo Teaching DJ Skills">
            <h2 class="home--grid--title">Education & Training</h2>
            <p></p>
        </div>
        <div class="home--grid" onclick="openModal('communityModal')">
            <img src="./Images/community.jpg" class="home--grid--image" alt="Community work, girls interviewing teacher">
            <h2 class="home--grid--title">Community Work</h2>
            <p></p>

        </div>
        <div class="home--grid" onclick="openModal('projectsModal')">
            <img src="./Images/projects.jpg" class="home--grid--image" alt="Girls from Ocean Youth next to Microphone">
            <h2 class="home--grid--title">Our Projects</h2>
            <p></p>
        </div>
    </div>




    <div class="home--section3">
        <div class="home--animation--header" id="animation--header">
            <h2 class="home--animation--title">Our Impact in 2020</h2>
            <button class="home--animation--button" onclick="playAnimation()">Watch Now</button>
        </div>
        <h3 id="loading">Loading...</h3>
        <div class="animation" id="animation--container">
            <div id="animation1">
                <p class="animation--text animation--title">In 2020 We:</p>
                <p class="animation--text a">Worked With <span>766</span> Young people</p>
                <p class="animation--text b">Ran <span>13</span> Community Outreach Sessions</p>
                <p class="animation--text c">Went On <span>19</span> Arts Trips/Events</p>
                <p class="animation--button d" id="animationButton1">Next</p>
            </div>
            
            <div id="animation2">
                <p class="animation--text animation--title">We Also:</p>
                <p class="animation--text e">Spent <span>296</span> Hours Broadcasting Live</p>
                <p class="animation--text f">Amounting <span>4369</span> Downloads</p>
                <p class="animation--text g">With <span>273</span> Live Listeners</p>
                <p class="animation--button d" id="animationButton2">Next</p>
            </div>
            
            <div id="animation3">
                <p class="animation--text animation--title">All While:</p>
                <p class="animation--text h">Being Nominated For <span>5</span> Awards</p>
                <p class="animation--text i">And Winning <span>2</span> Of Them!</p>
                <p class="animation--button d" id="animationButton3">Next</p>
            </div>

            <div id="animation4">
                <p class="animation--text animation--title"></p>
                <p class="animation--text j">Thanks to everyone who has taken part</p>
                <p class="animation--text k">And all of our Partners & Funders</p>
                <a href="./impact.php" class="animation--text animation--cta l">Read More</a>

            </div>
        </div>
    </div>


    <div class="home--section5">
        
        <div class="home--contact">
            <h2 class="contact--title">Contact Us</h2>
            <form action="" class="contact--form">
                <input class="contact--box" name="name" type="text" placeholder="Name" aria-label="Name">
                <input class="contact--box" name="email" type="text" placeholder="Email" aria-label="Email">
                <textarea class="contact--box" name="message" type="text" placeholder="Message" aria-label="Message"></textarea>
                <input class="contact--box contact--submit" type="submit" value="Send">
            </form>
        </div>
        <div class="home--contactLinks">
            <h2 class="contact--title">Or contact us through: </h2>
            <p class="contact--email">Email: <a href="mailto:info@soundcommunities.co.uk" class="contact--link">info@soundcommunities.co.uk</a></p>
            <p class="contact--email">Phone: <a href="tel:+441803840982" class="contact--link">01803 840982</a></p>
            <a class="contact--link" href="https://www.facebook.com/SoundCommunitiesCIC" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a class="contact--link" href="https://twitter.com/SoundCommunitie" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a class="contact--link" href="https://www.instagram.com/sound_communities_cic/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        

    </div>

    <div class="home--modal modal" id="educationModal">
        <div class="modal--content">
            <i onclick="closeModal('educationModal')" class="fas fa-times modal--close"></i>
            <img src="./Images/education.jpg" alt="Ricardo teaching DJing" class="modal--image">
            <h2 class="modal--title">Education & Training</h2>
            <p class="modal--text">
                We believe that education is at the heart of social change and our
                team are passionate about sharing creative skills and knowledge. We
                run creative media workshops in schools, educational projects with communities,
                teach in higher education, use Camper Obscura to outreach and sustain our Young
                Journalists Project thanks to support from Children in Need
            </p>
        </div>
    </div>
    <div class="home--modal modal" id="communityModal">
        <div class="modal--content">
            <i onclick="closeModal('communityModal')" class="fas fa-times modal--close"></i>
            <img src="./Images/community.jpg" alt="Girls interviewing teacher" class="modal--image">
            <h2 class="modal--title">Community Work</h2>
            <p class="modal--text">
                We bring the equipment and a unique blend of expertise to facilitate community-driven
                consultation and participatory media projects. Our projects put cameras in people’s
                hands and support them to tell their own stories. With years of experience working
                directly with communities delivering creative projects we’re proud of the outcomes
                we’ve achieved.
            </p>
        </div>
    </div>
    <div class="home--modal modal" id="projectsModal">
        <div class="modal--content">
            <i onclick="closeModal('projectsModal')" class="fas fa-times modal--close"></i>
            <img src="./Images/projects.jpg" alt="Girls in radio studio" class="modal--image">
            <h2 class="modal--title">Our Projects</h2>
            <p class="modal--text">
                We have a fully equipped photographic studio (flash and continuous lighting) which can
                be booked for project work on a daily basis. Our darkroom facilities include four
                enlargers and scope to explore black and white printing as well as other alternative
                processes. We have a media suite with five iMacs for post-production work, including;
                Adobe software, Epson 850 Pro scanning and A3 printing facilities.
            </p>
            <button class="button">Find out more</button>
        </div>
    </div>




</main>












<?php include("./atributes/footer.php"); ?>