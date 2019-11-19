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
			<h2>서울지식정보</h2>
			<span> 서울도서관 및 서울시에서 소장하고 있는 국내의 자료들을 통합 검색할 수 있습니다.</span>
		</div>
	</div>
	
	<div id="subMenu">
	<div class="inner1280">
		<nav id="subNav" class="cf">
			<a href="#" class="s-nav0"></a>
			<div class="relative">
			<a href="javascript:" class="s-nav s-nav1">서울지식정보</a>
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
			<a href="javascript:" class="s-nav s-nav2">온라인 정보 서비스</a>
			<ul class="nav-gnb">
				<li><a href="#">온라인 정보 서비스</a></li>
				<li><a href="#">협력형 정보 서비스</a></li>
				<li><a href="#">서울지식공유</a></li>
				<li><a href="#">이달의 서울자료</a></li>
				<li><a href="#">서울원문 DB</a></li>
			</ul>
			</div>
			<div class="relative">
			<a href="javascript:" class="s-nav s-nav3">질문/답변</a>
			<ul class="nav-gnb">
				<li><a href="#">이용안내</a></li>
				<li><a href="#">질문/답변</a></li>
			</ul>
			</div>
			<a href="#" class="s-nav4">온라인 정보 서비스</a>
		</nav>
	</div>
	</div>	
	
	<div id="container">
		<section id="subPage3" class="sub-contents">
		<div class="inner1280">
			<h3>질문/답변</h3>
			<span>공개된 무료 전자책 사이트를 소개합니다.<br/>국내 외 다양한 종류의 전자책을 무료로 이용하실 수 있습니다.</span>
			
			<div class="ask-info">
			  <h4>개인정보 수집 및 이용 동의</h4>
			   <em>참고질문 외에 상업적 내용, 상호비방, 사생활 침해 등 "사서에게 물어보세요"와 무관한 질문은 관리자가 임의로 삭제 할 수 있습니다.<br/>
					민원사항은 해당 도서관 민원코너를 이용하시기 바랍니다.<br/>
					본 홈페이지를 통해 답변하는 내용은 신뢰성과 정확성을 기하여 작성하며, 내용 자체에 대한 책임은 지지 않습니다.<br/>
					질문하신 내용과 그에 따른 답변은 DB에 저장되며, 다른 이용자의 질문에 활용하거나 FAQ 등으로 활용될 수 있습니다.<br/>
					질문 작성시 제공하는 개인정보는 질문 답변을 위한 목적 이외의  다른 목적으로는 사용되지 않으며, 개인 정보 보호정책에 의해 보호 받으실 수 있습니다.</em>

			<form action="#" method="get" accept-charset="utf-8">
			  <fieldset>
				<legend class="hide">개인정보 수집 및 이용 동의 체크 폼</legend>
				<p>
					<label for="agreeCheakbox"></label>
					<input type="checkbox" id="agreeCheakbox" class="agree-cheakbox"/>
					개인정보 수집∙이용에 동의합니다.(동의해야만 질문 등록 가능)
				</p>
				<p>
					<label for="askSubmit"></label>
					<input type="submit"  value="질문 등록 하기" id="askSubmit" class="ask-submit"/>
				</p>				 
			  </fieldset>						   
			</form>
			</div>
		
			<div class="ask-answer">
			  <form action="#" method="get" accept-charset="utf-8">
			  <fieldset>
				<legend class="hide">게시판 글 검색창</legend>
				<p>
					<label for="searchForm1_1"></label>
					<select name="searchForm1_1" id="searchForm1_1" class="searchForm1_1">
						<option>제목</option>
						<option>주제</option>
						<option>본문</option>
						<option>제목+본문</option>
					</select>
					
					<label for="searchForm1_2"></label>
					<input type="text" id="searchForm1_2" class="searchForm1_2"/>
					
					<label for="searchForm1_3"></label>
					<input type="submit" id="searchForm1_3" value="검색" class="searchForm1_3"/>
				</p>							 
			  </fieldset>						   
			</form>
			
			<table>
			<caption>질문과 답변 게시판</caption>
			<colgroup>
			<col class="table1" >
			<col class="table2" >
			<col class="table3" >
			<col class="table2" >
			<col class="table4" >
			</colgroup>
			<thead>
			<tr>
				<th>No</th>
				<th>주제</th>
				<th>제목</th>
				<th>첨부파일</th>
				<th>등록일</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>259</td>
				<td>도시행정</td>
				<td><a href="#">해방이전 평양시내 지적도</a><em>답변완료</em></td>
				<td><span></span></td>
				<td>2016-11-07</td>
			</tr>
			<tr>
				<td>258</td>
				<td>도시행정</td>
				<td><a href="#">안녕하세요. 도서관 관장 선임에 대한 기준이 궁금합니다.</a><em>답변완료</em></td>
				<td><span></span></td>
				<td>2016-11-06</td>
			</tr>
			<tr>
				<td>257</td>
				<td>기타</td>
				<td><a href="#">전자책을 통해 책을 읽고 싶어요.</a><em>답변완료</em></td>
				<td><span></span></td>
				<td>2016-11-06</td>
			</tr>
			<tr>
				<td>256</td>
				<td>기타</td>
				<td><a href="#">아직도 반납하지 않아요</a><em>답변완료</em></td>
				<td><span></span></td>
				<td>2016-11-05</td>
			</tr>
			<tr>
				<td>255</td>
				<td>기타</td>
				<td><a href="#">반납 하지 않은 책을 빌리고 싶습니다.</a><em>답변완료</em></td>
				<td><span></span></td>
				<td>2016-11-03</td>
			</tr>
			<tr>
				<td>254</td>
				<td>도시문화</td>
				<td><a href="#"> 서울의 관광자원 활성화에 대하여</a><em>답변완료</em></td>
				<td><span></span></td>
				<td>2016-11-01</td>
			</tr>
			<tr>
				<td>253</td>
				<td>서울학</td>
				<td><a href="#">서울특별시 건축상 작품집에 관해서</a><em>답변완료</em></td>
				<td><span></span></td>
				<td>2016-10-29</td>
			</tr>
			<tr>
				<td>252</td>
				<td>기타</td>
				<td><a href="#">서울도서관 운영 및 정보시스템 조사</a><em>답변완료</em></td>
				<td><span></span></td>
				<td>2016-10-27</td>
			</tr>
			<tr>
				<td>251</td>
				<td>기타</td>
				<td><a href="#">서울시 교육청 산하 도서관에 대한 질문입니다.</a><em>답변완료</em></td>
				<td><span></span></td>
				<td>2016-10-26</td>
			</tr>
			<tr>
				<td>250</td>
				<td>기타</td>
				<td><a href="#">서울도서관에 대해 알고 싶은 점이 있습니다.</a><em>답변완료</em></td>
				<td><span></span></td>
				<td>2016-10-25</td>
			</tr>
			</tbody>		
			</table>
			
			<ul class="paging cf">
				<li class="on"><a href="#">&lt;&lt;</a></li>
				<li class="on"><a href="#">&lt;</a></li>
				<li class="first"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">6</a></li>
				<li><a href="#">7</a></li>
				<li><a href="#">8</a></li>
				<li><a href="#">9</a></li>
				<li><a href="#">10</a></li>
				<li class="on"><a href="#">&gt;</a></li>
				<li class="on"><a href="#">&gt;&gt;</a></li>
			</ul>
			
			</div>
		
		
		
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






















 
