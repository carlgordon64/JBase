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

    # code...
    echo "<style type='text/css'>
    .lassoHead$i{
        transition:1s ease all;
        z-index:15;
 border-radius:100%; width:20px; height:20px; position:inherit; margin:auto; margin-left:-10px; top:0px; background:white;  opacity:0.3; 
    }

     .lassoHeadStretch$i{
        transition:0.6s ease all;
        z-index:15;
    top:$lassoLength; background:white; opacity:1; 
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
    top:-15px;
    background-color:#fff;
    width:80px;
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
    border-bottom:1px solid white;
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
#cv-icon:hover path {
    transition:0.4s ease all;
    fill: $cs_hi;
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
    height:$pageY;
    background:$cs_03;
} 
.ctpage{
    width:100%;
    min-height:500px;
    height:$pageY;
    background:$cs_04;
} 
</style>
";

?>