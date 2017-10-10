<?php
echo "
<style type='text/css'>
.element-item{

background-image:url('img/media.jpg');
}
</style>
<div class='pjpage' style='z-index:0; padding:0px; padding-top:20px;'>
<button id='plusbutton' class='readmore'><p id='pTest'>+</p></button>
    <!--Project filter buttons-->
<div style=' text-align:center; width:100%;'><div id='filters' style='margin-top:-20px;'>  
<button class='button allbtn' data-filter='*'>show all</button>
  <button class='button webbtn' data-filter='.website'>web</button>
  <button class='button techbtn' data-filter='.tech'>tech</button>
  <button class='button mediabtn' data-filter='.Media'>media</button>
</div></div>
  <!--loop project tiles-->
<div class='grid' style='max-width:1080px; margin:auto;'>
<!-- element item -->
  <div class='element-item website' data-category='tech'>
  <div class='windowtint'></div>
  <div class='element-panel-top'>
  <p class='element-title big'>Project one website</p>
 </div>
  <div class='element-panel-bottom'>
  <a href='#'><span class='viewpj'><div class='eyeball'><img alt='Projects' id='eye-icon' class='svg' src='svg/private-eye.svg'/></div></a></span>
  <p class='element-text'>Project One was a project built with tools, made to solve a specific problem.</p>
  </div>
  </div>
<!--end element item -->
<!-- element item -->
  <div class='element-item tech' data-category='tech'>
  <div class='windowtint'></div>
  <div class='element-panel-top'>
  <p class='element-title small'>Project one tech</p>
 </div>
  <div class='element-panel-bottom'>
  <a href='#'><span class='viewpj'><div class='eyeball'><img alt='Projects' id='eye-icon' class='svg' src='svg/private-eye.svg'/></div></a></span>
  <p class='element-text'>Project One was a project built with tools, made to solve a specific problem.</p>
  </div>
  </div>
<!--end element item -->
<!-- element item -->
  <div class='element-item Media' data-category='media'>
  <div class='windowtint'></div>
  <div class='element-panel-top'>
  <p class='element-title small'>Project one media</p>
 </div>
  <div class='element-panel-bottom'>
  <a href='#'><span class='viewpj'><div class='eyeball'><img alt='Projects' id='eye-icon' class='svg' src='svg/private-eye.svg'/></div></a></span>
  <p class='element-text'>Project One was a project built with tools, made to solve a specific problem.</p>
  </div>
  </div>
<!--end element item -->
</div>
<!--end loop project tiles-->
</div>
";
?>
