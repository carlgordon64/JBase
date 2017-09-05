<?php

$color1 = 'rgba(255,255,255,0.5)';

$pageY = "500px";

echo"
<style type='text/css'>
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
    height:$pageY;
    background:red;
}  
.pjpage{
    width:100%;
    height:$pageY;
    background:blue;
} 
.blpage{
    width:100%;
    height:$pageY;
    background:green;
} 
.ctpage{
    width:100%;
    height:$pageY;
    background:yellow;
} 
</style>
";

?>