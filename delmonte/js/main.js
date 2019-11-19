$(function(){
	minit();
})//endfunction

function minit() {

 mainVisual();
 windowsize();
 recipe();
 paging();
 scroll();
}

function mainVisual(){
}

function windowsize(){
	
/*var h=$(window).height();
	
	$('.content .inner-wrap').css('height',h)*/
}

function recipe(){

var cnt=0,arrh=[]

$('.recipe .recipe-list1 li').on('click',function(){
cnt=$(this).index();
var arrh=['날아라 바나나 비행기','바나나 초콜릿 또띠아','파인 바나나 요거트','바나나 도너츠'];
$('.recipe .recipe-list li').removeClass("on")
$(this).addClass("on")
$('.recipe .recipe-detail img').hide().fadeIn(300).attr('src','images/recipe'+cnt+'.jpg')
$('.recipe .recipe-detail h4').html(arrh[cnt])
$('.recipe .recipe-detail .source li ').hide().eq(cnt).fadeIn(300)
})

$('.recipe .recipe-list2 li').on('click',function(){
var arrh=['골드파인 크럼블 파이','바나나 단팥튀김','바나나 프랄린 카라멜 컵케이크','바나나무초 다이어트'];
cnt=$(this).index();
$('.recipe .recipe-list li').removeClass("on")
$(this).addClass("on")
$('.recipe .recipe-detail img').hide().fadeIn(300).attr('src','images/recipe2_'+cnt+'.jpg')
$('.recipe .recipe-detail h4').html(arrh[cnt])
$('.recipe .recipe-detail .source li ').hide().eq(cnt+4).fadeIn(300)
})

}


function paging(){
   
    $('.paging li a').on('click',function(){  	
    	attr=$(this).attr('href')
    	ty=$(attr).offset().top
    	$('html,body').stop().animate({scrollTop:ty})

    	$('.paging li').stop().removeClass('on')
    	$(this).parent('li').stop().addClass('on')
    	return false
    })	

    $('#gnb li a').on('click',function(){    
        attr=$(this).attr('href')
        ty=$(attr).stop().offset().top
        $('html,body').stop().animate({scrollTop:ty})

        // $('.paging li').removeClass('on')
        // $(this).parent('li').addClass('on')
        return false
    })  

}

 function scroll(){

    var topY=[],top=0;

   
        
        for(var i=0; i<6; i++){
            topY[i]=$('.con'+i).stop().offset().top;
        }

    $(window).on('scroll',function(){
        top=$(window).scrollTop()
        for(var i=0; i<6; i++){
            topY[i]=$('.con'+i).stop().offset().top;

        if(top>=topY[i]){
        $('.paging li').stop().removeClass('on')
        $('.paging li').stop().eq(i).addClass('on')     
        }

        }
    })
 }