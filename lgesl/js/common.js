$(function(){
	init();
})//전체페이의 공통 js내용

function init() {
 gnb(); //  메뉴
 side_menu();
 subgallery();
 top_scroll();  
}

function gnb(){
	

		$('.mm_click_on').on('click',function(){
		$('.mm_click_on').css('display','none')
		$('.mm_click_off').css('display','block')
		$('.mm_pc').addClass('on').css('display','block')
	})
	
	$('.mm_click_off').on('click',function(){
		$('.mm_click_off,.mm_click_on').removeAttr("style")
		$('.mm_pc').removeClass('on').css('display','none')
	})
	
	$("#menu").on('mouseenter',function(){
		if(!$('.mm_pc').hasClass('on')) {
			$("#header").stop().animate({"height":"180px"},function(){
				$("#gnb li ul").show().stop().animate({'height':'100%'})
			})			
		}
	})
	
	$("#menu").on('mouseleave',function(){
		$("#header").stop().animate({"height":"103px"})
		$("#gnb li ul").stop().animate({'height':0},function(){ $("#gnb li ul").hide() })
	})
	
	$(window).on("resize",function(){
		if($(window).width()<960){
			$('#header').removeAttr("style");
			$('.mm_pc').css("display","none");
			$('.mm_click_on').css("display","none")
			$('.mm_click_off').css("display","none")
		}else{
			$('.mm_click_on').css("display","block")
			$('.mm_click_off').css("display","none")
		}
	})
	
	
}
function side_menu(){
	
	$(".mm_click_on2").on("click",function(){
		$(".black").fadeIn();
		$("#menu2").animate({"left":"0px"})
	})
	$(".mm_click_off2").on("click",function(){
		$(".black").fadeOut();
		$("#menu2").animate({"left":"-310px"})
	})
	$("#gnb2>li>a").on("click",function(){
		$("#gnb2>li>a .onoff").css("background-image","url(images/open.png)");
		$(this).find('.onoff').css("background-image","url(images/close.png)");
		$("#gnb2 li ul").slideUp()
		$(this).parent().find('ul').slideDown()
	})
	
}

function subgallery(){
	
	$(".overview .more1").on("click",function(){
		$(".click-bg").fadeIn();
		$(this).next(".detail").fadeIn()
	})
	$(".detail .close1").on("click",function(){
		$(".click-bg").fadeOut();
		$(".overview .detail").fadeOut()
	})
	
	$(".subcontent1 .con2 .more2").on("click",function(){
		$(this).parent().find('.graybox').animate({"bottom":"0px"})
	})
	
	$(".subcontent1 .con2 .graybox .close2").on("click",function(){
		$(this).parent().animate({"bottom":"-290px"})

	})
	
}


function top_scroll(){}
