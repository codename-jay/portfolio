$(function(){
	init();
});//전체페이의 공통 js내용

function init() {
 main_visual();
 video();
 subScroll();
}

function main_visual(){
    var $P1mvli = $(".p1-mainv .p1-mv li");
    var $P1pgli = $(".p1-mainv .paging li");
    var $P3mvli = $(".p3-product .p3-p>li");
    var $P3pgli = $(".p3-product .paging li");
    var play1=0,cnt1=0,old1=0,play2=0,cnt2=0,old2=0,delay=3000;

    $P1mvli.css("left","100%").first().css("left","0");
    $P3mvli.css("left","100%").first().css("left","0");

    play1=setInterval(make,delay);
    play2=setInterval(secondmake,delay);

    function make() {
        cnt1++;
        if(cnt1>2){cnt1=0}
        make1()
    }//첫번째 비주얼 자동 롤링

    $P1pgli.on('click',function(){
        cnt1=$(this).index();
        if(cnt1>old1){
            make1()
        }else{
            make2()
        }
    });//첫번째 비주얼 페이징 동그라미 클릭했을때 롤링

    $(".p1-mainv").on("mouseenter",function(){
        clearInterval(play1);
        console.log("1")
    });
    $(".p1-mainv").on("mouseleave",function(){
        clearInterval(play1);
        play1=setInterval(make,delay);
        console.log("2")
    });//첫번째 비주얼 마우스 엔터,리브했을때 롤링멈춤 롤링시작

    function make1(){
        if(cnt1!=old1){
            $P1mvli.eq(cnt1).stop().css("left","100%").animate({"left":"0%"});
            $P1mvli.eq(old1).stop().css("left","0%").animate({"left":"-100%"});
            old1=cnt1;
            clearInterval(play1);
            play1=setInterval(make,delay);
            $P1pgli.stop().removeClass("on");
            $P1pgli.eq(cnt1).stop().addClass("on");
        }
    }
    function make2(){
        if(cnt1!=old1){
            $P1mvli.eq(cnt1).stop().css("left","-100%").animate({"left":"0%"});
            $P1mvli.eq(old1).stop().css("left","0%").animate({"left":"100%"});
            old1=cnt1;
            clearInterval(play1);
            play1=setInterval(make,delay);
            $P1pgli.stop().removeClass("on");
            $P1pgli.eq(cnt1).stop().addClass("on");
        }
    }

    /////////////////////////////////////////메인 첫번째 비주얼 롤링

        function secondmake(){
            cnt2++;
            if(cnt2>1){cnt2=0}
            secondmake1()
        }//두번째 비주얼 자동 롤링

        $P3pgli.on('click',function(){
            cnt2=$(this).index();
           if(cnt2>old2){
               secondmake1()
           }else{
               secondmake2()
           }
        });//두번째 비주얼 페이징 동그라미 클릭했을때 롤링

        $(".prevnext .next").on('click',function(){
            var $last = $(".p3-product .p3-p li .juice li").last();
            $(".p3-product .p3-p li .juice").prepend($last);
            $(".p3-product .p3-p li .juice li").removeClass("big");
            $(".p3-product .p3-p li .juice li").eq(1).addClass("big")
        });
    
        $(".prevnext .prev").on('click',function(){
            var $first = $(".p3-product .p3-p li .juice li").first();
            $(".p3-product .p3-p li .juice").append($first);
            $(".p3-product .p3-p li .juice li").removeClass("big");
            $(".p3-product .p3-p li .juice li").eq(1).addClass("big")
        });//두번째 비주얼 음료 돌아가기
    
        $(".p3-product").on("mouseenter",function(){
            clearInterval(play2);
            console.log("1")
        });
        $(".p3-product").on("mouseleave",function(){
            clearInterval(play2)
            play2=setInterval(secondmake,delay);
            console.log("2")
        });//두번째 비주얼 마우스 엔터,리브했을때 롤링멈춤 롤링시작

        function secondmake1(){
            if(cnt2!=old2){
                $P3mvli.eq(cnt2).css("left","100%").stop().animate({"left":"0%"});
                $P3mvli.eq(old2).css("left","0%").stop().animate({"left":"-100%"});
                old2=cnt2;
                $P3pgli.removeClass("on").eq(cnt2).addClass("on");
                clearInterval(play2);
                play2=setInterval(secondmake,delay);
            }
        }
        function secondmake2(){
            if(cnt2!=old2){
                $P3mvli.eq(cnt2).css("left","-100%").stop().animate({"left":"0%"});
                $P3mvli.eq(old2).css("left","0%").stop().animate({"left":"100%"});
                old2=cnt2;
                $P3pgli.removeClass("on").eq(cnt2).addClass("on");
                clearInterval(play2);
                play2=setInterval(secondmake,delay);
            }
        }

        

/////////////////////////////////////////메인 두번째 비주얼 롤링
}///////////////////////////////////////////////메인 첫번째 두번째 비주얼 롤링

function video(){
    $(".p5-video a").on("click",function(e){
        e.preventDefault();
        $(".video-bg").fadeIn();
        $(".p5-video .video-popup").css("display",'block')
    });

    $(".p5-video .video-popup a").on("click",function(){
        $(".video-bg").fadeOut();
        $(".p5-video .video-popup").css("display",'none')
    })

}/////////////////////////////////////////메인 비디오

function subScroll(){
//각 h3의 탑 위치 값 뽑아내기
//서브 네브 a 클릭했을때 해당 인덱스 h3로 이동하기
//윈도우 스크롤 했을때 일정 위치가 되면 sub-nav 위에 달라붙게하기

    var cnt=0,top=0,$positionH3=0,$positionTop=0,$h3Num=0,topY=[],$positionTopi=0;

    $(".sub-nav li a").on("click",function(e){
        e.preventDefault();
        cnt=$(this).parent('li').index();
        $positionTop=$(".sub h3").not($(".map h3")).eq(cnt).offset().top -40;
        $('html,body').animate({"scrollTop":$positionTop});
        //$(".sub-nav li").removeClass("on");
        //$(this).parent("li").addClass("on");
    });


    $positionH3=$(".sub h3").not($(".map h3"));
    $h3Num=$positionH3.length;

    var positionArr = [];
    for(var i=0; i<$h3Num; i++){
        var thisTop = parseInt($positionH3.eq(i).offset().top-41);
        positionArr.push(thisTop);
    };
    console.log(positionArr)

    $(window).on("scroll",function(e){
        e.preventDefault();
        top=$(window).scrollTop();

        if(top>=455){
            $(".sub-nav").addClass("fixed")
        }else{
            $(".sub-nav").removeClass("fixed")
        }

       // $positionH3.eq();

        for(var i=0; i<$h3Num; i++){

            $positionTopi=$positionH3.eq(i).offset().top-41;
            if(top>=$positionTopi){
                $(".sub-nav li").removeClass("on");
                $(".sub-nav li").eq(i).addClass("on");
            }
        }

    });

    /*
    $(window).on("scroll",function(e){
        e.preventDefault();
        top=$(window).scrollTop();
        $positionH3=$(".sub h3").not($(".map h3"));
        $h3Num=$positionH3.length;

        if(top>=455){
            $(".sub-nav").addClass("fixed")
        }else{
            $(".sub-nav").removeClass("fixed")
        }

        for(var i=0; i<$h3Num; i++){
            $positionTopi=$positionH3.eq(i).offset().top-41;
            if(top>=$positionTopi){
                $(".sub-nav li").removeClass("on");
                $(".sub-nav li").eq(i).addClass("on");
            }
        }
    });
    */



};///////서브 스크롤