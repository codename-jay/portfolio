<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="utf-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>최진아 포트폴리오</title>
<meta name="description" content="웹포트폴리오 최진아">
<meta name="keywords"    content="웹 퍼블리셔, HTML5, CSS3, jQuery ,웹 디자인">
<meta name="author"      content="최진아">
<link rel="shortcut icon" href="img/favicon_1.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">  
<link rel="stylesheet" href="fa/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/subimport.css" type="text/css"/>  
<!--[if lt IE 9]><script src="js/IE9.js"></script><![endif]-->     
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]--> 
</head>
   
<body> 
  <? include("include/header.php")  ?>
	
	<div class="sub-top">
		<div class="inner1280">
			<h2>도서관 네트워크</h2>
			<span>지식정보의 허브, 공공도서관 네트워크 서울도서관에서 한눈에 만납니다.</span>
		</div>
	</div>
	
	<div id="subMenu">
	<div class="inner1280">
		<nav id="subNav" class="cf">
			<a href="#" class="s-nav0"></a>
			<div class="relative">
			<a href="javascript:" class="s-nav s-nav1">도서관 네트워크</a>
			<ul class="nav-gnb">
				<li><a href="#">정보 검색</a></li>
				<li><a href="#">전자 도서관</a></li>
				<li><a href="#">서울지식정보</a></li>
				<li><a href="#">나의 공간</a></li>
				<li><a href="#">도서관 안내</a></li>
				<li><a href="#">도서관 정책 서비스</a></li>
				<li><a href="#">도서관 네트워크</a></li>
			</ul>
			</div>
			
			<div class="relative">
			<a href="javascript:" class="s-nav s-nav2">서울의 도서관 찾기</a>
			<ul class="nav-gnb">
				<li><a href="#">서울의 도서관 찾기</a></li>
				<li><a href="#">이용시간/휴관일</a></li>
				<li><a href="#">개관시간연장</a></li>
				<li><a href="#">동네 책방 찾기</a></li>
				<li><a href="#">정보마당</a></li>
				<li><a href="#">추천도서</a></li>
			</ul>
			</div>
		
			<a href="#" class="s-nav4">온라인 정보 서비스</a>
		</nav>
	</div>
	</div>	
	
	<div id="container">
		<section id="subPage7" class="sub-contents">
		<div class="inner1280">
			<h3>서울의 도서관 찾기</h3>
			<span class="description">서울의 공공도서관, 작은도서관, 장애인도서관 등 890여개 도서관의 소재와 이용안내를 살펴보실 수 있습니다.</span>
			
			<form action="#">
			<fieldset>
			<legend>서울의 도서관 찾기</legend>
			
			<div class="lib-search-box">
			<dl>
			<dt>자치구:</dt>
			<dd>
			<label for="libSearch"></label>
			<select  id="libSearch" class="form1">			
			<option>강남구</option>
			<option>강동구</option>
			<option>강북구</option>
			<option>강서구</option>
			<option>관악구</option>
			<option>광진구</option>
			<option>구로구</option>
			<option>금천구</option>
			<option>노원구</option>
			<option>도봉구</option>
			<option>동대문구</option>
			<option>동작구</option>
			<option>마포구</option>
			<option>서대문구</option>
			<option>서초구</option>
			<option>성동구</option>
			<option>성북구</option>
			</select>
			
			</dd>
			</dl>
			
			<dl>
			<dt>도서관 구분:</dt>
			<dd>
			<label for="libType"></label>
			<select id="libType" class="form1">
			<option>공공 도서관</option>
			<option>작은 도서관</option>
			<option>장애인 도서관</option>
			<option>전문 도서관</option>
			</select>
			
			<label for="libSeacrhSubmit"></label>
			<input type="submit" id="libSeacrhSubmit" value="검색" class="form2"/>
			</dd>
			</dl>
			</div>
		
			<div class="lib-search-box">
			<dl>
			<dt>도서관 명:</dt>
			<dd>
			<label for="libName"></label>
			<input type="text" id="libName"   class="form3" />
			
			<label for="libNameSearch"></label>
			<input type="submit" id="libNameSearch" value="검색"  class="form2" />
			</dd>
			</dl>
			</div>			
			</fieldset>
			</form>
			
			<div class="map">
		<!--
	* Daum 지도 - 약도서비스
	* 한 페이지 내에 약도를 2개 이상 넣을 경우에는
	* 약도의 수 만큼 소스를 새로 생성, 삽입해야 합니다.
-->
<!-- 1. 약도 노드 -->
<div id="daumRoughmapContainer1480698421554" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!-- 2. 설치 스크립트 -->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1480698421554",
		"key" : "eihb",
		"mapWidth" : "1200",
		"mapHeight" : "400"
	}).render();
</script>
			</div>
			
			<table>
			<caption>서울도서관 교통안내</caption>
			<colgroup>
			<col class="table1">
			<col class="table2">
			</colgroup>
			
			<tr>
			<th>교통 및 시설</th>
			<th>이용안내</th>
			</tr>
			<tr>
			<th>지하철</th>
			<td>수도권 지하철 1,2호선 시청역 ⑤번 출구</td>
			</tr>
			<tr>
			<th>버스</th>
			<td>
			① 정류정명: 시청ㆍ서울신문사 (02-706)  |	버스번호: 공항 6005<br/>
② 정류정명:  프레스센터
(02-507)  |	버스번호: 	마을 종로09, 종로11, 공항 6701<br/>
③ 정류정명: 시청앞ㆍ덕수궁
(02-286)  |	버스번호: 	간선 103, 150, 401, 402, 406, 604, N16, 지선 1711, 7016, 7022<br/>
④ 정류정명:  시청광장
(02-641)  |	버스번호: 	간선 172, 472, N62<br/>
⑤ 정류정명:  시청역
(02-503)  |	버스번호: 	마을 종로09, 종로11<br/>
⑥ 정류정명: 시청덕수궁
(02-662)  |	버스번호: 	순환 90S투어, 공항6005<br/>
⑦ 정류정명: 롯데호텔
(02-639)  |	버스번호: 	공항 6701<br/>
⑧ 정류정명: 서울프라자호텔
(02-699)  |	버스번호: 	공항 6701<br/>

			</td>
			</tr>
			<tr>
			<th>서울시청 주차장</th>
			<td>
			주차공간이 많이 부족하오니 되도록 대중교통을 이용해 주시기 바랍니다.<br/>
주차정보안내시스템(http://parking.seoul.go.kr/)에서 시청 주변 공영주차장을 확인하실 수 있습니다.<br/>
청사 시설물을 보호하기 위해 높이 2.3m 이상 차량은 주차장으로 진입할 수 없습니다.<br/>
개방시간 : 평일 08:30~21:00 주말.공휴일 09:00 ~21:00 (시민청 개방시간과 동일)<br/>
주차요금 : 10분당 1,000원 (평일 09:00~18:00만 부과)<br/>
			</td>
			</tr>
			</table>
			
		</div>
		</section>
	</div>

 <? include("include/footer.php")  ?>

  <script type="text/javascript" src="js/jquery.js"> </script>
  <script type="text/javascript" src="js/jquery-ui.min.js"> </script>   
  <script type="text/javascript" src="js/prefixfree.js"> </script>
  <script type="text/javascript" src="js/common.js"> </script>
  <script type="text/javascript" src="js/main.js"> </script>


 </body>
</html>






















 
