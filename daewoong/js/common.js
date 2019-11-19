$(function(){
	init();
})//전체페이의 공통 js내용

function init() {
 gnb(); //  메뉴
 subgnb()
 mainvisual();
 product(); 
 sub56()
 side_menu();
 gallery();
 top_scroll(); 
}

function gnb(){
	//실제 메뉴의 js 내용들어가기 
	$('#gnb>li').on('mouseenter',function(){
		$('#gnb li ul').slideDown()
	})
	
	$('#header').on('mouseleave',function(){
		$('#gnb li ul').slideUp()
	})
	
}


function subgnb(){
	isplay=true
	$('.side-menu>li>a').on('click',function(){
		$(this).next().slideToggle()
	$('.side-menu>li').removeClass('on')	
	$(this).parent().addClass('on')	
	return false;
	})
}

function sub56(){
	$('.sub-body05 .product2 dt').on('click',function(){
		$('.sub-body05 .product2 dd').hide()
		$(this).next('dd').show()
		
		$('.sub-body05 .product2 dt').removeClass('on')	
		$(this).addClass('on')	
	})
}

function mainvisual(){
	var cnt=0,timer=0,delay=4000,current=0,next=0;
	
	$('#visual .main-visual li').hide().first().show()
	timer=setInterval(make,delay)
	
	function make(){
		next++
		if(next>2){next=0}	
		visual1()
	}
	
	$('#visual .paging li').on('click',function(){
		cnt=$(this).index()
		$('#visual .main-visual li').eq(cnt).fadeIn(700)
		$('#visual .main-visual li').eq(next).fadeOut(700)
		$('#visual h2').eq(cnt).fadeIn(700)
		$('#visual h2').eq(next).fadeOut(700)
		next=cnt
		$('#visual .paging li').removeClass('on')	
		$(this).addClass('on')
		clearInterval(timer)
		timer=setInterval(make,delay)
		
	})
	
	$('#visual .prev-next .prev').on('click',function(){
		next--
		if(next<0){next=2}
		visual1()
	})
	
	$('#visual .prev-next .next').on('click',function(){
		next++
		if(next>2){next=0}	
		visual1()
	})
	
	function visual1(){
		
		$('#visual .main-visual li').eq(next).fadeIn(700)
		$('#visual .main-visual li').eq(current).fadeOut(700)
		$('#visual h2').eq(next).fadeIn(700)
		$('#visual h2').eq(current).fadeOut(700)
		$('#visual .paging li').removeClass('on')	
		$('#visual .paging li').eq(next).addClass('on')
		
		current=next
		clearInterval(timer)
		timer=setInterval(make,delay)
	}
} 
//메인비주얼

function product(){
	var cnt=0,timer=0,delay=3000,next=0
	
	timer=setInterval(make,delay)
	function make(){
		cnt++
		if(cnt>4){cnt=0}
		$('.con2 .product li').eq(cnt).find('img').stop().css('margin-left','100%').animate({'margin-left':'0'})
		$('.con2 .product li').eq(next).find('img').stop().css('margin-left','0').animate({'margin-left':'-100%'})
		$('.con2 .product li .p-text').hide()
		$('.con2 .product li').eq(cnt).find('.p-text').fadeIn()		
		next=cnt
		clearInterval(timer)
		timer=setInterval(make,delay)
		$('.con2 .paging li').removeClass('on')
		$('.con2 .paging li').eq(cnt).addClass('on')
		
	}
	
	$('.con2 .paging li').on('click',function(){
		cnt=$(this).index()
		
		
		$('.con2 .product li').eq(cnt).find('img').stop().css('margin-left','100%').animate({'margin-left':'0'})
		$('.con2 .product li').eq(next).find('img').stop().css('margin-left','0').animate({'margin-left':'-100%'})
		$('.con2 .product li .p-text').hide()
		$('.con2 .product li').eq(cnt).find('.p-text').fadeIn()		
		next=cnt
		
		$('.con2 .paging li').removeClass('on')
		$('.con2 .paging li').eq(cnt).addClass('on')
		clearInterval(timer)
		timer=setInterval(make,delay)
	})
	
	$('.con3 dl dt').on('click',function(){
		$('.con3 dl dt').removeClass('on')
		$(this).addClass('on')
	})
	
}



function side_menu(){}
function gallery(){}
function top_scroll(){}
