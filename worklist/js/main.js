$(function(){
	init();
})//endfunction

function init() {
 mopen();
}


function mopen(){
  var arrURL  =[]
  arrURL[0]="http://gnachoi.com/seoullib/mobile"
  arrURL[1]="http://gnachoi.com/seoullib/mobile/searchinfo.php"
  arrURL[2]="http://gnachoi.com/seoullib/mobile/bestdata.php"
  arrURL[3]="http://gnachoi.com/seoullib/mobile/schedule.php"
  arrURL[4]="http://gnachoi.com/seoullib/mobile/news.php"
  arrURL[5]="http://gnachoi.com/seoullib/mobile/hopebook.php"
  arrURL[6]="http://gnachoi.com/daewoong/mobile"
  arrURL[7]="http://gnachoi.com/daewoong/mobile/ceo.php"  
  arrURL[8]="http://gnachoi.com/daewoong/mobile/product.php"
  arrURL[9]="http://gnachoi.com/daewoong/mobile/news.php" 
    

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

