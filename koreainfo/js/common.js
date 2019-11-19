$(function(){
	cinit();
})//endfunction

function cinit() {
 gnb();
 topScroll();
 lgnb();
}
function gnb(){
	$('#gnb>li').hover(function(){
		$(this).children('ul').show()
	},function(){
		$('#gnb>li>ul').hide()
	})

}

function lgnb(){
$('#header .all-menu').on('click',function(){
	$('#bg').show()
	$('.l-gnb li ul').css('display','none')
	$('.left-menu').animate({'left':'0'})
})

$('.left-menu .close').on('click',function(){
	$('#bg').hide()
	$('.left-menu').animate({'left':'-100%'})
})

$('.l-gnb li').on('click',function(){
	$('.l-gnb li ul').slideUp();
	$(this).find('ul').slideDown()
})


}


function topScroll(){}
