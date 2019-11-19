$(function(){
	init();
})//endfunction

function init() {

 mainVisual(); 
}

function mainVisual(){

	var cnt=0,timer=0,delay=3500,next=0;
	timer=setInterval(make,delay)

	function make(){
	make1()
	}

	$('#visual .prev-next .prev').on('click',function(){
	cnt--;
	if (cnt<0){cnt=2}
	$('#visual .bg li').eq(cnt).fadeIn(700);
	$('#visual .bg li').eq(next).fadeOut(700);
	next=cnt
	clearInterval(timer)
	timer=setInterval(make,delay)
	})

	$('#visual .prev-next .next').on('click',function(){
	make1()
	})

	function make1(){
		cnt++;
	if (cnt>2){cnt=0}
	$('#visual .bg li').eq(cnt).fadeIn(700);
	$('#visual .bg li').eq(next).fadeOut(700);
	next=cnt
	clearInterval(timer)
	timer=setInterval(make,delay)
	}
}

