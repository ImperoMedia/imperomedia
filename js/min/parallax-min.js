function scrollFooter(o,t){console.log(o),console.log(t),$(".site-footer").css(o>=t?{bottom:"0px"}:{bottom:"-"+t+"px"})}$(window).load(function(){var o=$(window).height(),t=$(".site-footer").height(),i=o+$(".front_content").height()+$(".site-footer").height()-20;$("#scroll-animate, #scroll-animate-main").css({height:i+"px"}),$("#intro").css({height:o+"px","line-height":o+"px"}),$(".wrapper-parallax").css({"margin-top":o+"px"}),scrollFooter(window.scrollY,t),window.onscroll=function(){var o=window.scrollY;$("#scroll-animate-main").css({top:"-"+o+"px"}),$("#intro").css({"background-position-y":50-100*o/i+"%"}),scrollFooter(o,t)}});