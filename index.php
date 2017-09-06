<!DOCTYPE html>
<html style="overflow-x:hidden;">
<head>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body style="background:#e0e0e0; overflow-x:hidden; height:auto;">
    <?php
// Start the session
session_start();
// $_SESSION["product"] = "Product Title";
include('css/style.php');

?>
    <script type="text/javascript">
var popup = 0;
var cv = 0;
var pj = 0;
var bl = 0;
var ct = 0;
    </script>
    <style type="text/css">
.glyphcv{
    background-image:url('fonts/glyphicons/png/glyphicons-11-envelope.png');
    background-size: 30px;
    background-repeat: no-repeat;
    background-position: 50%;
}
    </style>

<nav style="background:rgba(0,0,0,0.2); position:fixed; width:100%;"class="dead navbar navbar-default navbar-fixed-top">
  <div class="row" style="margin:auto; width:800px;">
    <div class="col-sm-3"  >
        <div id="btn1b" class="pagination"><p>C.V</p></div>
    </div>
    <div class="col-sm-3">
        <div id="btn2b" class="pagination"><p>Projects</p></div>
    </div>
    <div class="col-sm-3">
        <div id="btn3b" class="pagination"><p>Blog</p></div>
    </div>
    <div class="col-sm-3">
        <div id="btn4b" class="pagination"><p>Contact</p></div>
    </div>
  </div>
</nav>


<div class="altbod">

    <!--page logo-->
<div id="logo"></div>

<!--pagination buttons-->
    <div class="row dead responder" id="mydiv">
    <div class="col-sm-3"  >
        <div id="btn1" class="pagination glyphcv"><a id="btn1" href="#"></a></div>
    </div>
    <div class="col-sm-3">
        <div id="btn2" class="pagination"><a id="btn2" href="#">Projects</a></div>
    </div>
    <div class="col-sm-3">
        <div id="btn3" class="pagination"><a id="btn3" href="#">Blog</a></div>
    </div>
    <div class="col-sm-3">
        <div id="btn4" class="pagination"><a id="btn4" href="#">Contact</a></div>
    </div>
    </div>
<!--end pagination buttons-->
<div class="cvpage">1</div>
<div class="pjpage">2</div>
<div class="blpage">3</div>
<div class="ctpage">4</div>

<!--footer-->
    <!--alt bod end-->
    </div>

</body>
<script type="text/javascript">

$(document).ready(function()
{
    $('.cv').hide()
    $('.pj').hide()
    //switch pulse off
    $('#logo').removeClass('pulse')

//toggle page buttons on click
//add pulse on mouseover logo
    $('#logo').mouseover(function () {
  $('#logo').addClass('pulse')
  $('.responder').addClass('active')
});
//remover pulse on mouseout logo
 $('#logo').mouseout(function () {
  $('#logo').removeClass('pulse')
});

//PAGE HANDLERS
 //scroll to cv page on btn1 click
$('#btn1').click(function () {
    cv = 1;
    $('html, body').animate({
        scrollTop: $(".cvpage").offset().top
    }, 1000);
    });
 //scroll to cv page on btn1b click
$('#btn1b').click(function () {
    cv = 1;
    $('html, body').animate({
        scrollTop: $(".cvpage").offset().top
    }, 1000);
    });
 //scroll to pj page on btn2 click
$('#btn2').click(function () {
    pj = 1;
    $('html, body').animate({
        scrollTop: $(".pjpage").offset().top
    }, 1000);
    });
//scroll to pj page on btn2b click
$('#btn2b').click(function () {
    pj = 1;
    $('html, body').animate({
        scrollTop: $(".pjpage").offset().top
    }, 1000);
    });
 //scroll to bl page on btn3 click
$('#btn3').click(function () {
    bl = 1;
    $('html, body').animate({
        scrollTop: $(".blpage").offset().top
    }, 1000);
    });
 //scroll to bl page on btn3b click
$('#btn3b').click(function () {
    bl = 1;
    $('html, body').animate({
        scrollTop: $(".blpage").offset().top
    }, 1000);
    });
 //scroll to ct page on btn4 click
$('#btn4').click(function () {
    ct = 1;
    $('html, body').animate({
        scrollTop: $(".ctpage").offset().top
    }, 1000);
    });
//scroll to ct page on btn4b click
$('#btn4b').click(function () {
    ct = 1;
    $('html, body').animate({
        scrollTop: $(".ctpage").offset().top
    }, 1000);
    });

window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
        $('nav').addClass('active')
    } else {
        $('nav').removeClass('active')
    }
}




});
</script>
</html>