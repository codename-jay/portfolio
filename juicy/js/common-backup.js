$(function(){
	init();
});//전체페이의 공통 js내용

function init() {
 main_visual1();
 main_visual2();
 video();
}

function main_visual1(){
    var $P1mvli = $(".p1-mainv .p1-mv li");
    var $P1pgli = $(".p1-mainv .paging li");
    var play=0,delay=3000,cnt=0,old=0;

    $P1mvli.css("left","100%").first().css("left","0");

    play=setInterval(make,delay);
    function make() {
        cnt++;
        if(cnt>2){cnt=0}
         make1()
    }//첫번째 비주얼 자동롤링

    $P1pgli.on('click',function(){
        cnt=$(this).index();
        if(cnt>old){
            make1()
        }else{
            make2()
        }
    });//첫번째 비주얼 페이징 클릭했을때 롤링

    function make1(){
        if(cnt!=old){
            $P1mvli.eq(cnt).stop().css("left","100%").animate({"left":"0%"});
            $P1mvli.eq(old).stop().css("left","0%").animate({"left":"-100%"});
            old=cnt;
            clearInterval(play);
            play=setInterval(make,delay);
            $P1pgli.stop().removeClass("on");
            $P1pgli.eq(cnt).stop().addClass("on");
        }
    }
    function make2(){
        if(cnt!=old){
            $P1mvli.eq(cnt).stop().css("left","-100%").animate({"left":"0%"});
            $P1mvli.eq(old).stop().css("left","0%").animate({"left":"100%"});
            old=cnt;
            clearInterval(play);
            play=setInterval(make,delay);
            $P1pgli.stop().removeClass("on");
            $P1pgli.eq(cnt).stop().addClass("on");
        }
    }
}/////////////////////////////////////////메인 첫번째 비주얼 롤링

function main_visual2(){
    var $P3mvli = $(".p3-product .p3-p>li");
    var $P3pgli = $(".p3-product .paging li");
    var play=0,delay=6000,cnt=0,old=0;

    $P3mvli.hide().eq(cnt).show();
    play=setInterval(make,delay);

    function make(){
        cnt++;
        if(cnt>1){cnt=0}
        make1()
    }
    $P3pgli.on('click',function(){
        cnt=$(this).index();
        make1()
    });
    function make1(){
        if($P3mvli.eq(0).css("display") == "list-item"){
            $(".p3-product .prevnext").hide();
        }else{
            $(".p3-product .prevnext").show();
        }
        if(cnt!=old){
            $P3mvli.eq(cnt).fadeIn(600);
            $P3mvli.eq(old).fadeOut(600);
            old=cnt;
            clearInterval(play);
            play=setInterval(make,delay);
            $P3pgli.stop().removeClass("on");
            $P3pgli.eq(cnt).stop().addClass("on");
        }
    }//메인 두번째 비주얼 큰 li 롤링

    //메인 두번째 비주얼 중 음료수 롤링하기
    //1. prev버튼을 클릭했을때 음료수들 왼쪽으로 한칸씩 옮기기
    //2. 왼쪽 맨끝에 있었던 음료수는 제일 오른쪽으로 이동
    //3. 양쪽에 있는 음료수들 크기 줄이기
    //4. next버튼을 클릭했을때 음료수들 오른쪽으로 한칸씩 옮기기
    //5. 오른쪽 맨끝에 있었던 음료수는 제일 왼쪽으로 이동

    $(".p3-product .prevnext .next").on('click',function(){
        var $last = $(".p3-product .p3-p li ul li").last();
        $(".p3-product .p3-p li ul").prepend($last);
        $(".p3-product .p3-p li ul li").removeClass("big");
        $(".p3-product .p3-p li ul li").eq(1).addClass("big")
    });

    $(".p3-product .prevnext .prev").on('click',function(){
        var $first = $(".p3-product .p3-p li ul li").first();
        $(".p3-product .p3-p li ul").append($first);
        $(".p3-product .p3-p li ul li").removeClass("big");
        $(".p3-product .p3-p li ul li").eq(1).addClass("big")
    });



    // $(".p3-product .prevnext .prev").on("click",function(){
    //     var arrX=[30,270,590];
    //     var arrY=[180,110,180];
    //     cnt++;
    //     if(cnt>2){cnt=0}
    //
    //     $(".p3-product .p3-p li ul li").eq(0).animate({left:arrX[cnt],top:arrY[cnt]});
    //     $(".p3-product .p3-p li ul li").eq(1).animate({left:arrX[cnt+1],top:arrY[cnt+1]});
    //

      //  $(".p3-product .p3-p li ul li").eq(2).animate({left:arrX[cnt+2],top:arrY[cnt+2]});

        // $(".p3-product .p3-p li ul li img").animate({"width":"80%"},300);
        // $(".p3-product .p3-p li ul li:eq(1) img").animate({"width":"100%"},300);
    //})


}/////////////////////////////////////////메인 두번째 비주얼 롤링

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
