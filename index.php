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
<body style="background:#1b1f20; overflow-x:hidden; height:auto;">
    <?php
// Start the session
session_start();

if(isset($_GET['add'])){
     $colorset =rand(0,3);
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

.cvmid{
    background:rgba(255,255,255,0.3);
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
}
.cvleft{
    background:rgba(0,0,0,0.1);
    padding-left:60px;
    padding-right:60px;
}
.cvright{
     background:rgba(0,0,0,0.1);
    padding-left:60px;
    padding-right:60px;
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
<form action="index.php" method="get">
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


<div class="cvpage" style="overflow:hidden;">
<div class="row" style="background:rgba(255,255,255,0); text-align:center;">
<div class="col-md-4 cvleft" style="height:auto;">
    <p style="color:white; font-size:32px;">Design</p>
    <div class="skills" id="corners">
        <ul>   
       <li>PhotoShop<span class="rating" style="background-image:url('img/stars/5star.png'); background-size: cover;"></span></li>
       <li>MockPlus<span class="rating" style="background-image:url('img/stars/5star.png'); background-size: cover;"></span></li>
       <li>Illustrator<span class="rating" style="background-image:url('img/stars/5star.png'); background-size: cover;"></span></li>
       <li>Maya<span class="rating" style="background-image:url('img/stars/5star.png'); background-size: cover;"></span></li>
        </ul>

    </div>
</div>
<div class="col-md-4 cvmid" style=" height:500px;">
<p style="color:white; font-size:32px;">Carl Gordon</p>
<div class="avatar"></div>
<div class="well" style="padding-top:10px; ">
    <p style="font-size:24px;">Developer + Designer</p>
    <div class="breaker"></div>
</div>
<div class="well" style="padding:20px; ">
    <p>Recent Bachelor of Design Innovation Graduate working as a Web Developer in Wellington, New Zealand.</p>
</div>
</div>
<div class="col-md-4 cvright" style=" height:500px;">
    
 <p style="color:white; font-size:32px;">Development</p>
    <div class="skills" id="corners">
        <ul>   
       <li>Php<span class="rating">1.2.3.4.5</span></li>
       <li>html5<span class="rating">1.2.3.4.5</span></li>
       <li>css<span class="rating">1.2.3.4.5</span></li>
       <li>javaScript<span class="rating">1.2.3.4.5</span></li>
        </ul>

    </div>

</div>
</div>

</div>

<div class="pjpage" style="z-index:0; padding:0px; padding-top:20px;">
<div style=" text-align:center; width:100%;"><div id="filters" style="">  <button class="button is-checked" data-filter="*">show all</button>
  <button class="button" data-filter=".website">website</button>
  <button class="button" data-filter=".coding">coding</button>
  <button class="button" data-filter=".media">media</button><!-- 
  <button class="button" data-filter=":not(.coding)">not transition</button>
  <button class="button" data-filter=".website:not(.coding)">website but not transition</button>
  <button class="button" data-filter="numberGreaterThan50">number > 50</button>
  <button class="button" data-filter="ium">name ends with &ndash;ium</button> -->
</div></div>
  <!--project tiles-->

<div class="grid" style="max-width:1080px; margin:auto;">
  <div class="element-item coding " data-category="coding">
  <div class="element-panel dead">
<div style="position:absolute;margin-top:90px; left:50%; margin-left:-15px;"><img alt="Projects" id="cv-icon" class="svg social-link" src="svg/private-eye.svg"/></div>
  
<p style="margin-top:40px; margin-left:30px; font-size:14px;">project one was a project built with made to</p>
  </div>
    <p class="symbol">Project one</p>
    <p class="number">80</p>
    <p class="weight">200.59</p>
    
  </div>
  <div class="element-item website " data-category="website">
    <h3 class="name">Tellurium</h3>
    <p class="symbol">Te</p>
    <p class="number">52</p>
    <p class="weight">127.6</p>
  </div>
  <div class="element-item website " data-category="website">
    <h3 class="name">Bismuth</h3>
    <p class="symbol">Bi</p>
    <p class="number">83</p>
    <p class="weight">208.980</p>
  </div>
  <div class="element-item  website " data-category="website">
    <h3 class="name">Lead</h3>
    <p class="symbol">Pb</p>
    <p class="number">82</p>
    <p class="weight">207.2</p>
  </div>
  <div class="element-item coding " data-category="coding">
    <h3 class="name">Gold</h3>
    <p class="symbol">Au</p>
    <p class="number">79</p>
    <p class="weight">196.967</p>
  </div>
  <div class="element-item media " data-category="media">
    <h3 class="name">Potassium</h3>
    <p class="symbol">K</p>
    <p class="number">19</p>
    <p class="weight">39.0983</p>
  </div>
  <div class="element-item media " data-category="media">
    <h3 class="name">Sodium</h3>
    <p class="symbol">Na</p>
    <p class="number">11</p>
    <p class="weight">22.99</p>
  </div>
</div>

  <!--project tiles end-->
</div>

<div class="blpage">3</div>
<div class="ctpage">4</div>

<!--footer-->
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
    $('.cv').hide()
    $('.pj').hide()
    //switch pulse off
    $('#logo').removeClass('pulse')
//toggle page buttons on click
//add pulse on mouseover logo
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