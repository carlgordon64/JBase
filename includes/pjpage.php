<?php
echo "
<div class='pjpage' style='z-index:0; padding:0px; padding-top:20px;'>
<button id='plusbutton' class='readmore'><p id='pTest'>+</p></button>
    <!--Project filter buttons-->
<div style=' text-align:center; width:100%;'><div id='filters' style='margin-top:-20px;'>  
<button class='button' data-filter='*'>show all</button>
  <button class='button' data-filter='.website'>website</button>
  <button class='button' data-filter='.tech'>tech</button>
  <button class='button' data-filter='.media'>media</button>
</div></div>
  <!--loop project tiles-->
<div class='grid' style='max-width:1080px; margin:auto;'>

  <div class='element-item tech pj1' data-category='tech'>
  <div class='element-panel dead'>
<div style='position:absolute;margin-top:105px; left:50%; margin-left:-15px;'><img alt='Projects' id='cv-icon' class='svg social-link' src='svg/private-eye.svg'/></div>
<p class='element-title'>Project one</p>
<p style='text-align:center;margin-top:35px;padding-left:16px; padding-right:16px; font-size:14px;'>Project One was a project built with tools, made to solve a specific problem.</p>
  </div>
    <p class='number'>80</p>
    <p class='weight'>200.59</p>
  </div>


  <div class='element-item website' data-category='website'>
    <h3 class='name'>Tellurium</h3>
    <p class='symbol'>Te</p>
    <p class='number'>52</p>
    <p class='weight'>127.6</p>
  </div>
  <div class='element-item website' data-category='website'>
    <h3 class='name'>Bismuth</h3>
    <p class='symbol'>Bi</p>
    <p class='number'>83</p>
    <p class='weight'>208.980</p>
  </div>
  <div class='element-item  website' data-category='website'>
    <h3 class='name'>Lead</h3>
    <p class='symbol'>Pb</p>
    <p class='number'>82</p>
    <p class='weight'>207.2</p>
  </div>
  <div class='element-item tech' data-category='tech'>
    <h3 class='name'>Gold</h3>
    <p class='symbol'>Au</p>
    <p class='number'>79</p>
    <p class='weight'>196.967</p>
  </div>
  <div class='element-item media' data-category='media'>
    <h3 class='name'>Potassium</h3>
    <p class='symbol'>K</p>
    <p class='number'>19</p>
    <p class='weight'>39.0983</p>
  </div>
  <div class='element-item media' data-category='media'>
    <h3 class='name'>Sodium</h3>
    <p class='symbol'>Na</p>
    <p class='number'>11</p>
    <p class='weight'>22.99</p>
  </div>
</div>
<!--end loop project tiles-->
</div>
";
?>
