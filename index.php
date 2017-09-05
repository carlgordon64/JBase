<!DOCTYPE html>
<html style="overflow-x:hidden;">
<head>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

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

.pagination{
    width:60%; height:40px; margin:auto; background:rgba(255,255,255,0);
    border:2px solid white; text-align:center; color:white;
}
.pagination:hover{
    cursor:pointer;
}
.pagination p{
     color:white;
    margin:auto;
}
.pagination a{
    color:white;
    text-align: center;
    margin:auto;
    text-decoration: none;
}
#mydiv {
    width:100%;
    margin:auto;
    margin-top:80px;
    height:300px;
    background:rgba(0,0,0,0);
    transition:0.4s ease all;
}
.responder{
    max-width: 800px;
    margin:auto;
}

.altbod{
    height:auto;
    margin:auto;
    padding-top:280px;
    max-width:1280px;
    background:rgba(0,0,0,0.1);
}
.hide{
    display:none;
}
.dead{
    opacity:0;
    visibility: hidden;
    transition:0.9s ease;
}
.active{
    opacity:1;
    visibility: visible;
    transition:0.9s ease;
}

#logo{
    cursor:pointer;
    margin:auto;
    width:200px;
     height:200px;
     border-radius:100%;
     background:#fff;
}

@-webkit-keyframes pulse{0%{-webkit-transform:scale(1.0);}
    50%{-webkit-transform:scale(0.9);}
    100%{-webkit-transform:scale(1.0);}
}
@keyframes pulse{0%{transform:scale(1.0);}
50%{transform:scale(0.9);}
100%{transform:scale(1.0);}
}
.pulse{-webkit-animation:pulse 1.2s infinite;-moz-animation:pulse 1.2s infinite;-ms-animation:pulse 1.2s infinite;animation:pulse 1.2s infinite;}


</style>

<nav style="background:#000; position:fixed; width:100%;"class="dead navbar navbar-default navbar-fixed-top">
  <div class="row">
    <div class="col-sm-3"  >
        <div class="pagination"><p>C.V</p></div>
    </div>
    <div class="col-sm-3">
        <div class="pagination"><p>Projects</p></div>
    </div>
    <div class="col-sm-3">
        <div class="pagination"><p>Blog</p></div>
    </div>
    <div class="col-sm-3">
        <div class="pagination"><p>Contact</p></div>
    </div>
  </div>
</nav>


<div class="altbod">

    <!--page logo-->
<div id="logo"></div>

<!--pagination buttons-->
    <div class="row dead responder" id="mydiv">
    <div class="col-sm-3"  >
        <div id="btn1" class="pagination"><a id="btn1" href="#">C.V</a></div>
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
 //scroll to pj page on btn2 click
$('#btn2').click(function () {
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
 //scroll to ct page on btn4 click
$('#btn4').click(function () {
    ct = 1;
    $('html, body').animate({
        scrollTop: $(".ctpage").offset().top
    }, 1000);
    });

window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 840 || document.documentElement.scrollTop > 840) {
        $('nav').addClass('active')
    } else {
        $('nav').removeClass('active')
    }
}




});
</script>
</html>