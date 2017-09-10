
$(document).ready(function()
{

 //lassoo button 1 on  btn1 hover
$('#btn1').mouseover(function () {
   $('.A01').addClass('lassoStretch0')
   $('.lassoHead0').addClass('lassoHeadStretch0')
    });
$('#btn1').mouseout(function () {
   $('.lasso0').removeClass('lassoStretch0')
   $('.lassoHead0').removeClass('lassoHeadStretch0')
    });

 //lassoo button 2 on  btn1 hover
$('#btn2').mouseover(function () {
   $('.B02').addClass('lassoStretch1')
   $('.lassoHead1').addClass('lassoHeadStretch1')
    });
$('#btn2').mouseout(function () {
   $('.lasso1').removeClass('lassoStretch1')
   $('.lassoHead1').removeClass('lassoHeadStretch1')
    });

//lassoo button 3 on  btn3 hover
$('#btn3').mouseover(function () {
   $('.C03').addClass('lassoStretch2')
   $('.lassoHead2').addClass('lassoHeadStretch2')
    });
$('#btn3').mouseout(function () {
   $('.lasso2').removeClass('lassoStretch2')
   $('.lassoHead2').removeClass('lassoHeadStretch2')
    });

//lassoo button 4 on  btn4 hover
$('#btn4').mouseover(function () {
   $('.D04').addClass('lassoStretch3')
   $('.lassoHead3').addClass('lassoHeadStretch3')
    });
$('#btn4').mouseout(function () {
   $('.lasso3').removeClass('lassoStretch3')
   $('.lassoHead3').removeClass('lassoHeadStretch3')
    });

 });