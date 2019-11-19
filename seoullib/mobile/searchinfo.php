<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="utf-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>최진아 포트폴리오</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<meta name="description" content="웹포트폴리오 홍길동">
<meta name="keywords"    content="웹 퍼블리셔, HTML5, CSS3, jQuery ,웹 디자인">
<meta name="author"      content="최진아">
<link rel="shortcut icon" href="img/favicon_1.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">  
<link rel="stylesheet" href="fa/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/import.css" type="text/css"/> 
<link rel="stylesheet" href="css/subimport.css" type="text/css"/>  
</head>
   
<body> 
  <? include("include/header.php")  ?>
	
<div id="subTop">
  <a href="#" class="prev">&lt;</a>
  <h2>도서관 소장자료 검색</h2>
</div>
	
<div id="subPage3">
	<h3>서울 도서관 자료 통합검색</h3>
	<em>입력한 검색 조건을 모두 만족하는 결과가 검색됨</em>
	
	<form action="" method="get" accept-charset="utf-8">
	  <fieldset>
		<legend>도서관 자료 통합 검색</legend>
		<table>
			<caption>서울도서관 자료 통합 검색 레이아웃</caption>
			
			<colgroup>
			<col width="20%">
			<col width="80%">
			</colgroup>
			
			<tr>
				<th>제목:</th>
				<td><label for="titleSearch"></label>
					<input type="text" id="titleSearch" class="data-search"/>
				</td>
			</tr>
			<tr>
				<th>저자명:</th>
				<td><label for="nameSearch"></label>
					<input type="text" id="nameSearch" class="data-search"/>
				</td>
			</tr>
			<tr>
				<th>발행처:</th>
				<td><label for="birthSpot"></label>
					<input type="text" id="birthSpot" class="data-search"/>
				</td>
			</tr>
			<tr>
				<th>키워드:</th>
				<td><label for="keywordSearch"></label>
					<input type="text" id="keywordSearch" class="data-search"/>
				</td>
			</tr>
			<tr>
				<th>발행년도:</th>
				<td>
					<label for="years1"></label>
					<select id="years1" class="years">
						<option>start</option>
						<option>2001년</option>
						<option>2002년</option>
						<option>2003년</option>
						<option>2004년</option>
						<option>2005년</option>
						<option>2006년</option>
						<option>2007년</option>
						<option>2008년</option>
						<option>2009년</option>
						<option>2010년</option>
						<option>2011년</option>
						<option>2012년</option>
						<option>2013년</option>
						<option>2014년</option>
						<option>2015년</option>
						<option>2016년</option>
					</select>
					<span>-</span>
					<label for="years2"></label>
					<select id="years2" class="years">
						<option>end</option>
						<option>2001년</option>
						<option>2002년</option>
						<option>2003년</option>
						<option>2004년</option>
						<option>2005년</option>
						<option>2006년</option>
						<option>2007년</option>
						<option>2008년</option>
						<option>2009년</option>
						<option>2010년</option>
						<option>2011년</option>
						<option>2012년</option>
						<option>2013년</option>
						<option>2014년</option>
						<option>2015년</option>
						<option>2016년</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>정렬:</th>
				<td><label for="line"></label>
					<input type="text" id="line" class="data-search"/>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label for="submit"></label>
					<input type="submit" value="검색" id="submit"/>
				</td>
			</tr>
			
		</table>
		 
	  </fieldset>
		  
	</form>
		
		<h3>서울 도서관 자료 브라우징</h3>
		<ul class="cf">
			<li><a href="#">단행본</a></li>
			<li><a href="#">연속<br/>간행물</a></li>
			<li><a href="#">학위논문</a></li>
			<li><a href="#">비도서</a></li>
			<li><a href="#">전자책</a></li>
			<li><a href="#">원문</a></li>
			<li><a href="#">동영상</a></li>
			<li><a href="#">서울시<br/>간행물</a></li>
		</ul>
</div>
	

 <? include("include/footer.php")  ?>




  <script type="text/javascript" src="js/jquery.js"> </script>
  <script type="text/javascript" src="js/jquery-ui.min.js"> </script> 
  <script type="text/javascript" src="js/common.js"> </script>
  <script type="text/javascript" src="js/main.js"> </script>

 </body>
</html>






















 
