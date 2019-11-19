<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="utf-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>최진아 포트폴리오-서울도서관</title>
<meta name="description" content="웹포트폴리오 최진아">
<meta name="keywords"    content="웹 퍼블리셔, HTML5, CSS3, jQuery ,웹 디자인">
<meta name="author"      content="최진아">
<script>
 var uAgent = navigator.userAgent.toLowerCase();
 var mobilePhones = new Array('iphone','ipod','android','blackberry','windows ce',
 'nokia','webos','opera mini','sonyericsson','opera mobi','iemobile');
 for(var i=0;i<mobilePhones.length;i++)
 if(uAgent.indexOf(mobilePhones[i]) != -1)
 document.location="mobile/index.php";
</script>

<link rel="shortcut icon" href="img/favicon_1.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">  
<link rel="stylesheet" href="fa/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/import.css" type="text/css"/>  
<!--[if lt IE 9]><script src="js/IE9.js"></script><![endif]-->     
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]--> 
</head>
   
<body> 
  <? include("include/header.php")  ?>
	
	<section id="visual">
		<ul class="visual-img">
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<div class="inner1280">
		<div class="search-bar">
			<ul class="cf">
			<li><a href="#">서울도서관 통합검색</a></li>
			<li><a href="#">도서관별 도서검색</a></li>
			</ul>
			<form action="#">
			<fieldset>
				<legend class="hide">메인 도서 검색창</legend>
				<p>
				<label for="search-bar-get"></label>	
				<input type="text" class="search-bar-get" id="search-bar-get" value="내용을 입력해주세요" />
				<label for="search-bar-submit"></label>	
				<input type="submit" class="search-bar-submit" id="search-bar-submit" value="검색" />
				</p>
			</fieldset>
			</form>		
		</div>
		
		<div class="today-notice">
		<h3>서울도서관의 오늘</h3>
		<p>
		<span>개관</span> 09:00~21:00<br/>
		<em>2016년 11월 16일 (수)</em>
		<span>대출</span> 611권 | <span>반납</span> 642권<br/>
		<span>예약</span> 109권 | <span>보존서고 신청</span> 25권<br/><br/>
		한 주간 새로 들어온 도서는 869권 입니다.<br/>
		<span>총 대출권수</span> 1,431,910권
		</p>
		</div>
		<ul class="paging cf">
		<li class="on"></li>
		<li></li>
		<li></li>
		</ul>
		
		</div>
	</section><!--/////////////////////////////////////////////// visual -->
	
	<div id="container">
		<section id="content1">
			<h2 class="hide">서울도서관 메인페이지 컨텐츠</h2>
		<div class="inner1280">
		<ul class="cf">
		<li><a href="#">온라인 정보 서비스</a></li>
		<li><a href="hopebook.php">자료 기증 안내</a></li>
		<li><a href="#">기획 전시 안내</a></li>
		<li><a href="#">세계자료</a></li>
		<li><a href="#">희망도서 신청</a></li>
		</ul>
		</div>
		</section><!--/////////////////////////////////////////////// content1 -->
		
		<section id="content2">
		<div class="inner1280">
		<div class="conbox1">
		<div class="conbox1_1">
		<dl>
		<dt class="on"><a href="javascript:">공지사항</a></dt>
		<dd>
			<h4><a href="news.php">[행사안내]책방 산책 서울</a></h4>
			<p><a href="news.php">책방 산책 서울은 문화유랑자를 위한 도심 속산책 코스를 제안합니다. 서울의 풍경을 풍요롭게 가꾸는 일곱갈래 책방길을 따라 거닐어봅니다. 각기 다른 이야기가 쌓인 책방에는 고요하고 편안한 사색의 시간이 흐르고 있습니다. 당신의 발길이 닿는 곳에 새로운 이야기가 더해집니다. </a></p>
			<img src="images/main/news.png" width="160" alt="책방산책서울 포스터" />

			<ul class="cf">
			<li><a href="#">[도서전시]2016 서울도서관 BEST 대출도서 展(일반자료실2)</a> <span>2016-12-06</span></li>
			<li><a href="#">[전시] "책 속 도서관 읽기" 아동도서 전시</a> <span>2016-12-05</span></li>
			<li><a href="#">[안내] 캐슬린 윈(Kathleen Wynne) 수상 도서 기증행사 </a> <span>2016-12-05</span></li>
			<li><a href="#">[안내] 책방산책서울 5차~10차 일정</a> <span>2016-12-02</span></li>
			</ul>
		</dd>
		<dt><a href="javascript:">보도자료</a></dt>
		<dd><a href="#">
		<strong>
		서울도서관, 한 달에 한 도시 강연개최<br/>
		생활 여행자 김은덕, 백종민 부부의 세계 여행기를 주제로 한 강연 진행<br/>
		서울도서관 홈페이지를 통해 10.12(수) 오전 10시부터 40명 선착순 모집 <span>2016-12-09</span>
		</strong>
		</a>
		<ul class="cf">
			<li><a href="#">캐나다 온타리오주 캐슬린 윈 수상, 서울도서관에 도서 기증 </a> <span>2016-12-08</span></li>
			<li><a href="#">함께 책읽는 동아리, "우리는 독서동아리다" 활동 평가회 개최 </a> <span>2016-12-07</span></li>
			<li><a href="#">우리 동네 도서관과 책방 정보, 한번에 확인하세요</a> <span>2016-12-06</span></li>
			<li><a href="#">서점의 미래를 논하는 '제1회 서울서점인대회' 개최 </a> <span>2016-12-06</span></li>
			<li><a href="#">서울의 미래, 서점에서 발견하다. 서울서점 120년 전시회 </a> <span>2016-12-05</span></li>
			<li><a href="#">11월 도성의 경계를 따라 걷는 도시유산 탐방 신청하세요 </a> <span>2016-12-04</span></li>
		</ul>
		</dd>
		<dt><a href="javascript:">도서관별 소식</a></dt>
		<dd><a href="#">
		<strong>
		[양천갤러리] 문화교실 한글서예반 전시<br/>
		양천도서관 2층 양천갤러리에서<br/>
		문화교실 한글서예반 전시가 12월1일~12월8일에 열립니다<span>2016-12-01</span>
		</strong>
		</a>
		<ul class="cf">
			<li><a href="#">[서강도서관] 누구라도 괜찮아 낭독회 </a> <span>2016-12-08</span></li>
			<li><a href="#">[서강도서관] 12월 문화프로그램 안내  </a> <span>2016-12-07</span></li>
			<li><a href="#">[양천도서관] 12월 영화상영안내 </a> <span>2016-12-06</span></li>
			<li><a href="#">[양천도서관] 12월독서문화행사달력 </a> <span>2016-12-06</span></li>
			<li><a href="#">[양천도서관] 갤러리 신목종합사회복지관 알록달록 전시회  </a> <span>2016-12-05</span></li>
			<li><a href="#">[용산도서관] 인생을 3배로 넓히는 조선의 이야기들 운영 안내 </a> <span>2016-12-04</span></li>
		</ul>
		</dd>
		</dl>
		<span class="more"><a href="news.php">+</a></span>
		</div>
		
		<div class="conbox1_2">
		<ul class="ad-banner">
		<li><a href="#"><img src="images/main/event-b1.png"  width="590" alt="이벤트베너1" /></a></li>
		<li><a href="#"><img src="images/main/event-b2.png"  width="590" alt="이벤트베너1" /></a></li>
		<li><a href="#"><img src="images/main/event-b3.png" width="590"  alt="이벤트베너1" /></a></li>
		</ul>
		
		<ul class="paging">
		<li class="prev"><a href="javascript:">&lt; </a></li>
		<li class="next"><a href="javascript:"> &gt;</a></li>
		</ul>
		</div>
		
		</div>
		
		<div class="conbox2">
		<div class="conbox2_1">
		<h3>서울 도서관 일정</h3>
		<ul class="cf">
		<li>휴관</li>
		<li>행사</li>
		<li>취재</li>
		<li>견학</li>
		</ul>
		<span class="more"><a href="schedule.php">+</a></span>
		<h4>2016년 12월</h4>
		<table>
		<caption>2016년 12월 일정</caption>
		<thead>
		<tr>
		<th>일</th>
		<th>월</th>
		<th>화</th>
		<th>수</th>
		<th>목</th>
		<th>금</th>
		<th>토</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>1</td>
		<td>2<span class="interview"></span></td>
		<td>3</td>
		</tr>
		<tr>
		<td>4</td>
		<td>5<span class="rest"></span></td>
		<td>6<span class="interview"></span></td>
		<td>7</td>
		<td>8<span class="eve"></span></td>
		<td>9</td>
		<td>10</td>
		</tr>
		<tr>
		<td>11</td>
		<td>12<span class="rest"></span></td>
		<td>13</td>
		<td>14</td>
		<td>15</td>
		<td>16<span class="interview"></span></td>
		<td>17</td>
		</tr>
		<tr>
		<td>18</td>
		<td>19<span class="rest"></span></td>
		<td>20</td>
		<td>21</td>
		<td>22<span class="eve"></span></td>
		<td>23</td>
		<td>24</td>
		</tr>
		<tr>
		<td>25<span class="rest"></span></td>
		<td>26<span class="rest"></span></td>
		<td>27</td>
		<td>28</td>
		<td>29</td>
		<td>30</td>
		<td>31<span class="eve"></span></td>
		</tr>
		</tbody>		
		</table>	
		</div>
		
		<div class="conbox2_2">
		<ul class="cf">
		<li><a href="#">도서관 이용안내</a></li>
		<li><a href="#">도서관 층별안내</a></li>
		</ul>
		</div>
		</div>
		</div>
	
		</section><!--/////////////////////////////////////////////// content2 -->
		
		<section id="content3">
		<div class="inner1280">
		
		<h3>사서가 추천하는 오늘의 책</h3>
		<div class="overflow">
		<ul class="cf book">
			<li><a href="#"><img src="images/main/book1.png" width="180" alt="책:낭만적 연애와 그 후의 일상" /></a></li>
			<li><a href="#"><img src="images/main/book2.png" width="180"  alt="책:빨강머리앤이 하는 말" /></a></li>
			<li><a href="#"><img src="images/main/book3.png" width="180"  alt="책:여행자의 동네서점" /></a></li>
			<li><a href="#"><img src="images/main/book4.png" width="180"  alt="책:지적 대화를 위한 넓고 얕은 지식" /></a></li>
			<li><a href="#"><img src="images/main/book5.png" width="180"  alt="책:숨결이 바람될 때" /></a></li>
			<li><a href="#"><img src="images/main/book6.png" width="180"  alt="책:설민석의 조선왕조실록" /></a></li>
		</ul>
		<p>
			<span>여행자의 동네서점</span>/구선아 지음<br/>
			여행자의 시선으로 만든 서울의 동네서점 여행코스
		</p> 
		</div>
		<ul class="paging">
			<li class="prev"><a href="javascript:">&lt;</a></li>
			<li class="next"><a href="javascript:">&gt;</a></li>
		</ul>
		
		</div>
		</section><!--/////////////////////////////////////////////// content3 -->
		
		<section id="content4">
		<span></span>
		<div class="inner1280">
		
		<div class="conbox1">
			<h3>진행중인 전시 안내</h3>
			<dl>
				<dt class="on">
					도시를 읽다-독일의 도서관 건축
				</dt>
				<dd>
					<a href="exhibition.php">
					<img src="images/main/exhibit0.png" width="200" alt="서울사진축제"/>
					<strong>
						전시명: 도시를 읽다-독일의 도서관 건축<br/>
						전시장소: 서울도서관 기획 전시실<br/>
						전시일정: 2016.12.09(금)-12.11(일)
					</strong>
					<p>
					스케치의 대상이 되었던 도서관 관장과 이용자들의 이야기도 함께 소개되며, 새로운 시각에서 도서관 공간과 이용자들이 어떻게 소통하는지 의미있는 시간을 마련한 자리에 여러분을 초대합니다.</p>
					</a>
				</dd>
				<dt>
					2016 서울시 좋은 간판 전
				</dt>
				<dd>
					<a href="exhibition.php">
					<img src="images/main/exhibit1.png" width="200" alt="서울사진축제"/>
					<strong>
						전시명: 2016 서울시 좋은 간판 전<br/>
						전시장소: 서울도서관 기획 전시실<br/>
						전시일정: 2016.12.01(목)-12.09(금)
					</strong>
					<p>
					서울시에서 바람직한 광고 문화 형성과 도시경관 수준 향상을 위하여
  '좋은간판' 및 '창작간판' 공모전을 개최하여 수상한 작품들  18점을  대상으로 전시를 마련하였습니다</p>
					</a>
				</dd>
				<dt>
					2016 서울사진축제 언니들이 왔다
				</dt>
				<dd>
					<a href="exhibition.php">
					<img src="images/main/event.png" width="200" alt="서울사진축제"/>
					<strong>
						전시명: 2016 서울사진축제 언니들이 왔다<br/>
						전시장소: 서울도서관 기획 전시실<br/>
						전시일정: 2016.11.01(화)-11.30(수)
					</strong>
					<p>
					파독 간호사 50주년을 맞아 1970년대 독일로 파견되었던 세명의 간호사의 역동적인 삶 '한독이주여성아카이브'사업이 발굴한 자료와 베를린의 시민으로 50년을 살아온 '언니들'의 
					이미지와 삶의 흔적</p>
					</a>
				</dd>
			</dl>
		</div>
		
		<div class="conbox2">
			<h3>인기자료</h3>
			<ul class="cf">
				<li>
					<span>시각/영상자료</span>
					<img src="images/main/hotprd1.png" width="220"  alt="영화:노트북" />
					<a href="#">
						<strong>노트북 (The Notebook)</strong>
						<em>-카사베츠 닉감독-</em>
						<span>열일곱의 설렘, 스물넷의 아픈 기억.한 사람을 지극히 사랑했으니 내 인생은 성공한 인생입니다</span>
					</a>
				</li>
				<li>
					<span>단행본:장편소설</span>
					<img src="images/main/hotprd2.png" width="220"   alt="소설:소년이온다" />
					<a href="#">
						<strong>소년이온다</strong>
						<em>-한강-</em>
						<span>1980년 5월 18일부터 열흘간 있었던 광주민주화운동 당시의 상황과 이후 남겨진 사람들의 이야기를 들려준다.</span>
					</a>
				</li>
				<li>
					<span>시각/영상자료</span>
					<img src="images/main/hotprd3.png" width="220"   alt="영화:심야식당" />
					<a href="#">
						<strong>심야식당 (Midnight Diner)</strong>
						<em>-마츠오카 조지-</em>
						<span>마스터와 사연 있는 손님들이 맛으로 엮어가는 우리 이야기</span>
					</a>
				</li>
			</ul>
			
		</div>
		
		</div>
		</section><!--/////////////////////////////////////////////// content4 -->
		
		<section id="content5">
		<div class="inner1280">
		<div class="conbox1">
			<ul class="cf">
				<li>
				<a href="#">
				<span>서울 도서관 나눔 벗 봉사</span>
				서울 도서관의 얼굴로 함께 봉사할<br/>시민들의 많은 참여를 기다립니다.
				</a>
				</li>
				<li>
				<a href="#">
				<span>서울 시청사 통통투어 견학</span>
				테마 별로 체험하는 재미<br/>서울시청사의 숨겨진 이야기
				</a>
				</li>
				<li><a href="#"><span>시민의견</span>
				시민과 함께 만들어요.<br/>제안,의견,이용문의
				</a></li>
				<li><a href="#"><span>찾아오시는 길</span>
				서울의 정보 중심!<br/>서울 도서관을 안내합니다
				</a></li>
				<li><a href="#"><span>간행물 판매</span>
				서울의 깊이와 문화를 느끼다.<br/>
				서울책방
				</a></li>
			</ul>
		</div>
		
		<div class="conbox2">
			<h4>SNS</h4>
			<ul class="cf">
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
			<div class="sns-scroll">
				월요일 아침부터 서울 곳곳의 독서동아리 시민들과 도서관이 함께 한해 독서동아리 활동을 돌아보고 앞으로의 과제를 이야기하고 있습니다<br/>
5 hours ago<br/><br/>
새로운 꿈을 꾸겠다 말해요 서울도서관 정문 앞 꿈새김판에 새로 게재된 글귀입니다. 서울시는 현재의 시국을 견디는 시민들을 위로한다는 취지에서 이 문안을 선정했다고 밝혔다고 하네요~... <br/>https://t.co/dl9JYuuv5i<br/>
8 hours ago<br/><br/>
독립출판물을 소개하고 판매하는 언리미티드에디션 전시가 오늘부터 3일동안 광화문 일민미술관에서 열립니다. 관심있는 분들 관람해보세요. 새로운 책의 세계로. 관람자가 무척 많을 것 같으니 줄서기 각오하고...<br/> https://t.co/KupvD5IUQx<br/>
3 days ago<br/><br/>
&lt;책방산책서울&gt; 3차, 4차 일정을 알려드립니다. 2시간 전에 올린 일정은 변경된 것이 있다고 하네요... 죄송합니다. ㅠㅠ 우선 서촌과 신촌 일정만 올리겠습니다. 행사 참여에 착오 없으시길 바라며....<br/> https://t.co/Tdeq7CzE8e<br/>
4 days ago<br/><br/>
&lt;책방산책서울&gt; 일정을 알려드립니다. 찜해두셨다가 참가신청하세요. 소수만 참여할 수 있는 행사라서 아쉬워하시는 분들이 많아 몇 회를 더 진행하려고 준비하고 있습니다. 그리고 마지막 행사로...<br/> https://t.co/muc32nTTi2<br/>
4 days ago<br/><br/>
페이스북트위터핀터레스트

			</div>
		</div>
		
		</div>
		</section><!--/////////////////////////////////////////////// content5 -->
		
	</div><!--/////////////////////////////////////////////// container -->
	
	
<p class="footer-top">
	<a href="#header">▲</a>
</p>

 <? include("include/footer.php")  ?>

  <script type="text/javascript" src="js/jquery.js"> </script>
  <script type="text/javascript" src="js/jquery-ui.min.js"> </script>   
  <script type="text/javascript" src="js/prefixfree.js"> </script>
  <script type="text/javascript" src="js/common.js"> </script>
  <script type="text/javascript" src="js/main.js"> </script>


 </body>
</html>






















 
