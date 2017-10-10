<!DOCTYPE html>
<html style="overflow-x:hidden;">
<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300,200,100,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="css/flickity-docs.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="css/hexstyle.css">


</head>
<body style="overflow-x:hidden; height:auto;">
    <?php
    // connect to Folio_db
//include ('includes/mysqli_connect.php');
// Start the session
session_start();

if(isset($_POST['add'])){
     $colorset =rand(0,9);
}else{
    $colorset =0;
}

 $_SESSION["colorset"] = $colorset;

 include('css/style.php');

$color_hi = $_SESSION["color_hi"] ;
$color_00 = $_SESSION["color_00"] ;


?>
    <script type="text/javascript">
var popup = 0;
var cv = 0;
var pj = 0;
var bl = 0;
var ct = 0;
    </script>
    <style type="text/css">


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
.well{
    /*filter: blur(20px);*/
}
.breaker{
    width:100%;
    height:2px;
    background-color: #fff;
}
ul :nth-of-type(odd) li{
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
    overflow-y:hidden;width:100%;height:100%;

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
.col-xs-3{
    padding-left: 10px; padding-right: 10px; z-index: 10;
}
/*  Flickety css */
* { box-sizing: border-box; }



}
</style>
<nav style="background:<? echo $color_00 ?>; position:fixed; z-index:32;width:100%;"class="dead navbar navbar-default fixed-top">
  <p id="homebtn" style="position:fixed; margin-top:18px; margin-left:10px;">HOME</p>
  <div class="row" >
  <div style="width:330px;  height:2px; position:fixed; background:#000; margin-top:30px; left:50%; margin-left:-165px;"></div>

<!-- margin left - (col-xs-3 padding + pagination width)/2 -->
<div class="row"style="width:360px; position:relative; z-index:15; left:50%; margin-left:-160px;">
    <div class="col-xs-3"  >
        <div id="btn1b" class="pagination navicon01"><img alt="C.V" id="cv-icon" class="svg" src="svg/avatar-male.svg"/></div>
    </div>
    <div class="col-xs-3">
        <div id="btn2b" class="pagination navicon02"><img alt="Projects" id="cv-icon" class="svg" src="svg/circle-menu.svg"/></div>
    </div>
    <div class="col-xs-3">
        <div id="btn3b" class="pagination navicon03"><img alt="Contact" id="cv-icon" class="svg" src="svg/open-book.svg"/></div>
    </div>
    <div class="col-xs-3">
        <div id="btn4b" class="pagination navicon04"><img alt="Contact" id="cv-icon" class="svg" src="svg/chat-bubbles.svg"/></div>
    </div>
  </div>
</div>
</nav>
<!--alt nav-->
<div style="z-index:12; position:fixed;"id="smallnav" class="dead">  
    <div class="altnav"></div>
</div>

   <!--  <div class="scrolltop dead">
    <p style="text-align:center; font-size:25px;position:fixed; right:55px;">^</p>
        <p style="text-align:center; font-size:25px;position:fixed; right:38px; bottom:10px;">TOP</p>

</div> -->

<div class="altbod">
<div class="ball_row">
<div id="ball1" class="cs_ball">
</div>
<div id="ball2" class="cs_ball">
</div>
<div id="ball3" class="cs_ball">
</div>
<div id="ball4" class="cs_ball">
</div>
<div id="ball5" class="cs_ball">
</div>
<div class="strikeout"></div>
</div>
<div class="well">
<p style="color:#fff;"><?  echo "$schematic"; ?></p>
</div>

    <!--page logo-->
<div id="logo">
<form action="index.php" method="post">
<input class="logobtn" style="background-image:url('img/site_logo_4.png'); background-repeat:no-repeat; background-position:50%; background-size:100% auto;" type="submit" name="add" value="" />
</form>
</div>

<!--pagination buttons-->
    <div class="row dead responder" id="mydiv">
    <div class="col-sm-3"  >
        <div id="btn1" class="pagination"><img alt="C.V" id="cv-icon" class="svg  " src="svg/avatar-male.svg"/></div>
    <div class="A01 lasso0"><div class="01 lassoHead0"></div></div>
    </div>
    <div class="col-sm-3">
        <div id="btn2" class="pagination"><img alt="Projects" id="cv-icon" class="svg  " src="svg/circle-menu.svg"/></div>
    <div class="B02 lasso1"><div class="02 lassoHead1"></div></div>
    </div>
    <div class="col-sm-3">
        <div id="btn3" class="pagination"><img alt="Contact" id="cv-icon" class="svg  " src="svg/open-book.svg"/></div>
    <div class="C03 lasso2"><div class="03 lassoHead2"></div></div>
    </div>
    <div class="col-sm-3">
        <div id="btn4" class="pagination"><img alt="Contact" id="cv-icon" class="svg  " src="svg/chat-bubbles.svg"/></div>
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
<div class="blpage">

<!-- <div class="spotlight" style="width:100%; height:350px; background:#fff; margin-bottom:10px;">
    <div class="spot" style="width:80%;height:350px;background:rgba(0,0,0,0.2);margin:auto;">
        <div class="well">
<p id="more" class="" >Project 2</p>
</div>
    </div>
</div> -->
    <!-- Flickity HTML init -->

<div class="carousel" data-flickity>
  <div id="carousel-cell0"><div class="caro-title"><h2>Project 2</h2></div><div id="board0" class=""><div class="caro-date0"><p id="month">September</p><p id="date">27</p></div><p class="caro-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div></div>
  <div id="carousel-cell1"><div class="caro-title"><h2>Project 1</h2></div><div id="board1" class=""><div class="caro-date1"><p id="month">September</p><p id="date">27</p></div><p class="caro-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div></div>
  <div id="carousel-cell2"><div class="caro-title"><h2>Project 2</h2></div><div id="board2" class=""><div class="caro-date2"><p id="month">September</p><p id="date">27</p></div><p class="caro-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div></div>
  <div id="carousel-cell3"><div class="caro-title"><h2>Project 2</h2></div><div id="board3" class=""><div class="caro-date3"><p id="month">September</p><p id="date">27</p></div><p class="caro-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div></div>
  <div id="carousel-cell4"><div class="caro-title"><h2>Project 1</h2></div><div id="board4" class=""><div class="caro-date4"><p id="month">September</p><p id="date">27</p></div><p class="caro-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div></div>
  <div id="carousel-cell5"><div class="caro-title"><h2>Project 2</h2></div><div id="board5" class=""><div class="caro-date5"><p id="month">September</p><p id="date">27</p></div><p class="caro-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div></div>
  <div id="carousel-cell6"><div class="caro-title"><h2>Project 1</h2></div></div>
</div>

</div>
<!--END Blog PAGE CONTENT-->

<!--START Contact PAGE CONTENT-->
<div class="ctpage">
<div class='row' style='background:rgba(255,255,255,0); text-align:center; max-width:1280px; margin:auto;'>

<div class="contact-footer">
<div class='well'>
<p style=' font-size:32px;'>Leave me a message</p>
</div>

<!-- Send message input -->
<div style="width:90%; margin:auto; height:auto;">
<form action="#">
<input class="chatmsg"type="text" placeholder="Type a message" name="chat"/>
<input class="chatsub" type="submit" name="submit" value=">" id="submit" />
</form>
</div>
<!-- END Send message input -->

</div>
<div class="foot">
    <div class="social-footer"> 
        <p class="fc1">Or find me elsewhere..</p>
        <div class="social_icon"><img alt="LinkedIn" id="media-icon" class="svg" src="svg/linkedin_icon.svg"/>
        </div><div class="social_icon"><img alt="Youtube" id="media-icon" class="svg" src="svg/youtube_icon.svg"/></div>
        <div class="social_icon"><img alt="Github" id="media-icon" class="svg" src="svg/github_icon.svg"/></div>
        <div class="social_icon"><img alt="Instructables" id="media-icon" class="svg" src="svg/instructables_icon.svg"/></div>
    </div>
</div>

</div>

</div>
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
$('.skillsover1').slideToggle(1);
$('.skillsover2').slideToggle(1);
    
    //SCRIPT to add flex-first to col-sm-4 if window width < 760px
  if ($(window).width() < 760) {
   // alert('Less than 760');
   $navHeight=30;
   $('.mid').addClass('flex-first')
   $('nav').addClass('fixed-bottom')
   $('nav').removeClass('fixed-top')
}
else {
    // alert('More than 760');
    $navHeight=106;
    $('.mid').removeClass('flex-first')
    $('nav').removeClass('fixed-bottom')
    $('nav').addClass('fixed-top')
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
      $('#more').toggleClass('active')

      //expand readmore c.v section
   });

$(".ball_row").click(function () {
     
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


//PAGE HANDLERS
 //element-panel on element-item click
$('.element-item').click(function () {
    // $('.element-panel').toggleClass('active')
    $('.element-panel-top').toggleClass('slidedown')
      $('.element-panel-bottom').toggleClass('slideupslow')
      $('.element-item').toggleClass('toggleborder')
      // $('.element-item').toggleClass('blurme')
//$('.element-panel').toggle();
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

//skills pop
$('#skillpop1').click(function () {
    var $this = $('.dpop');
    $('.skillsover1').slideToggle(600);
    });
$('#skillpop2').click(function () {
    $('.skillsover2').slideToggle(600);
    });


window.onscroll = function() {myFunction()};

var push = 500;
   $('.allbtn').click(function () {
    push = 500;
    console.log("push= "+push);
    });
     $('.webbtn').click(function () {
    push = 0;
    console.log("push= "+push);
    });
      $('.techbtn').click(function () {
    push = 0;
    console.log("push= "+push);
    });
       $('.allbtn').click(function () {
    push = 0;
    console.log("push= "+push);
    });

function myFunction() {
    var cvsec = 600;
    var projectsec = 1100;
    var blogsec = 1600+push;
    var contactsec = 2100+push;

    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
        $('nav').addClass('active')
        $('#smallnav').addClass('active')
        
    } else {
        $('nav').removeClass('active')
         $('#smallnav').removeClass('active')
    }
    //change text on scroll to C.V
    if (document.documentElement.scrollTop > cvsec & document.documentElement.scrollTop < projectsec) {
$(".altnav").html("<p class='sec-text'>C.V<p>");
$('.navicon01').css('border', '2px solid <? echo $color_hi ?>');
$('.scrolltop').addClass('active')
    }else{
    $('.scrolltop').removeClass('active')
    $('.navicon01').css('border', '2px solid white');
    }
//change text on scroll to projects
    if (document.documentElement.scrollTop > projectsec & document.documentElement.scrollTop < blogsec) {
$(".altnav").html("<p class='sec-text'>Projects!<p>");
$('.navicon02').css('border', '2px solid <? echo $color_hi ?>');
$('.scrolltop').addClass('active')
    }else{
    $('.scrolltop').removeClass('active')
    $('.navicon02').css('border', '2px solid white');
    }
    //change text on scroll to blog
    if (document.documentElement.scrollTop > blogsec & document.documentElement.scrollTop < contactsec) {
$(".altnav").html("<p class='sec-text'>DevBlog<p>");
$('.navicon03').css('border', '2px solid <? echo $color_hi ?>');
    }else{
$('.navicon03').css('border', '2px solid white');
    }
    //change text on scroll to contact
    if (document.body.scrollTop > contactsec || document.documentElement.scrollTop > contactsec) {
$(".altnav").html("<p class='sec-text'>contact!<p>");
$('.navicon04').css('border', '2px solid <? echo $color_hi ?>');
    }else{
$('.navicon04').css('border', '2px solid white');
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