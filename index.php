<!DOCTYPE html>
<html style="overflow-x:hidden;">
<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300,200,100,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="css/hexstyle.css">

</head>
<body style="overflow-x:hidden; height:auto;">
    <?php
// Start the session
session_start();

if(isset($_POST['add'])){
     $colorset =rand(0,7);
}else{
    $colorset =0;
}

 $_SESSION["colorset"] = $colorset;

 include('css/style.php');




// $_SESSION["product"] = "Product Title";


?>
    <script type="text/javascript">
var popup = 0;
var cv = 0;
var pj = 0;
var bl = 0;
var ct = 0;
    </script>
    <style type="text/css">

svg {
    fill: #fff;
    width:30px;
    height: auto;
    margin:auto;
}
#cv-icon:hover path {
    transition:0.4s ease all;
    fill: yellow;
}
.altnav{
    position:fixed; top:76px; background:rgba(0,0,0,0.1); width:100%; height:30px; margin:auto;
}
.sec-text{
    color:#fff;
    margin:auto;
    text-align: center;
}
.scrolltop{
    width:100px;
    height:100px;
    background:red;
    position:fixed;
    right:10px;
    bottom:0px;
    cursor:pointer;
    z-index: 16;

}


.well p{
    color:white;
}
.well{
    /*filter: blur(20px);*/
}
.breaker{
    width:100%;
    height:2px;
    background-color: #fff;
}

.rating{
    margin-right:10px;
    float:right;
    width:110px;
    min-height: 20px;
    background:transparent;
    background-image:url('img/stars/5star.png');
}
ul :nth-child(2n+0){
background:#fff;
background:rgba(0,0,0,0.1);
}
.projects{
    margin:auto; width:100%; background:rgba(255,255,255,0);
    text-align: center;
}
.tile{
    width:200px;
    height: 200px;
    background:rgba(0,0,0,0.1);
    margin:auto;
    
}
.tile:hover {
    transition:0.6s ease all;
    box-shadow: 2px 4px 5px rgba(0,0,0,0.2);
}
.projects .panel{
    
}
#corners{
    border-top-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
}
.rm-btn{
    position: absolute;
    background-color: transparent;
    border:2px solid #fff;
    width:50%;
    bottom:50px;
    left:50%;
    margin-left: -25%;
}
#scroller{
    overflow-y:scroll;width:100%;height:100%;

}
#scroller::-webkit-scrollbar {
    width: 1em;
}
 
#scroller::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#scroller::-webkit-scrollbar-thumb {
  background-color: red;
  outline: 1px solid red;
}


}
</style>
<nav style="background:rgba(255,255,255,0.9); position:fixed; z-index:12;width:100%;"class="dead navbar navbar-default navbar-fixed-top">
  <p id="homebtn" style="position:fixed; margin-top:18px; margin-left:10px;">HOME</p>
  <div class="row" style="margin:auto; width:800px;">
  <div style="width:800px;  height:2px; position:fixed; background:#000; margin-top:30px;"></div>

    <div class="col-sm-3"  >
        <div id="btn1b" class="pagination"><img alt="C.V" id="cv-icon" class="svg social-link" src="svg/user-profile-on-smartwatch.svg"/></div>
    </div>
    <div class="col-sm-3">
        <div id="btn2b" class="pagination"><img alt="Projects" id="cv-icon" class="svg social-link" src="svg/circle-menu.svg"/></div>
    </div>
    <div class="col-sm-3">
        <div id="btn3b" class="pagination"><img alt="Contact" id="cv-icon" class="svg social-link" src="svg/folded-paper.svg"/></div>
    </div>
    <div class="col-sm-3">
        <div id="btn4b" class="pagination"><img alt="Contact" id="cv-icon" class="svg social-link" src="svg/conversation-messages.svg"/></div>
    </div>
  </div>

</nav>
<!--alt nav-->
<div style="z-index:12; position:fixed;"id="smallnav" class="dead">  
    <div class="altnav"></div>
</div>

    <div class="scrolltop dead">
    <p style="text-align:center; font-size:25px;position:fixed; right:55px;">^</p>
        <p style="text-align:center; font-size:25px;position:fixed; right:38px; bottom:10px;">TOP</p>

</div>


<div class="altbod">


    <!--page logo-->
<div id="logo">
<form action="index.php" method="post">
<input class="logobtn" type="submit" name="add" value="" />
</form>
</div>

<!--pagination buttons-->
    <div class="row dead responder" id="mydiv">
    <div class="col-sm-3"  >
        <div id="btn1" class="pagination"><img alt="C.V" id="cv-icon" class="svg social-link" src="svg/user-profile-on-smartwatch.svg"/></div>
    <div class="A01 lasso0"><div class="01 lassoHead0"></div></div>
    </div>
    <div class="col-sm-3">
        <div id="btn2" class="pagination"><img alt="Projects" id="cv-icon" class="svg social-link" src="svg/circle-menu.svg"/></div>
    <div class="B02 lasso1"><div class="02 lassoHead1"></div></div>
    </div>
    <div class="col-sm-3">
        <div id="btn3" class="pagination"><img alt="Contact" id="cv-icon" class="svg social-link" src="svg/folded-paper.svg"/></div>
    <div class="C03 lasso2"><div class="03 lassoHead2"></div></div>
    </div>
    <div class="col-sm-3">
        <div id="btn4" class="pagination"><img alt="Contact" id="cv-icon" class="svg social-link" src="svg/conversation-messages.svg"/></div>
    <div class="D04 lasso3"><div class="04 lassoHead3"></div></div>
    </div>
    </div>
<!--end pagination buttons-->

<!-- COMPILE PAGE CONTENTS FROM INCLUDES-->
    <!--START C.V PAGE CONTENT-->
    <?
    include('includes/cvpage.php');
    ?>
    <!--END C.V PAGE CONTENT-->
    <!--START Project PAGE CONTENT-->
    <?
    include('includes/pjpage.php');
    ?>
    <!--END Project PAGE CONTENT-->
    <!-- END COMPILE PAGE CONTENTS-->

<!--START Blog PAGE CONTENT-->
<div class="blpage">3</div>
<!--END Blog PAGE CONTENT-->

<!--START Contact PAGE CONTENT-->
<div class="ctpage">4</div>
<!--END Contact PAGE CONTENT-->

    <!--alt bod end-->
    </div>

</body>
<script src="svg_control.js"></script>
<script src="lasso_control.js"></script>
<script type="text/javascript">


function fadeIn(){
  $('.responder').addClass('active')
}
setTimeout(fadeIn, 500);

$(document).ready(function()
{
    //SCRIPT to add flex-first to col-sm-4 if window width < 760px
  if ($(window).width() < 760) {
   // alert('Less than 760');
   $('.mid').addClass('flex-first')
}
else {
    // alert('More than 760');
    $('.mid').removeClass('flex-first')
}
//end script

    $('.cv').hide()
    $('.pj').hide()
    $('.morecontent').toggle();
    //switch pulse off
    $('#logo').removeClass('pulse')

   

$(".readmore").click(function () {
      $('#pTest').text(function(i, text){
          return text === "-" ? "+" : "-";
      })
      $('.morecontent').slideToggle();
      $('#plusbutton').toggleClass('pulse')
      //expand readmore c.v section
   });

    $('#logo').mouseover(function () {
  $('#logo').addClass('pulse')
});
//remover pulse on mouseout logo
 $('#logo').mouseout(function () {
  $('#logo').removeClass('pulse')
});
//scroll handler
 //scroll to cv page on btn1 click
$('.scrolltop').click(function () {
    $('html, body').animate({
        scrollTop: $(".altbod").offset().top- $navHeight
    }, 1000);
    });


$navHeight=76;
//PAGE HANDLERS
 //element-panel on element-item click
$('.element-item').click(function () {
    $('.element-panel').toggleClass('active')
    });
 //scroll to top page on homebtn click
$('#homebtn').click(function () {
    $('html, body').animate({
        scrollTop: $(".altbod").offset().top- $navHeight
    }, 1000);
    });
 //scroll to cv page on btn1 click
$('#btn1').click(function () {
    cv = 1;
    $('html, body').animate({
        scrollTop: $(".cvpage").offset().top- $navHeight
    }, 1000);
    });
 //scroll to cv page on btn1b click
$('#btn1b').click(function () {
    cv = 1;
    $('html, body').animate({
        scrollTop: $(".cvpage").offset().top- $navHeight
    }, 1000);
    });
 //scroll to pj page on btn2 click
$('#btn2').click(function () {
    pj = 1;
    $('html, body').animate({
        scrollTop: $(".pjpage").offset().top- $navHeight
    }, 1000);
    });
//scroll to pj page on btn2b click
$('#btn2b').click(function () {
    pj = 1;
    $('html, body').animate({
        scrollTop: $(".pjpage").offset().top- $navHeight
    }, 1000);
    });
 //scroll to bl page on btn3 click
$('#btn3').click(function () {
    bl = 1;
    $('html, body').animate({
        scrollTop: $(".blpage").offset().top- $navHeight
    }, 1000);
    });
 //scroll to bl page on btn3b click
$('#btn3b').click(function () {
    bl = 1;
    $('html, body').animate({
        scrollTop: $(".blpage").offset().top- $navHeight
    }, 1000);
    });
 //scroll to ct page on btn4 click
$('#btn4').click(function () {
    ct = 1;
    $('html, body').animate({
        scrollTop: $(".ctpage").offset().top- $navHeight
    }, 1000);
    });
//scroll to ct page on btn4b click
$('#btn4b').click(function () {
    ct = 1;
    $('html, body').animate({
        scrollTop: $(".ctpage").offset().top- $navHeight
    }, 1000);
    });

window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
        $('nav').addClass('active')
        $('#smallnav').addClass('active')
        $(".altnav").html("<p class='sec-text'>C.V<p>");
    } else {
        $('nav').removeClass('active')
         $('#smallnav').removeClass('active')
    }
//change text on scroll to projects
    if (document.body.scrollTop > 1100 || document.documentElement.scrollTop > 1100) {
$(".altnav").html("<p class='sec-text'>Projects!<p>");
$('.scrolltop').addClass('active')
    }else{
    $('.scrolltop').removeClass('active')

    }
    //change text on scroll to blog
    if (document.body.scrollTop > 1600 || document.documentElement.scrollTop > 1600) {
$(".altnav").html("<p class='sec-text'>Blog!<p>");
    }
    //change text on scroll to contact
    if (document.body.scrollTop > 2100 || document.documentElement.scrollTop > 2100) {
$(".altnav").html("<p class='sec-text'>contact!<p>");
    }
}
//svg edit
  /*
     * Replace all SVG images with inline SVG
     */
       



});
</script>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='http://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>

    <script src="js/index.js"></script>
</html>