$(function(){
	maininit();
})//endfunction

function maininit() {
 mainVisual();
 footertop();
 content2();
 content22();
 content3();
 content4()
}

function mainVisual(){

var timer=0,delay=4000,nextIndex=0,currentIndex=0;

$('#visual .visual-img li').hide().eq(nextIndex).show()

$('#visual .paging li').on('click',function(){
nextIndex=$(this).index()

$('#visual .visual-img li').eq(nextIndex).fadeIn(700);
$('#visual .visual-img li').eq(currentIndex).fadeOut(700);
currentIndex=nextIndex

$('#visual .paging li').removeClass('on')
$('#visual .paging li').eq(nextIndex).addClass('on')

clearInterval(timer)
timer=setInterval(make,delay)

})

timer=setInterval(make,delay)

function make(){
	nextIndex++
	if(nextIndex>2)nextIndex=0
	$('#visual .visual-img li').eq(nextIndex).fadeIn(700);
	$('#visual .visual-img li').eq(currentIndex).fadeOut(700);
	currentIndex=nextIndex
	
	$('#visual .paging li').removeClass('on')
	$('#visual .paging li').eq(nextIndex).addClass('on')
	
	clearInterval(timer)
	timer=setInterval(make,delay)
			   };


};
////////////////mainVisual 메인 비주얼 롤링

function footertop(){
	$('.footer-top a').hide()	
	$(window).on('scroll',function(){
		top=$(window).scrollTop()
		if(top>=150){
			$('.footer-top a').fadeIn()
		}else{
			$('.footer-top a').fadeOut()
		}
	})	
	var top=$(window).scrollTop
	$('.footer-top a').on('click',function(){
		$('html,body').animate({'scrollTop':'0'})
		return false
	})	
}
////////////////top 메인 탑으로 올라가기

function content2(){

$('.conbox1_1 dl dt').on('click',function(){
	$('.conbox1_1 dl dd').fadeOut();
	$(this).next().fadeIn();
	
	$('.conbox1_1 dl dt').removeClass('on');
	$(this).addClass('on')
	
})
	
}

////////////////content2 addClass 붙여주기


function content22(){
	var timerID=0,delay=3000,cnt=0,current=0,old=0;
	timerID=setInterval(make,delay)
	$('.ad-banner li').css('left','610px').first().css('left','0px')
	
	$('.conbox1_2 .paging .next').on('click',function(){
		current++
		if(current>2){current=0}
	make1()
	})
	
	$('.conbox1_2 .paging .prev').on('click',function(){
		current--
		if(current<0){current=2}
	make2()
	})
	
	function make(){
		current++
		if(current>2){current=0}
	make1()
	}
	
	$('.ad-banner').mouseenter(function(){
		clearInterval(timerID)
	}).mouseleave(function(){
		timerID=setInterval(make,delay)
	})
	
	function make1(){
	$('.ad-banner li').eq(current).css('left','-610px').animate({'left':'0px'})
	$('.ad-banner li').eq(old).css('left','0px').animate({'left':'610px'})
	old=current		
	clearInterval(timerID)
	timerID=setInterval(make,delay)
	}
	
	function make2(){
	$('.ad-banner li').eq(current).css('left','610px').animate({'left':'0px'})
	$('.ad-banner li').eq(old).css('left','0px').animate({'left':'-610px'})
	old=current
	clearInterval(timerID)
	timerID=setInterval(make,delay)
	}	
}
////////////////content2 이벤트 배너 롤링

function content3(){
	
	$('#content3 .book').prepend(last).css('margin-left','-=270px')	
	var last=$('#content3 .book li:last')
	var first=$('#content3 .book li:first')
	var cnt=0,arrtext=[],timerID=0,delay=4000

	arrtext[0]="<span>여행자의 동네서점</span>/저자 구선아<br/>여행자의 시선으로 만든 서울의 동네서점 여행코스"
	arrtext[1]="<span>지적 대화를 위한 넓고 얕은 지식</span>/저자 채사장<br/>힘 있는 지식인이 되기 위한 필수 기초 교양"
	arrtext[2]="<span>숨결이 바람 될 때</span>/저자 폴 칼라니티<br/>서른여섯 젊은 의사의 마지막 순간"
	arrtext[3]="<span>조선왕조실록</span>/저자 설민석<br/>대한민국이 선택한 역사 이야기"
	arrtext[4]="<span>낭만적 연애와 그 후의 일상</span>/저자 알랭 드 보통<br/>결혼한 한 커플의 삶을 통해 일상의 범주에 들어온 사랑에 대해 통찰하다"
	arrtext[5]="<span>빨강머리 앤이 하는 말</span>/저자 백영옥 <br/>아직 너무 늦지 않았을 우리에게"
	
	timerID=setInterval(make,delay)
	function make(){
		cnt--
		if(cnt<0){cnt=5}
		make1()
	}
		
	$('#content3 .paging .next').on('click',function(){
		cnt--
		if(cnt<0){cnt=5}
		make1()
	})
	
	$('#content3 .paging .prev').on('click',function(){	
		cnt++
		if(cnt>5){cnt=0}
		make2()
	})
	
	$('#content3 .book').hover(function(){
		clearInterval(timerID)
	},function(){
		timerID=setInterval(make,delay)
	})
	
	function make1(){		
		$('#content3 p').hide().fadeIn().html(arrtext[cnt])
		last=$('#content3 .book li:last')
		$('#content3 .book').animate({'left':'+=270px'})
							.prepend(last).css('margin-left','-=270px')	
		clearInterval(timerID)
		timerID=setInterval(make,delay)
	}
	
	function make2(){
		$('#content3 p').hide().fadeIn().html(arrtext[cnt])
		first=$('#content3 .book li:first')
		$('#content3 .book').animate({'left':'-=270px'},function(){
		$('#content3 .book').append(first).css('margin-left','+=270px')	
		})
		clearInterval(timerID)
		timerID=setInterval(make,delay)
	}
}////////////////content3 책소개 롤링

	function content4(){
		$('#content4 .conbox1 dl dt').on('click',function(){
			$('#content4 .conbox1 dl dd').slideUp()
			$(this).next().slideDown()
			$('#content4 .conbox1 dl dt').removeClass('on')
			$(this).addClass('on')
			
		})
	}




