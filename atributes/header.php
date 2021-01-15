<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sound Commuities<?php if(!empty(PAGE_TITLE)){echo " - " . PAGE_TITLE;}else{echo " ";} ?></title>
    <link rel="stylesheet" href="./css/main.css">
    

    <link rel="icon" href="./atributes/favicon.jpg" type="image/gif" sizes="16x16">
</head>
<body>
    <nav>
        <ul class="nav--list" id="nav--list">
            <div class="nav--imageContainer">
                <li class="nav--items nav--image"><a href="./index.php"><img src="./atributes/oneLineLogo.svg" alt="Sound Communities Logo"></a></li>
            </div>
            <div class="nav--itemContainer" id="itemContainer">
                <li class="nav--items"><a href="./projects.php">Projects</a></li>
                <li class="nav--items"><a href="./soundmap.php">Sound Map</a></li>
                <li class="nav--items"><a href="./whatwedo.php">What We Do</a></li>
                <li class="nav--items"><a href="./about.php">About</a></li>
                <li class="nav--items"><a href="./impact.php">Our Impact</a></li>
                <li class="nav--items"><a href="#">Listen</a></li>
            </div>
            <div class="nav--socials">
                <li class="nav--items"><a href="https://www.facebook.com/SoundCommunitiesCIC" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="nav--items"><a href="https://twitter.com/SoundCommunitie" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="nav--items"><a href="https://www.instagram.com/sound_communities_cic/" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
            </div>
            <div class="nav--openBtn">
                <li class="nav--items nav--mobileBtn" onclick="navAppear()"><i class="fas fa-bars"></i></li>
                <li class="nav--items nav--mobileBtn nav--mobileBtnClose" onclick="navAppear()"><i class="fas fa-times"></i></li>
            </div>
        </ul>
    </nav>
