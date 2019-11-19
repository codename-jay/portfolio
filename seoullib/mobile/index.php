<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="utf-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>최진아 포트폴리오</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<meta name="description" content="웹포트폴리오 최진아">
<meta name="keywords"    content="웹 퍼블리셔, HTML5, CSS3, jQuery ,웹 디자인">
<meta name="author"      content="최진아">
<link rel="shortcut icon" href="img/favicon_1.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">  
<link rel="stylesheet" href="fa/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/import.css" type="text/css"/>  
</head>
   
<body> 
  <? include("include/header.php")  ?>

	  
	
	<section id="visual">
		<h2>서울 도서관의 오늘</h2>
		<strong>2016년 12월 6일 화요일<br/>
						개관 09:00~21:00</strong>
		<ul>
		<li>대출<br/>611권</li>
		<li>반납<br/>642권</li>
		<li>예약<br/>109권</li>
		</ul>
		
		<form action="">
		<fieldset>
		<legend>도서관 자료 검색창</legend>
		<p>
		<label for="search-book1"></label>
		<input type="text"  id="search-book1"/>
		<label for="search-book2"></label>
		<input type="submit"  id="search-book2" value="검색"/>
		</p>
		</fieldset>
		</form>
	</section><!--////////////////////visual-->
	
	<div id="container">
		<section id="content">
		
		<div class="important-box cf">
		<div class="important-box-wrap">
		<div class="news">
		<strong>도서관 소식</strong>
		<a href="#" class="article">[보도]동네 서점이 지역 도서관으로 찾아온다…'움직이는 책방' </a>
		<a href="#" class="more">+</a>
		</div>
		
		<div class="schedule">
		<a href="#"><strong>도서관 일정</strong></a>
		<a href="#" class="article">[7차 책방산책서울]<br/> 망원동의 책방들</a>
		<a href="#" class="more">+</a>
		</div>
		
		<div class="ad-box">
		<ul class="ad">
		<li><a href="#"><img src="images/main/event-mb1.png" alt="공공 도서관 두배로 데이" /></a></li>
		<li><a href="#"><img src="images/main/event-mb2.png" alt="한 도서관 한 책읽기" /></a></li>
		<li><a href="#"><img src="images/main/event-mb3.png" alt="서울 북 페스티벌" /></a></li>
		</ul>
		<ul class="paging">
		<li class="prev"><a href="javascript:">&lt;</a></li>
		<li class="next"><a href="javascript:">&gt;</a></li>
		</ul>
		</div>
		
		<div class="event">
		<h2>전시회 안내</h2>
		<img src="images/main/event.png" alt="언니들이 간다 전시회 이미지" />
		<strong>2016 서울사진축제: 언니들이 왔다</strong>
		<p>파독 간호사 50주년 한독 이주 여성 아카이브 특별전<br/>
			국경과 문화의 경계를 오가는 인생 여행자들
		</p>
		</div>
		
		</div>
		</div>
		
		<div class="recommend-book cf">
		<img src="images/main/book2.png" alt="여행자의 동네서점" />
			<a href="#" class="more">+</a>
		<h2>사서의 추천도서</h2>
		<em>여행자의 동네서점</em>
		<span>구선아 지음</span>
		<p>이번 주말에는 ‘여행자의 동네서점’ 지도와 책자를 들고 책방 여행을 떠나보는거 어떠세요?</p>
		</div>
		
		<div class="contents">
		<ul class="cf">
		<li><a href="#">온라인 정보 서비스</a></li>
		<li><a href="#">도서관 이용안내</a></li>
		<li><a href="#">기획 전시 안내</a></li>
		<li><a href="#">세계 자료 모음</a></li>
		<li><a href="#">희망도서 신청</a></li>
		<li><a href="#">자료 기증 안내</a></li>
		</ul>
		</div>
		
		</section>
	</div>
	
	

 <? include("include/footer.php")  ?>


	<div id="bg"></div>

  <script type="text/javascript" src="js/jquery.js"> </script>
  <script type="text/javascript" src="js/jquery-ui.min.js"> </script> 
  <script type="text/javascript" src="js/common.js"> </script>
  <script type="text/javascript" src="js/main.js"> </script>

 </body>
</html>






















 
