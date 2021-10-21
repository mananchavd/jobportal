/*!
=========================================================
* Material Kit - v1.1.1.0
=========================================================
* Product Page: http://www.creative-tim.com/product/material-kit
* Copyright 2017 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/timcreative/material-kit/blob/master/LICENSE.md)
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*/var transparent=true;var transparentDemo=true;var fixedTop=false;var navbar_initialized=false;$(document).ready(function(){$.material.init();$('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();if($('.datepicker').length!=0){$('.datepicker').datepicker({weekStart:1});}
if($('.navbar-color-on-scroll').length!=0){$(window).on('scroll',materialKit.checkScrollForTransparentNavbar)}
$('[data-toggle="popover"]').popover();$('.carousel').carousel({interval:400000});});materialKit={misc:{navbar_menu_visible:0},checkScrollForTransparentNavbar:debounce(function(){if($(document).scrollTop()>260){if(transparent){transparent=false;$('.navbar-color-on-scroll').removeClass('navbar-transparent');}}else{if(!transparent){transparent=true;$('.navbar-color-on-scroll').addClass('navbar-transparent');}}},17),initSliders:function(){$('#sliderRegular').noUiSlider({start:40,connect:"lower",range:{min:0,max:100}});$('#sliderDouble').noUiSlider({start:[20,60],connect:true,range:{min:0,max:100}});}}
var big_image;materialKitDemo={checkScrollForParallax:debounce(function(){var current_scroll=$(this).scrollTop();oVal=($(window).scrollTop()/3);big_image.css({'transform':'translate3d(0,'+oVal+'px,0)','-webkit-transform':'translate3d(0,'+oVal+'px,0)','-ms-transform':'translate3d(0,'+oVal+'px,0)','-o-transform':'translate3d(0,'+oVal+'px,0)'});},6)}
function debounce(func,wait,immediate){var timeout;return function(){var context=this,args=arguments;clearTimeout(timeout);timeout=setTimeout(function(){timeout=null;if(!immediate)func.apply(context,args);},wait);if(immediate&&!timeout)func.apply(context,args);};};