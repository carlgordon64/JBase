<?php

//bars 1-6 development skills
//bars 7-12 design skills
$config = array(
/* html5 */ "bar1" => "90",
/* css */ "bar2" => "100",
/* php */ "bar3" => "75",
/* jquery */ "bar4" => "90",
/* js */ "bar5" => "80",
/* sql */ "bar6" => "80",

/* photoshop */ "bar7" => "100",
/* illustrator */ "bar8" => "76",
/* mockplus */ "bar9" => "80",
/* maya */ "bar10" => "70",
/* premiere */ "bar11" => "60",
/* indesign */ "bar12" => "54"
);

// total number of bars within the array (+1 for array) - used for array control 
$total = 12+1;


echo "
<style type='text/css'>
";
/* These elements will loop and iterate by 1 */
//$i will pass ID value
for ($i=0; $i<=$total; $i++){
  echo "
.myProgress$i {
  z-index:30;
  margin-top:-10px;
  width: 50%;
  margin-left:45%;
  background-color: rgba(0,0,0,0.2);
  border-radius:20px;
  overflow: hidden;
  border:2px solid transparent;
}
";
}
/* End loop */
/* general styling */
echo "
.myBar {
  z-index:30;
  transition:0.9s ease all;
  width: 1%;
  height: 20px;
  background-color: $cs_00;
  border:2px solid none;
  border-radius:20px;
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
  
}
.myBarFill{
  z-index:30;
  transition:0.9s ease all;
  width: 0%;
  height: 20px;
  background-color: #fff;
  border:2px solid none;
  border-radius:20px;
   border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
  
background: green; /* Old browsers */
background: -moz-linear-gradient(left, $cs_00 0%, $cs_04 50%, $cs_hi 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, $cs_00 0%,$cs_04 50%,$cs_hi 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, $cs_00 0%,$cs_04 50%,$cs_hi 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='$cs_00', endColorstr='$cs_hi',GradientType=1 ); /* IE6-9 */
}
.skills li{
  list-style-type: none;
  padding:5px;
  overflow: hidden;
  max-height: 62px;
  height:62px;
  margin-top: 0px;
  text-align: right;
  border-bottom:1px solid rgba(255,255,255,0.08);
  
}
  .skills li p{
    font-family: 'Comfortaa', cursive;
    font-size:16px;
    position: relative;
    z-index:10;
    display:inline-block;
    background:rgba(0,0,0,0);
    width:200px;
    height:auto;
    top:14px;
    left:-180px;
padding:0px;
margin:0;
  }
  .skillslist{
    background:rgba(255,255,255,0);
  }
    /*Media @ 1000px or smaller*/
@media screen and (max-width: 1000px) {

.skills li p{
left:-120px;
}

.skills{
width:100%;
  }

}
  /*Media @ 760px or smaller*/
@media screen and (max-width: 760px) {

.skills li p{
left:-230px;
}

}
";

/* These elements will also loop and iterate by 1 */
/* This for loop steps through config array to find the current progress % and applies it to the current bar*/

for ($j2=1; $j2<$total; $j2++){
  $x2 = $config['bar'.$j2];
//echo $x2;
echo "
.myProgress$j2 .myBarFill{
width: $x2%;
  }
";
}

echo "
</style>
  ";
  ?>