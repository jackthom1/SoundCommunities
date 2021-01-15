<?php
define("PAGE_TITLE", "Projects");
include("./atributes/header.php");
?>

<main>
    <!-- <div class="hero--Pattern"></div> -->
    <div class="hero projects--hero flex">
        <h1 class="hero--title">Our Projects</h1>
        <p class="hero--subTitle">Explore all of the work we've done in Torbay & beyond</p>
    </div>
    <div class="projects--section2">
        <div class="project--container" project="OY">
            <img class="project--image" src="./Images/projects/ocean-youth.jpg">
            <h2 class="project--title">Ocean Youth</h2>
            <p class="project--subTitle">A youth-led radio station in Torbay</p>
        </div>
        <div class="project--container" project="musicUp">
            <img class="project--image" src="./Images/projects/music-up.jpg">
            <h2 class="project--title">Music Up</h2>
            <p class="project--subTitle">Music production and broadcasting to engage disadvantaged children</p>
        </div>
        <div class="project--container" project="torquayFoyer">
            <img class="project--image" src="./Images/projects/loneliness-at-torquay.jpg">
            <h2 class="project--title">Loneliness at Torquay Foyer</h2>
            <p class="project--subTitle">Targeted sessions focussing on exploring youth loneliness
                using creative methods such as music and radio</p>
        </div>
        <div class="project--container" project="playByEar">
            <img class="project--image" src="./Images/projects/play-by-ear.jpg">
            <h2 class="project--title">Play By Ear</h2>
            <p class="project--subTitle">Early intervention programme using creative music,
                radio production and multi-platform broadcasting.</p>
        </div>
        <div class="project--container" project="OYAsks">
            <img class="project--image" src="./Images/projects/ocean-asks-co-research.jpg">
            <h2 class="project--title">Ocean Asks Co-Research</h2>
            <p class="project--subTitle">A co-research project exploring impact of social action on youth loneliness</p>
        </div>
        <div class="project--container" project="radioAhead">
            <img class="project--image" src="./Images/projects/radio-ahead.jpg">
            <h2 class="project--title">Radio Ahead</h2>
            <p class="project--subTitle">Radio making to ease transition</p>
        </div>
        <div class="project--container" project="oceanAsks">
            <img class="project--image" src="./Images/projects/ocean-asks.jpg">
            <h2 class="project--title">Ocean Asks</h2>
            <p class="project--subTitle">Ocean Youth's consultation arm</p>
        </div>
        <div class="project--container" project="radioRoutes">
            <img class="project--image" src="./Images/projects/radio-routes.jpg">
            <h2 class="project--title">Radio Routes</h2>
            <p class="project--subTitle">Outreach radio making in youth clubs</p>
        </div>
        <div class="project--container" project="oceanUpwards">
            <img class="project--image" src="./Images/projects/ocean-upwards.jpg" loading="lazy">
            <h2 class="project--title">Ocean Upwards</h2>
            <p class="project--subTitle">Using radio production to build employability skills in young people in
                Torbay</p>
        </div>


    </div>



</main>


<?php include("./atributes/footer.php"); ?>