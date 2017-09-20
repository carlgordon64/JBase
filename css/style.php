<?php

$color1 = 'rgba(255,255,255,0.5)';

$pageY = "auto";

$colorscheme = $_SESSION["colorset"];




//colorscheme map
//$cs_00= header bg color;
//$cs_01= contacts bg color;
//$cs_02= projects + skills bg color;
//$cs_03= blog bg color;
//$cs_04= contact bg color;
//$cs_hi= highlight / pagination hover color;
//color scheme swicth
switch ($colorscheme) {
    case 1:
    $cs_00="#A3D0C1";
    $cs_01="#e0e0e0";
    $cs_02="#2F343B";
    $cs_03="#405F59";
    $cs_04="#A3D0C1";
    $font_color="#000";
    $font_color2="#fff";
    $cs_hi = "#A3D0C1";
    $schematic = "mellow";
        break;
    case 2:
    $cs_00="#DBEFE7";
    $cs_01="#B2C8C6";
    $cs_02="#F2F3F2";
    $cs_03="#A69B8C";
    $cs_04="#D6CCBC";
    $font_color="#1b1f20";
    $font_color2="#1b1f20";
    $cs_hi = "#1b1f20";
    $schematic = "arctic";
        break;
    case 3:
    $cs_00="#1b1f20";
    $cs_01="#703030";
    $cs_02="#2F343B";
    $cs_03="#7E827A";
    $cs_04="#E3CDA4";
    $font_color="#fff";
    $font_color2="#fff";
    $cs_hi = "#703030";
    $schematic = "vintage";
    break;
    case 4:
    $cs_00="#324D5C";
    $cs_01="#46B29D";
    $cs_02="#F0CA4D";
    $cs_03="#E37B40";
    $cs_04="#DE5B49";
    $font_color="#fff";
    $font_color2="#000";
    $cs_hi = "#F0CA4D";
    $schematic = "pineapple";
    break;
     case 5:
    $cs_00="#242C38";
    $cs_01="#454C57";
    $cs_02="#FF9326";
    $cs_03="#E5462E";
    $cs_04="#FFFFFF";
    $font_color="#fff";
    $font_color2="#fff";
    $cs_hi = "#FF9326";
    $schematic = "lemons";
    break;
    case 6:
    $cs_00="#DBEFE7";
    $cs_01="#B2C8C6";
    $cs_02="#F2F3F2";
    $cs_03="#A69B8C";
    $cs_04="#D6CCBC";
    $font_color="#000";
    $font_color2="#000";
    $cs_hi = "#fff";
    $schematic = "blanca";
    break;
     case 7:
    $cs_00="#272F32";
    $cs_01="#9DBDC6";
    $cs_02="#FFFFFF";
    $cs_03="#FF3D2E";
    $cs_04="#DAEAEF";
    $font_color="#000";
    $font_color2="#000";
    $cs_hi = "#FF3D2E";
    $schematic = "futurama";
    break;
      case 8:
    $cs_00="#B85490";
    $cs_01="#CFD66C";
    $cs_02="#2D5B5E";
    $cs_03="#B08914";
    $cs_04="#8FC9FF";
    $font_color="#000";
    $font_color2="#000";
    $cs_hi = "#2D5B5E";
    $schematic = "candyland";
    break;
    default:
    $cs_00="#1F618C";
    $cs_01="#2C3E50";
    $cs_02="#E74C3C";
    $cs_03="#ECF0F1";
    $cs_04="#3498DB";
    $font_color="#fff";
    $font_color2="#fff";
    $cs_hi = "#E74C3C";
    $schematic = "honeypot";
}

$_SESSION["color_hi"] = $cs_hi;
$_SESSION["color_00"] = $cs_00;


//lasso styling
for ($i=0; $i <4 ; $i++) { 

    switch ($i) {
    case 1:
    //Button 2 lasoo
        $color1 = $cs_01;
        $color2 = $cs_02;
        $lassoLength = "800px";
        break;
    case 2:
    //Button 3 lasoo
        $color1 = $cs_02;
        $color2 = $cs_03;
        $lassoLength = "1200px";
        break;
    case 3:
    //Button 4 lasoo
        $color1 = $cs_03;
        $color2 = $cs_04;
        $lassoLength = "1700px";
        break;
    default:
    //Button 1 lasoo
        $color1 = $cs_04;
        $color2 = $cs_01;
        $lassoLength = "300px";

} 
$ii=$i+1;
$color_iterate = ${'cs_0' . $ii};
    # code...
    echo "<style type='text/css'>
    .lassoHead$i{
        transition:1s ease all;
        z-index:15;
 border-radius:100%; width:20px; height:20px; position:inherit; margin:auto; margin-left:-10px; top:0px; background:$color_iterate;  opacity:0.3; 
    }

     .lassoHeadStretch$i{
        transition:0.6s ease all;
        z-index:15;
    top:$lassoLength; 
    background:$color_iterate;; 
    opacity:1; 
    box-shadow: 0px 4px 5px rgba(0,0,0,0.2);
    }

    .lasso$i{
     transition:1s ease all;
     z-index:15;
     width:2px; height:0px; background:$color1; position: relative; left:0px; margin:auto; opacity:0.6; 
    }

     .lassoStretch$i{
    transition:0.6s ease all;
    z-index:15;
      height:$lassoLength; background:$color2; opacity:1;
      box-shadow: 0px 4px 5px rgba(0,0,0,0.2);
    }
    
    

    @media screen and (max-width: 768px) {
.lassoStretch$i{
    display:none;
    }
    .lassoHead$i{
    display:none;
    }

   
}

</style>
    ";
}

echo"
<style type='text/css'>

body{
    background:$cs_00;
}
.pagination{
    transition:0.4s ease all;
    border-radius:100%;
    width:60px; height:60px; margin:auto; background:rgba(0,0,0,0.05);
    border:2px solid white; text-align:center; color:white;
}
nav .pagination{
    transition:0.4s ease all;
    border-radius:100%;
    width:60px; height:60px; margin:auto; background:rgba(255,255,255,1);
    border:2px solid white; text-align:center; color:white;
}
.border_hi{
    border:2px solid $cs_hi; 
}
.pagination:hover{
    transition:0.4s ease all;
    cursor:pointer;
    box-shadow: 2px 4px 5px rgba(0,0,0,0.2);
    background:rgba(255,255,255,1);
}
.pagination:hover #cv-icon{
    transition:0.4s ease all;
    fill: $cs_hi;

}
nav .pagination:hover{
    transition:0.4s ease all;
    cursor:pointer;
    box-shadow: 2px 4px 5px rgba(0,0,0,0.2);
    background:rgba(255,255,255,1);
}
nav .pagination:hover #cv-icon{
    transition:0.4s ease all;
    fill: $cs_hi;

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
svg {
    fill: #fff;
    width:30px;
    height: auto;
    margin:auto;
}
.social_icon{
    width:80px; height:80px;
    border-radius: 100%;
    background:transparent;
    margin-left: 20px; margin-right: 20px;
    padding:0px;
    display:inline-block;

}
.social_icon svg {
    transition:0.4s ease all;
    fill: #fff;
    width:100%;
    height: auto;
    margin:auto;
    display:inline-block;
    margin-top:-12px;
}
.social_icon:hover #media-icon{
    transition:0.4s ease all;
    fill: $cs_hi;
    cursor:pointer;
    opacity:0.9;
    

}
.social_icon:hover{
box-shadow: 0px 0.5px 15px rgba(0,0,0,0.1);
    }
nav svg {
    fill: #000;
    width:30px;
    height: auto;
    margin:auto;
}
.smallbreaker{
    position:relative;
    top:-10px;
    width:100%;
    height:2px;
    background-color:$cs_00;

}
.ball_row{
    background:transparent;
    padding:0px;
    margin:auto;
    width:100px;
    height:auto;
}
.cs_ball{
    position: relative;
    display:inline-block;
    z-index:1;
    margin:auto;
    width:15px;
    height:15px;
    background-color: transparent;
    border-radius: 100%;
    border:2px solid #fff;
}
.strikeout{
    position:relative;
    z-index:0;
    top:-18px;
    background-color:#fff;
    width:85px;
    height:2px;

}
#ball1{
    background-color:$cs_00;
}
#ball2{
    background-color:$cs_01;
}
#ball3{
    background-color:$cs_02;
}
#ball4{
    background-color:$cs_03;
}
#ball5{
    background-color:$cs_04;
}
.down{
    margin-top:70px;
}
.skills{
    width:100%;
    height:400px;
    overflow:hidden;
    /* bg originally $cs_02 */
    background:rgba(0,0,0,0.05);
     -moz-box-shadow:    inset 0 8px 20px rgba(0,0,0,0.1);
   -webkit-box-shadow: inset 0 8px 20px rgba(0,0,0,0.1);
   box-shadow:         inset 0 8px 20px rgba(0,0,0,0.1);
}
.skills li{
    color:white;
    font-size: 16px;
    background:rgba(255,255,255,0.1);
    padding-top:20px;
    padding-bottom:20px;
    text-align: center;
    border-bottom:2px solid $cs_01;
}
.avatar{
    width:200px;
    height:200px;
    background: $cs_00;
    border:2px dashed white;
    border-radius: 100%;
    margin:auto;
}
.avatarimg{
    position:relative;
    /* top margin = (avatar height) - (avatarimg height/2) */
    top:20px;
    width:160px;
    height:160px;
    background: $cs_hi;
    border:2px solid $cs_00;
    border-radius: 100%;
    margin:auto;
    box-shadow: 0px 0.5px 15px rgba(0,0,0,0.2);
}
.me{
    background-image:url('https://avatars3.githubusercontent.com/u/13386774?v=4&s=460');
    background-size:130% auto;
    background-position:52%;
}
.logobtn{
    cursor:pointer;
    margin:auto;
    width:200px;
     height:200px;
     border-radius:100%;
     border:2px dashed #fff;
     background:#fff;
}
.well p{
    color:$font_color;
}
.well li{
    font-family: 'Raleway', sans-serif;
    color:$font_color2;
}

.altbod{
    height:auto;
    margin:auto;
    padding-top:150px;
    max-width:1280px;
    background:rgba(0,0,0,0.03);
}

.lassoHeadStretch{
        transition:0.6s ease all;
    top:200px; background:white; opacity:1; 
    box-shadow: 0px 4px 5px rgba(0,0,0,0.2);
    }
    
     

p{
    font-family: 'Raleway', sans-serif;
}
.block-left{
	width:100%; height:500px; background:$color1; border-right:1px solid #000;
}
.block-mid{
	width:100%; height:500px; background:$color1;
}
.block-right{
	width:100%; height:500px; background:$color1; border-left:1px solid #000;
}
.cvpage{
    width:100%;
    min-height:500px;
    height:$pageY;
    background:$cs_01;
}  
.pjpage{
    width:100%;
    min-height:500px;
    height:$pageY;
    background:$cs_02;
    box-shadow: 0px -2px 5px rgba(0,0,0,0.2);
} 
.blpage{
    width:100%;
    min-height:500px;
    padding-top:10px;
    height:$pageY;
    background:$cs_03;
} 
/* ---- page dots ---- */

.flickity-page-dots {
  position: absolute;
  width: 100%;
  bottom: -25px;
  padding: 0;
  margin: 0;
  list-style: none;
  text-align: center;
  line-height: 1;
}

.flickity-rtl .flickity-page-dots { direction: rtl; }

.flickity-page-dots .dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 0 8px;
  background: $cs_hi;
  border-radius: 50%;
  opacity: 0.25;
  cursor: pointer;
}

.flickity-page-dots .dot.is-selected {
  opacity: 1;
}
.carousel {
  background: transparent;
}

.carousel-cell {
    transition:0.4s ease all;
  width: 48%;
  height: 460px;
  margin-right: 10px;
  background: #fff;
  opacity: 0.5;
}

.carousel-cell.is-selected {
  opacity: 1;
}

/* cell number */
.carousel-cell:before {
  display: block;
  text-align: center;
  content: none;
  line-height: 200px;
  font-size: 80px;
  color: white;
}
.caro-title{
    z-index:5;
position:absolute; 
bottom:0;
width:100%; 
border-bottom-right-radius: 8px; 
border-bottom-left-radius: 8px;
color:$font_color;
background:$cs_01; height:auto; text-align:center;
 padding-top:50px;
 padding-bottom:10px;
// padding-left:15px;
// padding-right:15px;
font-family: 'Raleway', sans-serif;
}
.caro-date{
    z-index:15;
    position:absolute; bottom:70px; left:30px;
    width:80px; height:80px;
    background-color:red;
    border-radius:100%;
}
#month{
    text-align:center;
    color:$font_color;
    font-family: 'Raleway', sans-serif;
    margin-top:15px;

}
#date{
    text-align:center;
    color:$font_color;
    font-family: 'Raleway', sans-serif;
    margin-top:-30px;
    font-size:24px;

}
.ctpage{
    width:100%;
    min-height:500px;
    height:$pageY;
    background:$cs_04;
} 
.chatsub{
    width:80px;height:80px;
    background:$cs_hi;
    border:2px solid transparent;
    position:relative;
    top:-80px;
    float:right;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
}
.chatsub:hover{
cursor:pointer;
    }
    .chatmsg:hover{
cursor:text;
    }
.chatmsg{
    width:100%;
    height:80px;
    font-size:24px;
    color:#1b1f20;
    padding-left:10px;
    padding-right:90px;
    border:2px solid transparent;
    border-top-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
}
/*Media @ 760px or smaller*/
@media screen and (max-width: 760px) {
    .carousel-cell {
  width: 85%;
}
}
/*Media @ 480px or smaller*/
@media screen and (max-width: 480px) {
    .caro-date{ bottom:70px; left:0px;
}
    .carousel-cell {
  width: 95%;
}
 .pagination{
    transition:0.4s ease all;
    border-radius:0%;
    width:100%; height:60px; margin:auto; background:rgba(0,0,0,0.05);
    border:2px solid white; text-align:center; color:white;
}
    }
</style>
";

?>