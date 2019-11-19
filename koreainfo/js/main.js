$(function(){
	init();
})//endfunction

function init() {

 mainVisual();
 sideheight();
 sub2();
 sub3();

}
function mainVisual(){

	var timer=0,delay=3000,cnt=0,next=0;

	$('#visual .visual1 li').hide().first().show()

	timer=setInterval(make,delay)
	function make(){
		cnt++
		if(cnt>2){cnt=0}
		make1()
	}

	$('#visual .paging li').on('click',function(){
		cnt=$(this).index();
		make1()

	})

	function make1(){
		$('#visual .visual1 li').eq(cnt).fadeIn(700)
		$('#visual .visual1 li').eq(next).fadeOut(700)
		$('#visual .paging li').removeClass('on')
		$('#visual .paging li').eq(cnt).addClass('on')
		next=cnt;
		clearInterval(timer)
		timer=setInterval(make,delay)
	}

}

function sideheight(){
	var h=$(window).height()
	$('#sideBar').css('height',h)
}

function sub2(){
	$('.sub2-work .work-detail dt').on('click',function(){
		$('.sub2-work .work-detail dd').slideUp();
		$(this).next().slideDown()
	})
}

function sub3(){
	$('.sub3-relationsite dl dt').on('click',function(){
	$('.sub3-relationsite dl dd').hide();
	$(this).next('dd').fadeIn();
	$('.sub3-relationsite dl dt').removeClass('on')
	$(this).addClass('on')
	})
}
