<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>대웅제약 리뉴얼 홈페이지</title>

  <meta name="description" content="웹포트폴리오 최진아">
  <meta name="keywords"    content="웹 디자인, 웹표준 ,그래픽, HTML5, CSS3">
  <meta name="author"      content="최진아">
  <link rel="shortcut icon" href="img/favicon_1.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">  
  <link rel="stylesheet" href="css/subimport.css" type="text/css"/>
  
 </head>
   
 <body>
 <? include("include/header.php")  ?>
	
	<section id="sub-visual" class="sub-visual02">
		<div class="sub-inner-wrap">
			<h2>대웅뉴스</h2>
		</div>
	</section>
	
	<div id="container">
		<section id="sub-contents" class="cf">
			<h2 class="hide">대웅제약 뉴스 페이지</h2>
			<aside class="aside-bar">
				<h3>홍보</h3>
				<ul class="side-menu">
					<li class="on"><a href="#">소식</a>
						<ul>
							<li><a href="#"> - 대웅뉴스</a></li>
							<li><a href="#"> - 공지</a></li>
						</ul>
					</li>
					<li><a href="#">홍보영상</a></li>
					<li><a href="#">광고</a></li>
					<li><a href="#">기업문화</a></li>
					<li><a href="#">웹진 | 베어투게더</a></li>			
				</ul>
			</aside>
			
			<div class=" sub-conbody sub-body02">
			<ul class="path">
				<li><a href="#">홈</a> &gt;</li>
				<li><a href="#">홍보</a> &gt;</li>
				<li><a href="#">소식</a> &gt;</li>
				<li><a href="#"><span>대웅뉴스</span></a></li>
				</ul>
				<div class="top-news">
				<h4>new</h4>
				<ul class="cf">
					<li>
						<a href="#">
							<img src="images/sub/news1.jpg" width="230"  alt="뉴스이미지1" />
							<em>세계고혈압학회에서 ‘올메텍’ 등 <br/>올메사르탄 제제의 우수성 전파 위한<br/>심포지엄 진행 </em>
							<p>지난 24일부터 29일까지 서울 코엑스에서 열린 
								‘제26차 세계고혈압학회 학술행사
								(ISH Seoul 2016)’에서 
								학술 심포지엄을 진행했다고 28일 밝혔다.</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="images/sub/news2.jpg" width="230"  alt="뉴스이미지2" />
							<em>2016 인적자원개발 우수기관<br/>(Best HRD)인증 획득</em>
							<p>23일 고용노동부, 교육부, 산업통상자원부, 중소기업청 주최로 
								서울 양재동 엘타워에서 열린 
								‘2016년도 인적자원개발 
								우수기관 수여식’에서 
								우수기업 인증을 받았다고 밝혔다.</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="images/sub/news3.jpg" width="230"  alt="뉴스이미지3" />
							<em>나보타’ 멕시코-인도 허가 획득으로 <br/>신흥시장 진출 확대</em>
							<p>자체 개발한 보툴리눔톡신 제제 ‘나보타’에 대해
								멕시코와 인도에서 허가를 획득하며 신흥시장에도 K뷰티를 알려나갈 
								계획이라고 21일 밝혔다.</p>
						</a>
					</li>
				</ul>
				</div>
				
				<div class="news">
				<form action="#">
				<fieldset>
					<legend class="hide">대웅 뉴스 게시판 검색</legend>
						<p>
						<label for="news-search1"></label>
						<select id="news-search1">
						<option>제목</option>
						<option>본문</option>
						<option>제몬+본문</option>
						</select> 
						
						<label for="news-search2"></label>
						<input type="text" id="news-search2" />
						
						<label for="news-search"></label>
						<input type="submit"  id="news-search" value="search"/>
						</p>
				</fieldset>
				</form>
				
				<table>
				<caption class="hide">대웅제약 뉴스 게시판</caption>
					<colgroup>
						<col class="table1"/>
						<col class="table2"/>
						<col class="table3"/>
					</colgroup>
					<thead>
						<tr>
							<th scope="col">번호</th>
							<th scope="col">제목</th>
							<th scope="col">등록일</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>936</td>
								<td><a href="#">대웅제약, 세계고혈압학회에서 ‘올메텍’ 등 올메사르탄 제제의 우수성 전파 위한 심포지엄 진행</a></td>
								<td>2016-09-28</td>
							</tr>
							<tr>
								<td>935</td>
								<td><a href="#">대웅제약, 2016 인적자원개발 우수기관(Best HRD) 인증 획득</a></td>
								<td>2016-09-26</td>
							</tr>
							<tr>
								<td>934</td>
								<td><a href="#">대웅제약, ‘나보타’ 멕시코-인도 허가 획득으로 신흥시장 진출 확대</a></td>
								<td>2016-09-22</td>
							</tr>
							<tr>
								<td>933</td>
								<td><a href="#"> 대웅제약, 사내어린이집 리틀베어 추석맞아 송편빚기, 전통놀이 등 체험행사 가져 	</a></td>
								<td>2016-09-09</td>
							</tr>
							<tr>
								<td>932</td>
								<td><a href="#">대웅제약, 책읽기 좋은 계절 맞아 ‘북카페’ 오픈</a></td>
								<td>2016-09-05</td>
							</tr>
							<tr>
								<td>931</td>
								<td><a href="#">대웅제약, 성장 잠재력 가진 인재 찾기 1박 2일 ‘올인’ </a></td>
								<td>2016-08-31</td>
							</tr>
							<tr>
								<td>930</td>
								<td><a href="#">대웅제약, 일하기 좋은 회사 '스마트워크플레이스'로 직원 성장 도모</a></td>
								<td>2016-08-24</td>
							</tr>
							<tr>
								<td>929</td>
								<td><a href="#">대웅제약, 전 직원 공정거래 자율준수 실천 위한‘CP FAQ 가이드북’ 발간</a></td>
								<td>2016-08-11</td>
							</tr>
							<tr>
								<td>928</td>
								<td><a href="#">대웅제약, 동전파스 '페노스탑 플라스타 미니' 출시 </a></td>
								<td>2016-08-04</td>
							</tr>
							<tr>
								<td>927</td>
								<td><a href="#">대웅제약, 세계 미용성형학회서 ‘나보타’ 우수성 전파</a></td>
								<td>2016-08-02</td>
							</tr>
						</tbody>
				</table>
				<ul class="paging cf">
					<li class="prevnext"><a href="#"> &lt; </a></li>
					<li class="prevnext"><a href="#"> &lt;&lt; </a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#">10</a></li>
					<li class="prevnext"><a href="#"> &gt;&gt; </a></li>
					<li class="prevnext"><a href="#"> &gt; </a></li>
				</ul>
				</div>
				
			</div>
		</section>
	</div>
	
	

 <? include("include/footer.php")  ?>
 
   <script type="text/javascript" src="js/jquery.js"> </script>
  <script type="text/javascript" src="js/common.js"> </script>
  

 </body>
</html>






















 
