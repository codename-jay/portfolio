$(function(){
	mmaininit();
})//endfunction

function mmaininit() {

 mainVisual();
 event(); 
}
function mainVisual(){}

function event(){
	var timerID=0,delay=3000,cnt=0,current=0,old=0;
	timerID=setInterval(make,delay)
	
	$('.ad-box .ad li').css('left','100%').first().css('left','0px')
	
	$('.ad-box .paging .next').on('click',function(){
		current++
		if(current>2){current=0}
	make1()
	})
	
	$('.ad-box .paging .prev').on('click',function(){
		current--
		if(current<0){current=2}
	make2()
	})
	
	function make(){
		current++
		if(current>2){current=0}
	make1()
	}
	
	
	function make1(){
	$('.ad-box .ad li').eq(current).css('left','-100%').animate({'left':'0px'})
	$('.ad-box .ad li').eq(old).css('left','0px').animate({'left':'100%'})
	old=current		
	clearInterval(timerID)
	timerID=setInterval(make,delay)
	}
	
	function make2(){
	$('.ad-box .ad li').eq(current).css('left','100%').animate({'left':'0px'})
	$('.ad-box .ad li').eq(old).css('left','0px').animate({'left':'-100%'})
	old=current
	clearInterval(timerID)
	timerID=setInterval(make,delay)
	}	
}
////////////////content2 이벤트 배너 롤링