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

<?php $page = 'contact'; include ("header.php"); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main">

    <div class="bgimg-3 w3-display-container w3-light-gray">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-light-grey w3-wide">CONTACT&nbsp;US</span>
        </div>
    </div><br>

    <div class="w3-row w3-light-gray">
        <div class="w3-container w3-center"><p>
                <!-- Contact Form -->

                <?php
                $action=$_REQUEST['action'];
                if ($action=="")    /* display the contact form */
                {
                ?>
            <form  action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit">
                Your Name<br>
                <input name="name" type="text" value="" size="30"/><br>
                Your Email<br>
                <input name="email" type="text" value="" size="30"/><br>
                Your Message<br>
                <textarea name="message" rows="7" cols="30"></textarea><br>
                <input type="submit" value="Send email"/>
            </form>
            <?php
            }
            else                /* send the submitted data */
            {
                $name=$_REQUEST['name'];
                $email=$_REQUEST['email'];
                $message=$_REQUEST['message'];
                if (($name=="")||($email=="")||($message==""))
                {
                    echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                }
                else{
                    $from="From: $name<$email>\r\nReturn-path: $email";
                    $subject="Message sent using your contact form";
                    mail("info@churchinmadison.org", $subject, $message, $from);
                    echo "Email sent!";
                }
            }
            ?>

            </p></div>
    </div>

    <div class="w3-row w3-light-gray">
        <div class="w3-container w3-center"><p>
                <!-- Contents -->
                <div class="w3-padding-32">
                    <div class="w3-container">
                        <h4 class="w3-text-teal"><b>Phone:</b></h4>
                        <p>(608) 469-1423 (Tim Cole)</p>
                        <p>(608) 239-3855 (Dave Olson)</p>
                    </div>
                </div>
        </p></div>
</div><br>

<?php include ("footer.php"); ?>

<!-- End page content -->
</div>

<script src="slides.js"></script>
<script src="sidenav.js"></script>

</body>
</html>

