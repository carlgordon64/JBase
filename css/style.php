<?php

$color1 = 'rgba(255,255,255,0.5)';

$pageY = "auto";

$colorscheme = $_SESSION["colorset"];

//color scheme swicth
switch ($colorscheme) {
    case 1:
    $cs_00="#A3D0C1";
    $cs_01="#e0e0e0";
    $cs_02="#2F343B";
    $cs_03="#405F59";
    $cs_04="#A3D0C1";
        break;
    case 2:
    $cs_00="#1F618C";
    $cs_01="#2C3E50";
    $cs_02="#E74C3C";
    $cs_03="#ECF0F1";
    $cs_04="#3498DB";
        break;
    case 3:
    $cs_00="#1b1f20";
    $cs_01="#703030";
    $cs_02="#2F343B";
    $cs_03="#7E827A";
    $cs_04="#E3CDA4";
    break;
    case 4:
    $cs_00="#324D5C";
    $cs_01="#46B29D";
    $cs_02="#F0CA4D";
    $cs_03="#E37B40";
    $cs_04="#DE5B49";
    break;
     case 5:
    $cs_00="#242C38";
    $cs_01="#454C57";
    $cs_02="#FF9326";
    $cs_03="#E5462E";
    $cs_04="#FFFFFF";
    break;
    case 6:
    $cs_00="#DBEFE7";
    $cs_01="#B2C8C6";
    $cs_02="#F2F3F2";
    $cs_03="#A69B8C";
    $cs_04="#D6CCBC";
    break;
     case 7:
    $cs_00="#272F32";
    $cs_01="#9DBDC6";
    $cs_02="#FFFFFF";
    $cs_03="#FF3D2E";
    $cs_04="#DAEAEF";
    break;
    default:
    $cs_00="#2C3E50";
    $cs_01="#1A4F63";
    $cs_02="#068587";
    $cs_03="#6FB07F";
    $cs_04="#FCB03C";
}


//lasso styling
for ($i=0; $i <4 ; $i++) { 

    switch ($i) {
    case 1:
    //Button 2 lasoo
        $color1 = 'rgba(25,200,255,0.5)';
        $color2 = 'rgba(25,200,255,0.5)';
        $lassoLength = "800px";
        break;
    case 2:
    //Button 3 lasoo
        $color1 = 'rgba(0,255,200,0.5)';
        $color2 = 'rgba(0,255,200,0.5)';
        $lassoLength = "1200px";
        break;
    case 3:
    //Button 4 lasoo
        $color1 = 'rgba(255,0,230,0.5)';
        $color2 = 'rgba(255,0,230,0.5)';
        $lassoLength = "1700px";
        break;
    default:
    //Button 1 lasoo
        $color1 = 'rgba(0,0,0,0.5)';
        $color2 = 'rgba(0,0,0,0.5)';
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
    
    

    @media screen and (max-width: 760px) {
.lassoStretch$i{
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

.skills{
    width:100%;
    height:400px;
    overflow:hidden;
    background:$cs_02;
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
.logobtn{
    cursor:pointer;
    margin:auto;
    width:200px;
     height:200px;
     border-radius:100%;
     border:2px dashed #fff;
     background:#fff;
}

.altbod{
    height:auto;
    margin:auto;
    padding-top:200px;
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