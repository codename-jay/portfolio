$(function(){
	minit();
})//전체페이의 공통 js내용

function minit() {
 gnb(); //  메뉴
 visual();
 product();
 top_scroll();  
}

function gnb(){
	
	$('#nav').on('click',function(){
		$('#gnb,.close,.nav-bg').fadeIn(500)

	})
	
	$('#gnb>li>a').on('click',function(){
		$('#gnb li').removeClass('on');
		$(this).parents('li').addClass('on');
		$('#gnb li ul').hide();
		$(this).next().show()		
	})
	
	$('.close').on('click',function(){
		$('#gnb,.close,.nav-bg').fadeOut(500)

	})
	
	
}

function visual(){
	var now=0, next=0,timer='',delay=5000;
	
	timer=setInterval(make,delay)
	
	function make(){
		now++
		if(now>2){now=0}
		$('.paging li').removeClass('on');
		$('.paging li').eq(now).addClass('on');
		$('.bgr li').eq(now).fadeIn(500);
		$('.bgr li').eq(next).fadeOut(500);
		next=now;
		clearInterval(timer);
		timer=setInterval(make,delay)
	}
}



function product(){
	
	delay=3000, timer='',cnt=0,next=0;
	
	timer=setInterval(make,delay)
	function make(){
		make1()
	}
	$('.pg-btn .prev a').on('click',function(){
		make1()
	})
	$('.pg-btn .next a').on('click',function(){
		make2()
	})
	
	function make1(){
		cnt++
		if(cnt>4){cnt=0}
		$('.pdr li').eq(cnt).stop().css('left','100%').animate({"left":"0"})
		$('.pdr li').eq(next).stop().css('left','0').animate({"left":"-100%"})
		next=cnt;
		clearInterval(timerID)
		timerID=setInterval(make,delay)	
	}
	
	function make2(){
		cnt--
		if(cnt<0){cnt=4}
		$('.pdr li').eq(cnt).stop().css('left','-100%').animate({"left":"0"})
		$('.pdr li').eq(next).stop().css('left','0').animate({"left":"+100%"})
		next=cnt;
		clearInterval(timerID)
		timerID=setInterval(make,delay)
	}
	
}

// function product(){
// 	
	// delay=3000, timer='',last='',first=''
// 	
	// timer=setInterval(make,delay)
	// function make(){
// 
		// first=$('.pdr li:first')
		// $('.pdr').animate({'left':'-=100%'});
		// $('.pdr').append(first).css('margin-right','+=100%');	
// 
		// clearInterval(timerID)
		// timerID=setInterval(make,delay)
	// }
// 	
	// $('.pg-btn .next a').on('click',function(){
// 		
// 
	// })
// 	
// }


function top_scroll(){}











