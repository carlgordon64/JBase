<!DOCTYPE html>
<html style="overflow:hidden;">
<head>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body style="background:#e0e0e0; overflow-x:hidden;">

<style type="text/css">  
.cvpage{
    width:100%;
    height:800px;
    background:red;
}  
.pagination{
    width:60%; height:40px; margin:auto; background:rgba(255,255,255,0);
    border:2px solid white;
}
.pagination:hover{
    cursor:pointer;
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
    margin:auto;
    padding-top:280px;
    max-width:1280px;
    height:860px;
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

	<?php
// Start the session
session_start();
// $_SESSION["product"] = "Product Title";
include('css/style.php');
?>
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

<!--cv popup-->
<div class="cv dead cvpage">
<div style="width:100%;  background:#000; text-align:center;">
     <p id="up" style="color:white;"><b>^</b></p>
</div>
</div>
<!--end cv popup-->

    <!--alt bod end-->
    </div>
</body>
<script type="text/javascript">

var popup = 0;

$(document).ready(function()
{
    //switch pulse off
    $('#logo').removeClass('pulse')

//toggle page buttons on click
    $('#logo').click(function () {
$('.responder').toggleClass('active')
    });
//add pulse on mouseover logo
    $('#logo').mouseover(function () {
  $('#logo').addClass('pulse')
});
//remover pulse on mouseout logo
 $('#logo').mouseout(function () {
  $('#logo').removeClass('pulse')
});
 //pull up cv page on cv button click
$('#btn1').click(function () {
    popup = 1;
    $('.cv').toggleClass('active')
    $('html, body').animate({
        scrollTop: $(".cv").offset().top
    }, 1000);
    });

 //pull up cv page on cv button click
$('#up').click(function () {
    popup = 0;
    $('.cv').toggleClass('active')
    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 1000);
    });

});
</script>
</html>