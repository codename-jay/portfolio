<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>대웅제약</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta name="description" content="웹포트폴리오 최진아">
  <meta name="keywords"    content="웹 디자인, 웹표준 ,그래픽, HTML5, CSS3">
  <meta name="author"      content="최진아">
  <link rel="shortcut icon" href="img/favicon_1.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">  
  <link rel="stylesheet" href="css/subimport.css" type="text/css"/>


 </head>
   
 <body>
 <div id="wrap">
 <? include("include/header.php")  ?>
	
	<nav id="submenu" class="cf">
	<div class="submenu1">
	<a href="#" class="menu1-a">제품 ∨</a>	
		<ul class="menu1">
			<li><a href="#">기업</a></li>
			<li><a href="#">제품</a></li>
			<li><a href="#">연구개발</a></li>
			<li><a href="#">투자정보</a></li>
			<li><a href="#">홍보</a></li>
			<li><a href="#">고객</a></li>
			<li><a href="#">건강</a></li>	
		</ul>
	</div>
	
	<div class="submenu2">	
		<a href="#" class="menu2-a">제품검색 ∨</a>	
		<ul class="menu2">
			<li><a href="#">제품검색</a></li>
			<li><a href="#">제품정보</a></li>
			<li><a href="#">가정상비약</a></li>
			<li><a href="#">제품변경정보</a></li>	
		</ul>
	</div>
	</nav>
	<h3 class="sub-top">제품검색</h3>

<div id="container">
<section id="contents">
	<div class="m-sub3 m-sub">
	
	
	<div class="prd-search">
					
					<form action="" method="">
					<fieldset>
					  <legend class="hide">대웅제약 제품검색</legend>
						<dl>
							<dt>제품명 검색</dt>
							<dd>
							<label for="prd-name"></label>
							<input type="text" id="prd-name" />	
							<label for="prd-submit"></label>
							<input type="submit" id="prd-submit" value="검색" />
							</dd>	
						</dl>
						<dl>
							<dt>초성 검색</dt>
							<dd>
							<ul class="first-lang cf">
								<li><a href="#">ㄱ</a>  </li>
								<li><a href="#"> ㄴ</a>  </li>
								<li><a href="#"> ㄷ</a>  </li>
								<li><a href="#"> ㄹ</a> </li>
								<li><a href="#"> ㅁ</a>  </li>
								<li><a href="#"> ㅂ</a> </li>
								<li><a href="#"> ㅅ</a> </li>
								<li><a href="#"> ㅇ</a> </li>
								<li><a href="#"> ㅈ</a>  </li>
								<li><a href="#"> ㅊ</a> </li>
								<li><a href="#"> ㅋ</a> </li>
								<li><a href="#"> ㅌ</a> </li>
								<li><a href="#"> ㅍ</a> </li>
								<li><a href="#"> ㅎ</a>  </li>
							</ul>
							</dd>	
						</dl>
						<dl>
							<dt>효능 검색</dt>
							<dd>
							<label for="prd-effect"></label>
							<input type="text" id="prd-effect" />	
							<label for="prd-submit"></label>
							<input type="submit" id="prd-submit" value="검색" />
							</dd>	
						</dl>
							
						<ul class="prd-group cf">
						
						<li> 
							<label for="prd1"></label>
							<input type="checkbox" id="prd1" class="prd" />
							<em>일반 의약품</em>
						</li>
						<li> 
							<label for="prd2"></label>
							<input type="checkbox" id="prd2" class="prd"/>
							<em>전문 의약품</em>
						</li>
						<li> 
							<label for="prd3"></label>
							<input type="checkbox" id="prd3" class="prd" />
							<em>건강기능 식품</em>
						</li>
						<li> 
							<label for="prd4"></label>
							<input type="checkbox" id="prd4"  class="prd"/>
							<em>의약외품</em>
						</li>
						<li>
							<label for="prd6"></label>
							<input type="checkbox" id="prd6" class="prd" />
							<em>전체</em>
						</li>
						<li> 
							<label for="prd5"></label>
							<input type="checkbox" id="prd5"  class="prd"/>
							<em>기타</em>
						</li>
						</ul>	 
					</fieldset>
					</form>
				</div>
				
				<div class="new-prd">
				<h4>신제품</h4>
				
				<ul class="new-prds cf">
					<li><a href="sub6.php">
						<span>일반 의약품</span>
						<img src="images/product_1.jpg" alt="이지엔6 스트롱 연질캡슐" />
						<strong>이지엔 스트롱 연질캡슐</strong>
						<em>마티양 관절염, 골관절염, 강직성 척추염 건염, 월경곤란증에 효능</em>
					</a></li>
					<li><a href="#">
						<span>일반 의약품</span>
						<img src="images/product_2.jpg" alt="페노스탑 플라스타 미니" />
						<strong>페노스탑 플라스타 미니</strong>
						<em>퇴행성관절염, 근육통, 외상후의 종창 등의 소염</em>
					</a></li>
					<li><a href="#">
						<span>전문 의약품</span>
						<img src="images/product_3.jpg" alt="슈글렛" />
						<strong>슈글렛</strong>
						<em>성인 제2형 당뇨병 환자의 혈당조절을 향상시키기 위해 식사 및 운동요법의 보조제</em>
					</a></li>
					<li><a href="#">
						<span>의료기기</span>
						<img src="images/product_4.jpg" alt="이지덤 폼" />
						<strong>이지덤 폼</strong>
						<em>베인곳, 까진곳, 화상 등의 상처 오염방지 및 습윤환경을 유지하며 상처를 보호</em>
					</a></li>
					<li><a href="#">
						<span>전문 의약품</span>
						<img src="images/product_5.jpg" alt="세프록틸 건조시럽" />
						<strong>세프록틸 건조시럽</strong>
						<em>종기, 옹종, 전염성농가진, 연조직염, 림프관염, 피하농양, 인후두염, 급성기관지염</em>
					</a></li>
					<li><a href="#">
						<span>전문 의약품</span>
						<img src="images/product_6.jpg" alt="바라크로스정 1mg" />
						<strong>바라크로스정 1mg</strong>
						<em>성인(16세 이상)의 만성 B형 간염바이러스 감염의 치료.</em>
					</a></li>
					<li><a href="#">
						<span>전문 의약품</span>
						<img src="images/product_7.jpg" alt="목시클네오시럽" />
						<strong>목시클네오시럽</strong>
						<em>폐렴연쇄구균,헤모필루스 인플루엔자, 모락셀라, 카타랄리스</em>
					</a></li>
					<li><a href="#">
						<span>전문 의약품</span>
						<img src="images/product_8.jpg" alt="인스타닐 나잘 스프레이" />
						<strong>인스타닐 나잘 스프레이</strong>
						<em>18세 이상 성인 : 암 환자의 돌발성 통증 완화</em>
					</a></li>
				</ul>
				
				<ul class="paging cf">
					<li class="prevnext"><a href="#"> &lt; </a></li>
					<li class="prevnext"><a href="#"> &lt;&lt; </a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li class="prevnext"><a href="#"> &gt;&gt; </a></li>
					<li class="prevnext"><a href="#"> &gt; </a></li>
				</ul>
				</div>
	
	
	</div>
</section>
</div>	

 <? include("include/footer.php")  ?>
 </div><!-- //////////wrap -->

 </body>
</html>






















 
