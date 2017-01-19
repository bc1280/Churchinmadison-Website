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

<?php $page = 'students'; include ("header.php"); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main">

    <div class="bgimg-3 w3-display-container w3-light-gray">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-light-grey w3-wide">STUDENTS</span>
        </div>
    </div><br>

    <div class="w3-row w3-light-gray" id="slideshow">
        <div class="w3-col" style="width:20%"><p></p></div>
        <div class="w3-col  w3-hide-small" style="width:60%"><p>
                <!-- Slideshow -->
                <div class="w3-display-container mySlides">
                    <img src="picture/students/001.jpg" style="width:100%;">
                </div>

                <!-- Slideshow next/previous buttons -->
                <div class="w3-container w3-dark-grey w3-padding-8">
                    <!--div class="w3-left w3-hover-text-teal w3-large" onclick="plusDivs(-1)"><i class="fa fa-arrow-left"></i></div>
                    <div class="w3-right w3-hover-text-teal w3-large" onclick="plusDivs(1)"><i class="fa fa-arrow-right"></i></div-->

                    <div class="w3-center">
                        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
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
                    <h3 class="w3-text-teal"><b>Student Ministry</b></h3>
                    <p>The city of Madison is home to a large population of college students, and the church in Madison is active in ministering to them. Many of our members visit the campus, hold Bible studies, shepherd and disciple students, and welcome them into our homes for meals and fellowship. We support a student group, Christian Students at UW, which holds the same teachings and view of the oneness of all believers that the church shares. If you are a student and would like to be involved, please <a href="contact.php">contact us</a>. Or, you can go to the <a href="http://christiansatuw.org">Wisconsin Involvement Network (WIN) site</a> for more information on the club.</p>
                    <button class="w3-btn w3-gray"><a href="http://christiansatuw.org">Christian Students at UW Madison</a></button>
                </div>
            </div>
            <div class="w3-padding-32">
                <div class="w3-container">
                    <h3 class="w3-text-teal"><b>Badger Bible Reading Challenge</b></h3>
                    <p>We encourage the students (and everyone else!) to read the Bible daily. As an aid to our reading, we have developed the Bible reading challenge. Sign up at the <a href="http://badgerbiblereading.com/">Badger Bible reading website</a> and portions of scripture will be sent to your email daily. You can keep track of your progress by clicking on a link at the end of the day's reading.</p>
                    <button class="w3-btn w3-gray"><a href="http://badgerbiblereading.com/">Badger Bible Reading Challenge</a></button>
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
