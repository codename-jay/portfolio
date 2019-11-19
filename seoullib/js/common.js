$(function(){
	init();
})//endfunction

function init() {
 gnb();
 subGnb();
 topScroll(); 
}

function gnb(){
	
	$('#gnb >li').hover(function(){
		$('#gnb li ul').hide()
		$(this).children('ul').stop().slideDown()
	})
	
	$('#header').on('mouseleave',function(){
		$('#gnb li ul').stop().hide()
	})
	
	$('#gnb li ul li').hover(function(){
		
		$('#gnb li ul li').removeClass('on')
		$(this).addClass('on')
	})
}
////////////////header nav 효과

function subGnb(){
var isplay=true;
$('#subNav .s-nav').on('click',function(){
$('#subNav .s-nav').next().slideUp()
if(isplay){
$(this).next().slideDown()
}else{
$(this).next().slideUp()
}

isplay=!isplay
})

$('#navGnb li').on('click',function(){
$(this).parent().hide()
})

}
////////////////sub nav 효과


function topScroll(){}
