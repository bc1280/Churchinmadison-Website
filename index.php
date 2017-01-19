<!DOCTYPE html>
<html>
<title>The Church in Madison</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="index.css"/>
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-tag {cursor:pointer}
    .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
    .w3-sidenav a,.w3-sidenav h4 {font-weight:bold}

</style>
<body class="w3-content custom-background" style="max-width:1600px">

<?php $page = 'index'; include ("header.php"); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main">


    <div class="bgimg-3 w3-display-container w3-light-gray">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-light-grey w3-wide">HOME</span>
        </div>
    </div><br>

    <div class="w3-row w3-light-gray" id="slideshow">
        <div class="w3-col" style="width:20%"><p></p></div>
        <div class="w3-col w3-hide-small" style="width:60%"><p>
    <!-- Slideshow -->
    <div class="w3-display-container mySlides">
        <img src="picture/index_sliders/001.jpg" style="width:100%;">
        <div class="w3-display-bottomleft w3-container w3-padding-32 w3-hide-small w3-light-gray w3-opacity-min w3-half">
            <p>“And I also say to you that you are Peter, and upon this rock I will build my church, and the gates of Hades shall not prevail against it.”</p>
            <p>- Mat 16:18</p>
        </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="picture/index_sliders/002.jpg" style="width:100%;">
        <div class="w3-display-bottomleft w3-text-white w3-container w3-padding-32 w3-hide-small">
        </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="picture/index_sliders/003.jpg" style="width:100%;">
        <div class="w3-display-bottomleft w3-text-white w3-container w3-padding-32 w3-hide-small">
        </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="picture/index_sliders/004.jpg" style="width:100%;">
        <div class="w3-display-bottomleft w3-text-white w3-container w3-padding-32 w3-hide-small">
        </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="picture/index_sliders/005.jpg" style="width:100%;">
        <div class="w3-display-bottomleft w3-text-white w3-container w3-padding-32 w3-hide-small">
        </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="picture/index_sliders/006.jpg" style="width:100%;">
        <div class="w3-display-bottomleft w3-text-white w3-container w3-padding-32 w3-hide-small">
        </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding-8">
        <!--div class="w3-left w3-hover-text-teal w3-large" onclick="plusDivs(-1)"><i class="fa fa-arrow-left"></i></div>
        <div class="w3-right w3-hover-text-teal w3-large" onclick="plusDivs(1)"><i class="fa fa-arrow-right"></i></div-->

        <div class="w3-center">
            <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
            <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
            <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
            <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
        </div>
    </div>
            </p></div>

        <div class="w3-col" style="width:20%"><p></p></div>
    </div>

    <div class="w3-row w3-light-gray">
        <div class="w3-col" style="width:10%"><p></p></div>
        <div class="w3-col" style="width:80%"><p>
            <!-- Contents -->
            <div class="w3-padding-32">
                <div class="w3-container">
                    <h4 class="w3-text-teal"><b>Welcome</b></h4>
                    <p>The church in Madison warmly welcomes you. We are a group of believers from a variety backgrounds who believe in the Lord Jesus with our whole heart and enjoy Him as our life supply. We meet on the ground of oneness, the oneness of the Body of Christ. We practice the inclusiveness of the church as seen in the New Testament. We welcome all believers to enjoy the church life with us.</p>
                </div>
            </div>


            </p></div>
        <div class="w3-col" style="width:10%"><p></p></div>
    </div><br>

    <?php include ("footer.php"); ?>

    <!-- End page content -->
</div>

<script src="slides.js"></script>
<script src="sidenav.js"></script>

</body>
</html>
