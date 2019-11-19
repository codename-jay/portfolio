$(function(){
	init();
})//endfunction

function init() {

 mainVisual(); 
 allMenu();
 timesale();

}
function mainVisual(){
	var timer=0,delay=3000,current=0,old=0
	timer=setInterval(make,delay)
	
	$('#visual .v-box .visual-img li').css('left','100%').first().css('left','0')
	
	$('#visual .v-box .paging li').on('click',function(){
		current=$(this).index()
		$('#visual .v-box .paging li').removeClass('on')
		$('#visual .v-box .paging li').eq(current).addClass('on')
		$('#visual .v-box .visual-img li').eq(current).stop().css('left','100%').animate({'left':'0'})
		$('#visual .v-box .visual-img li').eq(old).stop().css('left','0').animate({'left':'-100%'})
		old=current
		clearInterval(timer)
		timer=setInterval(make,delay)	
	})
	$('#visual .v-box .paging li').hover(function(){
		clearInterval(timer)
		timer=setInterval(make,delay)
	})
	
	function make(){
		current++
		if(current>2){current=0}
		$('#visual .v-box .paging li').removeClass('on')
		$('#visual .v-box .paging li').eq(current).addClass('on')

		$('#visual .v-box .visual-img li').eq(current).stop().css('left','100%').animate({'left':'0%'})
		$('#visual .v-box .visual-img li').eq(old).stop().css('left','0').animate({'left':'-100%'})
		old=current;
		clearInterval(timer)
		timer=setInterval(make,delay)	
	}
	
}

function allMenu(){
	
	$('.all-open').on('click',function(){
		$('#allMenu').fadeIn()
	})
	
	$('#allMenu .close').on('click',function(){
		$('#allMenu').fadeOut()
	})
	
	$('#allMenu .gnb li').on('click',function(){
		$('#allMenu').fadeOut()
	})
}

function timesale(){
	var timer=0,delay=1000;
	timer=setInterval(make,delay)
	
	make()
	
	function make(){
		var now=new Date()
		h=now.getHours();
		m=aaa(now.getMinutes());
		s=aaa(now.getSeconds());

	if(h>12){
		h=aaa(h-12)
		h='PM'+	h
	}else{
		h=aaa(h)
		h='AM'+	h
	}

	$('#content .sale-timer span').eq(0).text(h)
	$('#content .sale-timer span').eq(1).text(m)
	$('#content .sale-timer span').eq(2).text(s)

}
	
	function aaa(num){
		if(10>num){
			return '0'+num
		}else{
			return num
		}
	}
	
	
}


