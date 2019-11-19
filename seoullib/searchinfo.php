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
			<h2>정보 검색</h2>
			<span> 서울도서관 및 서울시에서 소장하고 있는 국내의 자료들을 통합 검색할 수 있습니다.</span>
		</div>
	</div>
	
	<div id="subMenu">
	<div class="inner1280">
		<nav id="subNav" class="cf">
			<a href="#" class="s-nav0"></a>
			<div class="relative">
			<a href="javascript:" class="s-nav s-nav1">정보 검색</a>
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
			<a href="javascript:" class="s-nav s-nav2">소장자료검색</a>
			<ul class="nav-gnb">
				<li><a href="#">소장자료검색</a></li>
				<li><a href="#">서울시간행물</a></li>
				<li><a href="#">단행본</a></li>
				<li><a href="#">연속간행물</a></li>
				<li><a href="#">비도서자료</a></li>
				<li><a href="#">도서관별 도서검색</a></li>
				<li><a href="#">신착자료</a></li>
				<li><a href="#">인기자료</a></li>
				<li><a href="#">세계자료</a></li>
				<li><a href="#">장애인자료</a></li>
			</ul>
			</div>
		
			<a href="#" class="s-nav4">온라인 정보 서비스</a>
		</nav>
	</div>
	</div>	
	
	<div id="container">
		<section id="subPage1" class="sub-contents">
		<div class="inner1280">
			<h3>소장자료검색</h3>

			<div class="search-wrap">
				
			<ul class="search-title cf">
				<li class="on"><a href="#">키워드</a></li>
				<li><a href="#">전방일치</a></li>
				<li><a href="#">완전일치</a></li>
			</ul>
			
		<form action="#" method="get" accept-charset="utf-8">
		  <fieldset>
			<legend class='hide'>소장자료 검색</legend>
			
			<table>
				<caption class="hide">소장자료 검색 폼 구조</caption>
				<colgroup>
					<col class="table1">
					<col class="table2">
					<col class="table3">
				</colgroup>
				
				<tr>
					<td>
						<label for="f-title"></label>
						<select name="제목" id="f-title" class="form-title">
							<option>제목</option>
							<option>전체</option>
							<option>저자</option>
							<option>주제어</option>
							<option>출판사</option>
							<option>ISSN</option>
							<option>ISBN</option>
						</select>
					</td>
					<td>
						<label for="f-text1"></label>
						<input type="text"  value="" id="f-text1" class="form-text"/>
					</td>
					<td>
						<label for="f-terms1"></label>
						<select name="and" id="f-terms1" class="form-terms">
							<option>and</option>
							<option>or</option>
							<option>not</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="f-name"></label>
						<select name="저자" id="f-name" class="form-title">
							<option>저자</option>
							<option>전체</option>
							<option>제목</option>
							<option>주제어</option>
							<option>출판사</option>
							<option>ISSN</option>
							<option>ISBN</option>
						</select>
					</td>
					<td>
						<label for="f-text2"></label>
						<input type="text" value="" id="f-text2" class="form-text"/>
					</td>
					<td>
						<label for="f-terms2"></label>
						<select name="or" id="f-terms2" class="form-terms">
							<option>or</option>
							<option>and</option>
							<option>not</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="f-company"></label>
						<select name="출판사" id="f-company" class="form-title">
							<option>출판사</option>
							<option>제목</option>
							<option>저자</option>
							<option>주제어</option>
							<option>전체</option>
							<option>ISSN</option>
							<option>ISBN</option>
						</select>
					</td>
					<td>
						<label for="f-text3"></label>
						<input type="text"  value="" id="f-text3" class="form-text"/>
					</td>
					<td>
						<a href="#" class="form-laguage">다국어 입력</a>
					</td>
				</tr>
			</table>
			
			<ul class="f-checkbox1 cf">
				<li><em>자료유형</em></li>
				<li>
					<label for="total1"></label>
					<input type="checkbox" value="" id="total1"/>
					<em>전체</em>
				</li>
				<li>
					<label for="checklist1_1"></label>
					<input type="checkbox"  value="" id="checklist1_1"/>
					<em>단행본</em>
				</li>
				<li>
					<label for="checklist1_2"></label>
					<input type="checkbox"  value="" id="checklist1_2"/>
					<em>연속 간행물</em>
				</li>
				<li>
					<label for="checklist1_3"></label>
					<input type="checkbox"  value="" id="checklist1_3"/>
					<em>학위논문</em>
				</li>
				<li>
					<label for="checklist1_4"></label>
					<input type="checkbox" value="" id="checklist1_4"/>
					<em>비도서</em>
				</li>
				<li>
					<label for="checklist1_5"></label>
					<input type="checkbox"  value="" id="checklist1_5"/>
					<em>전자책</em>
				</li>
				<li>
					<label for="checklist1_6"></label>
					<input type="checkbox" value="" id="checklist1_6"/>
					<em>서울시 간행물</em>
				</li>
			</ul>
			
			<ul class="f-checkbox2 cf">
				<li><em>수록매체</em></li>
				<li>
					<label for="total2"></label>
					<input type="checkbox" value="" id="total2"/>
					<em>전체</em>
				</li>
				<li>
					<label for="checklist2_1"></label>
					<input type="checkbox"  value="" id="checklist2_1"/>
					<em>원문</em>
				</li>
				<li>
					<label for="checklist2_2"></label>
					<input type="checkbox" value="" id="checklist2_2"/>
					<em>동영상</em>
				</li>
				<li>
					<label for="checklist2_3"></label>
					<input type="checkbox" value="" id="checklist2_3"/>
					<em>초록</em>
				</li>
				<li>
					<label for="checklist2_4"></label>
					<input type="checkbox"  value="" id="checklist2_4"/>
					<em>목차</em>
				</li>
				<li>
					<label for="checklist2_5"></label>
					<input type="checkbox"  value="" id="checklist2_5"/>
					<em>url</em>
				</li>
			</ul>
			
			<ul class="seachform2">
			<li>
			<strong>발행기간</strong>
			<label for="startMonth"></label>
			<input type="month" id="startMonth" class="search-month"/>
			<span>-</span>
			<label for="lastMonth"></label>
			<input type="month" id="lastMonth" class="search-month" />
			</li>
			
			<li>
			<strong>언어</strong>
			<label for="language"></label>
			<select id="language" class="form-select">
			<option>전체</option>
			<option>한국어</option>
			<option>영어</option>
			<option>일본어</option>
			<option>중국어</option>
			<option>독어</option>
			<option>불어</option>
			<option>스페인어</option>
			<option>러시아어</option>
			<option>이탈리아어</option>
			<option>라틴어</option>
			<option>태국어</option>
			<option>몽고어</option>
			<option>베트남어</option>
			<option>캄보디아어</option>
			<option>인도네시아어</option>
			<option>타칼로그어</option>
			</select>
			</li>
			<li>
			<strong>최대 검색건 수</strong>
			<label for="number"></label>
			<select  id="number" class="form-select">
			<option>100</option>
			<option>200</option>
			<option>500</option>
			<option>1000</option>
			<option>10000</option>
			</select>
			</li>
			<li>
			<strong>쪽당 출력 건수</strong>
			<label for="page"></label>
			<select id="page" class="form-select">
			<option>5</option>
			<option>10</option>
			<option>20</option>
			<option>30</option>
			<option>50</option>
			<option>100</option>
			</select>
			</li>
			</ul>
			
			
			
			
			<ul class="f-submit">
				<li>
					<label for="submit1"></label>
					<input type="submit"  value="검색" id="submit1" class="submit1"/>
				</li>
				<li><a href="#">검색이력</a></li>
				<li><a href="#">나의 검색어</a></li>
				<li><a href="#">다시쓰기</a></li>
			</ul>
						 
		  </fieldset>
		</form>
		
		</div>
		</div>
		</section>
		
		<section id="subPage1_1" class="sub-contents">
		<div class="inner1280">
		<h3>대출 TOP5</h3>
			<div class="top5">
				<a href="#">자세히 보러가기</a>
				<img src="images/sub1/top5book1.png" alt="하늘과 바람과 별과 시" />
				<strong>하늘과 바람과 별과 시</strong>
				<span>저자 윤동주<br/> 한국 시</span>
				
			</div>
			
			<div class="top5">
				<a href="#">자세히 보러가기</a>
				<img src="images/sub1//top5book2.png" alt="그럴 때 있으시죠?" />
				<strong>그럴 때 있으시죠?</strong>
				<span>저자 김제동<br/>에세이</span>
				
			</div>
			
			<div class="top5">
				<a href="#">자세히 보러가기</a>
				<img src="images/sub1//top5book3.png" alt="꽃을 보듯 너를 본다" />
				<strong>꽃을 보듯 너를 본다</strong>
				<span>저자 나태주<br/>한국 시</span>
				
			</div>
			
			<div class="top5">
				<a href="#">자세히 보러가기</a>
				<img src="images/sub1//top5book4.png" alt="해리포터 저주받은 아이" />
				<strong>해리포터 저주받은 아이 </strong>
				<span>저자 J.K.롤링<br/>SF.판타지 해외 소설</span>
				
			</div>
			
			<div class="top5">
				<a href="#">자세히 보러가기</a>
				<img src="images/sub1//top5book5.png" alt="그릿" />
				<strong>GRIT</strong>
				<span>저자 앤절라 더크워스<br/>자기 계발서</span>
				
			</div>
		</div>
		</section>
		
		
	</div>

 <? include("include/footer.php")  ?>

  <script type="text/javascript" src="js/jquery.js"> </script>
  <script type="text/javascript" src="js/jquery-ui.min.js"> </script>   
  <script type="text/javascript" src="js/prefixfree.js"> </script>
  <script type="text/javascript" src="js/common.js"> </script>

 </body>
</html>






















 
