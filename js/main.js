$(function(){
	init();
})//endfunction

function init() {

 mainVisual();
 gnb();
 work();
 mopen();
 
}

function mainVisual(){

}

function mopen(){
  var arrURL  =[]
  arrURL[0]="http://jinahgna.com/seoullib/mobile"
  arrURL[1]="http://jinahgna.com/seoullib/mobile/searchinfo.php"
  arrURL[2]="http://jinahgna.com/seoullib/mobile/bestdata.php"
  arrURL[3]="http://jinahgna.com/seoullib/mobile/schedule.php"
  arrURL[4]="http://jinahgna.com/seoullib/mobile/news.php"
  arrURL[5]="http://jinahgna.com/seoullib/mobile/hopebook.php"
  arrURL[6]="http://jinahgna.com/daewoong/mobile"
  arrURL[7]="http://jinahgna.com/daewoong/mobile/ceo.php"  
  arrURL[8]="http://jinahgna.com/daewoong/mobile/product.php"
  arrURL[9]="http://jinahgna.com/daewoong/mobile/news.php" 
    

  $(".sm1 a").click(function(){
     window.open(arrURL[0],"aa","width=400,left=20,top=20,scrollbars=yes,height=1080")   
     return false;
  })
   $(".sm2 a").click(function(){
     window.open(arrURL[1],"aa","width=400,left=20,top=20,scrollbars=yes,height=1080")   
     return false;
  })
   $(".sm3 a").click(function(){
     window.open(arrURL[2],"aa","width=400,left=20,top=20,scrollbars=yes,height=1080")   
     return false;
  })
   $(".sm4 a").click(function(){
     window.open(arrURL[3],"aa","width=400,left=20,top=20,scrollbars=yes,height=1080")   
     return false;
  })
   $(".sm5 a").click(function(){
     window.open(arrURL[4],"aa","width=400,left=20,top=20,scrollbars=yes,height=1080")   
     return false;
  })
   $(".sm6 a").click(function(){
     window.open(arrURL[5],"aa","width=400,left=20,top=20,scrollbars=yes,height=1080")   
     return false;
  })
   $(".dm1 a").click(function(){
     window.open(arrURL[6],"aa","width=400,left=20,top=20,scrollbars=yes,height=1080")   
     return false;
  })
   $(".dm2 a").click(function(){
     window.open(arrURL[7],"aa","width=400,left=20,top=20,scrollbars=yes,height=1080")   
     return false;
  })
   $(".dm3 a").click(function(){
     window.open(arrURL[8],"aa","width=400,left=20,top=20,scrollbars=yes,height=1080")   
     return false;
  })
   $(".dm4 a").click(function(){
     window.open(arrURL[9],"aa","width=400,left=20,top=20,scrollbars=yes,height=1080")   
     return false;
  })
  
  
}

function gnb(){

	var attr='';
    var ty=0;
	
	$('#gnb li a').on('click',function(){
		attr=$(this).attr('href');
    	ty=$(attr).stop().offset().top;
    	ty=ty-90
        $('html,body').stop().animate({'scrollTop':ty},500)
		return false;
	})
	
	
	var isplay=true;
	
	$('#header .all-menu').on('click',function(){
		if(isplay){
			$('#header').animate({'top':'-90px'});
			$(this).css('background-image','url(images/gnb+.png)')
		}else{
			$('#header').animate({'top':'0px'});
			$(this).css('background-image','url(images/gnb-.png)')
		}
		isplay=!isplay
		
	})
}


function work(){
	var target='';
	var group='';
	
	$('#works .group li a').on('click',function(){
		target=$(this).attr('value');
		
		$('.work>li').hide();
		
		$('.work>li').each(function(){

			 if($(this).hasClass(target)){
				 $(this).fadeIn()			
		 	 }
			
		})
		
		$('#works .group li').removeClass("on");
		$(this).parent().addClass("on");
	})
	
}








