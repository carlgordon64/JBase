<?php
echo "
<style type='text/css'>
.website{
background-image:url('img/dslimg.jpg');
}
.tech{
background-image:url('img/laptopbox.jpg');
}
.Media{
background-image:url('img/media.jpg');
}
</style>
<div class='pjpage' style='z-index:0; padding:0px; padding-top:20px;'>
<button id='plusbutton' class='readmore'><p id='pTest'>+</p></button>
    <!--Project filter buttons-->
<div style=' text-align:center; width:100%;'><div id='filters' style='margin-top:-20px;'>  
<button class='button allbtn' data-filter='*'>Show All</button>
  <button class='button webbtn' data-filter='.website'>Web</button>
  <button class='button techbtn' data-filter='.tech'>Tech</button>
  <button class='button mediabtn' data-filter='.Media'>Media</button>
</div></div>
  <!--loop project tiles-->
<div class='grid' style='max-width:1080px; margin:auto;'>
<!-- element item -->
  <div class='element-item website' data-category='tech'>
  <div class='windowtint'></div>
  <div class='element-panel-top'>
  <p class='element-title small'>DSL Website</p>
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
  <p class='element-title small'>Laptop Control Box</p>
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
  <p class='element-title small'>Lucid Dream</p>
 </div>
  <div class='element-panel-bottom'>
  <div class='category-label'><p>media</p></div>
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
