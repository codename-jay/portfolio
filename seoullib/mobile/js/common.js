$(function(){
	minit();
})//endfunction

function minit() {
 gnb();
 topScroll(); 
}

function gnb(){
	$('#header .mainmenu').on('click',function(){
		$("#gnb").animate({"left":"0%"})
		$("#nav .gt-icon").animate({"left":"0%"})
		$('#bg').show()
	})
	
	$("#nav .gt-icon").on('click',function(){
		$("#gnb").animate({"left":"-100%"})
		$("#nav .gt-icon").animate({"left":"-100%"})
		$('#gnb>li ul').slideUp()
		$('#bg').hide()
	})
	var isplay=true;
	$('#gnb>li').on('click',function(){
	if(isplay){
	$('#gnb>li ul').slideUp()
	$(this).children('ul').slideToggle()
	}else{
	$('#gnb>li ul').slideUp()
	}
	isplay=!isplay
	})
}

function topScroll(){}
