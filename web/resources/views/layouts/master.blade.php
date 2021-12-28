<!DOCTYPE html>
<html lang="ko">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197817308-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-197817308-1');
	</script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5NQH5SN');</script>
	<!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta name="keywords" content="하우올리, hauoli">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="naver-site-verification" content="99434935bac5375e8f4d89c4c41488a9ac1243bd" />
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/layouts.css?210317') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/common.css?210901') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	@yield('head')
	<title>@yield('title')</title>
</head>
<body>
	<main id="main">
		<button onclick="$('html, body').animate({scrollTop: 0}, 300);" id="top-button"></button>
		<div id="loading"><span class="spinner"></span></div>
		<aside class="top-banner-wrap">
			<div id="top-banner" class="top-banner wrap">
				<a href="/visit"><span class="desktop">2억으로 20억 서울 건물주 되기, </span><span style="color:#ff703e;">신축개발 무료상담 기회</span> (~{{ date("n/t") }})</a>
				<button class="close-button desktop" type="button" aria-label="닫기" onclick="this.parentElement.parentElement.classList.add('banner-close');sessionStorage.setItem('tb', 'close');"></button>
			</div>
		</aside>
		<aside id="bottom-banner" class="bottom-banner-wrap">
			<div class="bottom-banner wrap">
				<div class="sp-6 bb-text">중소형 부동산 개발/시공<span class="desktop"> 전문가에게 </span><span class="mobile"><br></span>맞춤 상담을 받아보세요!</div>
				<div class="sp-4 sp-right bb-link"><a href="/visit">무료 상담 신청 ></a></div>
				<button class="close-button desktop" type="button" aria-label="닫기" onclick="this.parentElement.parentElement.classList.add('banner-close');sessionStorage.setItem('bb', 'close');"></button>
			</div>
		</aside>
		<nav id="gnb" class="wrap desktop">
			<ul class="gnb-list">
				<li class="gnb-item" id="gnb-company">
					<a class="{{ $now_company ?? ''}}" href="/company">회사소개</a>
					<ul class="gnb-sub">
						<li><a href="/company">회사소개</a></li>
						<li><a href="/business">사업소개</a></li>
					</ul>
				</li>
				<li class="gnb-item" id="gnb-brand">
					<a class="{{ $now_brand ?? ''}}" href="/brand">브랜드</a>
					<ul class="gnb-sub">
						<li><a href="/brand/hauoli">하우올리</a></li>
						<li><a href="/brand/trapiche">트라피체</a></li>
					</ul>
				</li>
				<li class="gnb-item"><a class="{{ $now_onestop ?? ''}}" href="/onestop">원스톱PM</a></li>
				<li class="gnb-item"><a class="{{ $now_assure ?? ''}}" href="/build">안심건축</a></li>
				<li class="gnb-item"><a class="{{ $now_project ?? ''}}" href="/project">프로젝트</a></li>
				<li class="gnb-item"><a href="https://blog.naver.com/stayhauoli" target="_blank">블로그</a></li>
			</ul>
			<div class="logo">
				<a href="/">
					<img src="/img/hauoli_logo.png" alt="hauoli_logo">
				</a>
			</div>
		</nav>
		<div id="gnm" class="mobile gnm-navbar">
			<button id="gnm-open-button" onclick="slide.open();">
				<div class="navbar-wrap">
					<div class="navbar"></div>
				</div>
			</button>
			<div class="logo-m">
				<a href="/">
					<img src="/img/hauoli_logo.png" alt="hauoli_logo">
				</a>
			</div>
		</div>
		<div id="gnm-slide" class="mobile">
			<button id="gnm-close-button" class="close-button" onclick="slide.close();"></button>
			<div class="gnm-menu wrap">
				<ul>
					<li>회사소개
						<ul class="gnm-menu-sub">
							<li><a href="/company">회사소개</a></li>
							<li><a href="/business">사업소개</a></li>
						</ul>
					</li>
					<li><a href="/onestop">원스톱PM</a></li>
					<li><a href="/build">안심건축</a></li>
					<li><a href="/project">프로젝트</a></li>
					<li><a href="https://blog.naver.com/stayhauoli" target="_blank">블로그</a></li>
				</ul>
			</div>
			<div class="gnm-footer wrap">
				<p class="gnm-footer-call">02-6925-1260</p>
				<p>하우올리 고객센터</p>
				<p class="gnm-footer-time">AM 10:00 ~ PM 06:00</p>
				<p class="gnm-footer-time">(Break 12:30 ~ 1:30)</p>
				<p class="gnm-footer-week">휴무 - 토요일, 일요일, 공휴일</p>
			</div>
		</div>
		@yield('content')
		<div class="agreement">
			<button class="close-button" onclick="overlay.close($('.agreement'));"></button>
			<h2>개인정보처리방침</h2>
			<div class="agreement-cont">
<p>‘주식회사 하우올리’는 이용자의 개인정보를 중시하며, “정보통신망 이용촉진 및 정보보호 등에 관한 법률”, “개인정보보호법”, 통신비밀보호법 등 정보통신서비스제공자가 준수하여야 할 관련 법령상의 개인정보보호 규정을 준수하며, 관련 법령에 의거한 개인정보처리방침을 정하여 이용자 권익보호에 최선을 다하고 있습니다.</p>
<br><br>
<p>‘주식회사 하우올리’는 이용자의 개인정보를 수집, 이용, 제공하는 경우 반드시 사전에 이용자에게 해당 내용을 알리고 동의절차를 거치며, 이용자가 동의하지 않을 경우에는 이용자의 개인정보를 수집, 이용, 제공하지 않습니다. 단, 동의를 거부하는 경우 서비스의 전부 또는 일부 이용이 제한될 수 있습니다.</p>

<h4>1. 개인정보의 수집 목적</h4>
<p>주식회사 하우올리 (‘http://www.hauoli.co.kr’ 이하 ‘하우올리’) 는 다음의 목적을 위하여 개인정보를 처리하고 있으며, 다음의 목적 이외의 용도로는 이용하지 않습니다.</p>

<ol>
	<li>1. 서비스 제공에 관한 이행 :  하우올리에서 신청한 서비스에 대한 접수 및 응대</li>
	<li>2. 회원관리 : 회원제 서비스 이용 및 본인확인, 개인식별, 불량회원의 부정이용 방지와 비인가 사용방지, 가입의사 확인, 연령확인, 불만처리 등 민원처리, 고지사항 전달</li>
	<li>3. 신규서비스 개발 및 마케팅, 광고에의 활용 : 신규 서비스 개발과 이벤트 행사에 따른 정보전달 및 맞춤서비스 제공, 인구통계학적 특성에 따른 서비스 제공 및 광고게재, 접속빈도파악, 회원의 서비스 이용에 대한 통계, 이벤트 등 광고성 정보 전달</li>
	<li>4. 개인정보의 수집 항목
		<ol>
			<li>a. 이용자 식별정보 : 아이디, 비밀번호, 휴대폰번호, 성명, 생년월일, 성별, 이메일</li>
			<li>b. 결제 정보 : 신용카드 결제정보, 은행계좌 정보, 휴대전화 결제 정보, 상품권 정보, 결제기록</li>
			<li>c. 제품배송 및 서비스 이행 : 배송지주소, 휴대폰번호, 유선전화번호</li>
			<li>d. 제품 문의 및 이벤트 등 안내 : 이메일수신여부, DM수신여부, SMS수신여부, TM수신여부</li>
			<li>e. 서비스 이용 및 부정 이용방지 : 서비스이용기록, 접속로그, 접속IP정보</li>
		</ol>
	</li>
</ol>
<h4>5. 개인정보의 수집 방법</h4>
<p>주식회사 하우올리 (‘http://www.hauoli.co.kr’) 는 다음의 방법으로 개인정보를 수집합니다.</p>
<ol>
	<li>a. 웹사이트</li>
	<li>b. 신청/상담 양식</li>
</ol>

<h4>6. 개인정보의 처리 및 보유 기간</h4>
<p>‘하우올리’는 이용자의 개인정보를 이용자에게 서비스를 제공하는 기간 동안 보유하며, 서비스 제공을 위해서만 이용합니다. 아래와 같이 관계법령에 의하여 보존할 필요가 있는 경우에는 관계법령에 따라 일정한 기간 동안 개인정보를 보관합니다.</p>
<ol>
	<li>a. 서비스이용기록, 접속로그, 접속IP정보, 쿠키 : 3개월</li>
	<li>b. 계약 또는 청약철회에 관한 기록 : 5년</li>
	<li>c. 대금결제 및 재화 등의 공급에 관한 기록 : 5년</li>
	<li>d. 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년</li>
</ol>

<h4>7. 개인정보의 파기</h4>
<p>‘하우올리’’는 원칙적으로 이용자의 개인정보를 서비스와 무관한 제3자에게 제공하거나 공개하지 않으며, 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다.</p>

<ol>
	<li>a. 파기절차 : 회사는 고객님께서 제공하신 모든 정보를 고객님께서 서비스를 제공받으시는 동안 보유하며 서비스 제공을 위해서만 이용하게 됩니다. 또한, 고객님께서 회원탈퇴를 요청한 경우 고객님의 개인정보는 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라 일정 기간 저장된 후, 재생 불가능한 방법으로 저장장치에서 완전히 삭제되며, 어떠한 방법으로도 열람 또는 이용할 수 없도록 처리됩니다.</li>
	<li>b. 파기방법 : 종이에 출력된 정보는 파쇄하거나 소각을 통하여 파기하며, 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.</li>
</ol>

<h4>8. 이용자 및 법정대리인 권리와 그 행사방법</h4>
<ol>
	<li>a. 이용자는 개인정보주체로서 다음과 같은 권리를 행사할 수 있습니다. 이용자는 언제든지 등록되어 있는 자신의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니다. 이용자의 개인정보 조회/수정을 위해서는 ‘개인정보변경’(또는 ‘회원정보관리’ 등)을 통하여 가능하며, 가입해지(동의철회)를 위해서는 “회원탈퇴”를 클릭하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다. 또는 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체 없이 조치하겠습니다.</li>
	<li>b. 이용자가 개인정보의 오류에 대한 정정을 요청한 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체 없이 통지하여 정정이 이루어지도록 하겠습니다.</li>
	<li>c. 이용자 요청에 의해 해지 또는 삭제된 개인정보는 “3. 개인정보의 보유 및 이용기간”에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.</li>
	<li>d. ‘하우올리’ 웹사이트는 14세 미만의 이용자의 개인 정보를 취급하지 않고 있습니다.</li>
	<li>e. 쿠키(Cookie)의 운영
		<ul>
			<li>- ‘하우올리’ 웹사이트는 Cookie 방식을 사용하고 있습니다. 공공장소나 타인이 사용할 수 있는 PC를 사용하실 경우에는 로그인 후 서비스 이용이 끝나시면 반드시 로그아웃을 해주시기 바랍니다.</li>
			<li>- 쿠키(cookie)는 HTTP서버가 사용자 브라우저에게 보내는 작은 정보데이터로서 인터넷 웹 페이지와 사용자의 컴퓨터 사이에서 정당한 사용자임을 확인합니다.</li>
			<li>- ‘하우올리’ 웹사이트는 고객님께 적합하고 보다 유용한 서비스를 제공하기 위해서 쿠키를 이용하여 ID에 관한 정보를 찾아 냅니다. 이러한 쿠키정보를 바탕으로 회원님께 보다 유용하고 편리한 맞는 서비스를 제공해 드립니다.</li>
			<li>- 사용자는 쿠키에 대해서 사용여부를 선택할 수 있습니다. 웹 브라우저의 설정을 변경시켜 모든 쿠키를 허용할 수 있고 쿠키가 저장되지 않게 확인하거나 모든 쿠키의 저장을 거부할 경우에는 일부 서비스를 이용할 수 없습니다.</li>
			<li>- 사용자는 쿠키에 대해서 사용여부를 선택할 수 있습니다. 웹 브라우저의 설정을 변경시켜 모든 쿠키를 허용할 수 있고 쿠키가 저장되지 않게 확인하거나 모든 쿠키의 저장을 거부할 경우에는 ‘로그인’이 필요한 일부 서비스를 이용할 수 없습니다.</li>
			<li>- 쿠키 설치 허용 여부를 지정하는 방법(Internet Explorer의 경우)은 다음과 같습니다.
				<ol>
					<li>1) Internet Explorer의 경우<br>
 [도구] 메뉴에서 [인터넷 옵션]을 선택합니다. → [개인정보 탭]을 클릭합니다. → [개인정보취급 수준]을 설정하시면 됩니다.</li>
					<li>2) Chrome의 경우<br>
웹 브라우저 우측 상단의 아이콘을 선택합니다. → [설정]을 선택합니다. → 화면 하단의 [고급 설정 표시]를 선택합니다. → 개인정보 섹션의 [콘텐츠 설정]- 쿠키 섹션에서 직접 설정합니다.</li>
				</ol>
			</li>
		</ul>
	</li>
</ol>

<h4>9. 개인정보관리책임자 및 담당자</h4>
<p>고객 개인정보 관리책임자 및 담당자는 다음과 같으며 개인정보 관련 문의사항에 신속하고 성실하게 답변해드리겠습니다.</p>
<br>
<ul>
	<li>[개인정보 관리 책임자]</li>
	<li>- 성명: 좌종호</li>
	<li>- 소속부서 : 제품개발팀</li>
	<li>- 전화 : 02 6925 1260</li>
	<li>- 이메일 주소 : hello@hauoli.kr</li>
</ul>
<br>
<ul>
	<li>[개인정보 관리 담당자]</li>
	<li>- 성명 : 조샛별</li>
	<li>- 소속부서 : 제품개발팀</li>
	<li>- 전화 : 02 6925 1260</li>
	<li>- 이메일 주소 : hello@hauoli.kr</li>
</ul>
<br>
<p>기타 개인정보침해에 대한 신고 또는 상담이 필요하신 경우에는 아래 기관으로 문의하시기 바랍니다.</p>
<ol>
	<li>a. 개인정보침해신고센터 전화 : (국번없이)118 URL : http://www.118.or.kr</li>
	<li>b. 정보보호마크인증위원회 전화 : 02-550-9531~2 URL : http://www.eprivacy.or.kr</li>
	<li>c. 대검찰청 첨단범죄수사센터 전화 : 02-3480-2000 URL : http://www.spo.go.kr</li>
	<li>d. 경찰청 사이버테러대응센터 전화 : 02-393-9112 URL : http://www.ctrc.go.kr</li>
</ol>

<h4>10. 개인정보 처리방침 변경</h4>
<p>법령 및 정책 또는 보안기술의 변경에 따라 내용의 추가. 삭제 및 수정이 있을 시에는 변경사항의 시행일의 최소 7일 전부터 홈페이지 공지를 통해 고지할 것 입니다.</p>
<ul>
	<li>- 개인정보 처리방침 변경공고일자 : 2020. 12. 01.</li>
	<li>- 개인정보 처리방침 시행일자 : 2020. 12. 01.</li>
</ul>
			</div>
		</div>
		<div class="privacy">
			<button class="close-button" onclick="overlay.close($('.privacy'));"></button>
			<h2>이용약관</h2>
			<div class="privacy-cont">
<h3>하우올리 홈페이지 이용약관</h3>
<h4>[제1조] 목적</h4>
<p>이 약관은 주식회사 하우올리(이하 ‘회사’라고 한다)가 온라인으로 제공하는 서비스 www.hauoli.co.kr (이하 ‘웹사이트’라고 합니다) 관련하여 ‘회사’와 ‘이용자’ 간의 권리와 의무, 책임사항 등을 규정함을 목적으로 합니다.</p>

<h4>[제2조] 용어의 정의</h4>
<p>이 약관에서 사용하는 용어의 정의는 다음과 같습니다.</p>
<ol>
	<li>1. ‘회사’ 라 함은 주식회사 하우올리의 서비스 및 관련 콘텐츠를 제공하는 자를 말합니다.</li>
	<li>2. ‘이용자’라 함은 ‘웹사이트’가 제공하는 서비스를 이용하는 회원 및 비회원을 말합니다.</li>
	<li>3. ‘회원’이라 함은 ‘웹사이트’와 이용계약을 체결하고 ‘이용자’ 아이디(ID)를 부여 받은 ‘이용자’로서 ‘웹사이트’의 정보를 지속적으로 제공받으며 ‘웹사이트’이 제공하는 서비스를 지속적으로 이용할 수 있는 자를 말합니다.</li>
	<li>4. ‘비회원’이라 함은 ‘회원’이 아니면서 ‘웹사이트’이 제공하는 서비스를 이용하는 자를 말합니다.</li>
	<li>5. ‘콘텐츠’란 회사 또는 ‘이용자’가 ‘웹사이트’ 내에 게재한 영상 텍스트, 이미지 등의 제작물을 말합니다.</li>
</ol>
<h4>[제3조] 신원정보 등의 제공</h4>
<p>‘회사’는 이 약관의 내용, 상호, 대표자 성명, 영업소 소재지 주소 (소비자의 불만을 처리할 수 있는 곳의 주소를 포함), 전화번호, 모사전송번호, 전자우편주소, 사업자등록번호, 통신판매업 신고번호 및 개인정보관리책임자 등을 이용자가 쉽게 알 수 있도록 ‘웹사이트’ 초기화면에 게시합니다. 다만, 약관은 이용자가 연결화면을 통하여 볼 수 있도록 할 수 있습니다.</p>
<h4>[제4조] 약관 등의 명시와 설명 및 개정</h4>
<p>‘회사’는 이 약관의 내용과 상호 및 대표자 성명, 영업소 소재지 주소, 개인정보 관리 책임자 등을 이용자가 쉽게 알 수 있도록 ‘웹사이트’의 초기 화면에서 볼 수 있도록 합니다.</p>
<h4>[제5조] 약관의 해석</h4>
<p>이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 온라인 디지털 콘텐츠 산업 발전법, 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제에 관한 법률, 정보통신부장관이 정하는 디지털 콘텐츠 이용자보호지침, 기타 관계법령 또는 상관례에 따릅니다.</p>
<h4>[제6조] ‘콘텐츠’의 게시</h4>
<p>‘회사’는 다음 사항을 해당 “콘텐츠”의 이용 초기화면이나 그 포장에 “이용자”가 알기 쉽게 표시합니다.</p>
<ol>
	<li>1. “콘텐츠”의 명칭 또는 제호</li>
	<li>2. “콘텐츠”의 제작 및 표시 연월일</li>
	<li>3. “콘텐츠”의 내용, 이용방법, 이용료 기타 이용조건</li>
</ol>
<h4>[제7조] 콘텐츠서비스의 제공 및 중단</h4>
<ol>
	<li>1. 콘텐츠서비스는 연중무휴, 1일 24시간 제공함을 원칙으로 합니다.</li>
	<li>2. ‘회사’는 컴퓨터 등 정보통신설비의 보수점검, 교체 및 고장, 통신두절 또는 운영상 상당한 이유가 있는 경우 콘텐츠서비스의 제공을 일시적으로 중단할 수 있습니다. 이 경우 ‘회사’는 ‘이용자’에게 통지해야 하며, 사전에 통지할 수 없는 부득이한 사유가 있는 경우 사후에 통지할 수 있습니다.</li>
	<li>3. ‘회사’는 상당한 이유 없이 콘텐츠서비스의 제공이 일시적으로 중단됨으로 인하여 ‘이용자’가 입은 손해에 대하여 배상합니다. 다만, ‘회사’가 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.</li>
	<li>4. ‘회사’는 콘텐츠서비스의 제공에 필요한 경우 정기점검을 실시할 수 있으며, 정기점검시간은 서비스 제공화면에 공지한 바에 따릅니다.</li>
</ol>
<h4>[제8조] 저작권의 귀속 및 이용제한</h4>
<ol>
	<li>1. ‘회사’가 작성한 저작물에 대한 저작권 기타 지적재산권은 ‘회사’에 귀속합니다.</li>
	<li>2. ‘이용자’는 ‘웹사이트’를 이용함으로써 얻은 정보 중 ‘회사’에게 지적재산권이 귀속된 정보를 ‘회사’의 사전 승낙 없이 제3자에게 이용하게 하여서는 안됩니다.</li>
	<li>3. ‘회사’은 약정에 따라 ‘이용자’에게 귀속된 저작권을 사용하는 경우 당해 ‘이용자’에게 통보하여야 합니다.</li>
</ol>
<h4>[제9조] 콘텐츠 하자 등에 의한 이용자 피해보상</h4>
<p>‘회사’는 콘텐츠 하자 등에 의한 이용자 피해보상의 기준·범위·방법 및 절차에 관한 사항을 디지털 콘텐츠 이용자 보호지침에 따라 처리합니다.</p>
<h4>[제10조] &lt;1:1 상담서비스&gt; 신청 관련</h4>
<ol>
	<li>1. ‘이용자’는 ‘회사’가 제공하는 다음 또는 이와 유사한 절차에 의하여 &lt;1:1 상담서비스&gt; 신청을 합니다. ‘회사’는 서비스 신청 전에 각 호의 사항에 관하여 ‘이용자’가 정확하게 이해하고 실수 또는 착오 없이 신청할 수 있도록 정보를 제공합니다.
		<ol>
			<li>a.  &lt;1:1 상담서비스&gt; 일자 및 시간 선택</li>
			<li>b. 성명, 주소, 전화번호(또는 이동전화번호), 전자우편주소 등의 입력</li>
			<li>c.  &lt;개인정보이용 동의&gt;에 대한 약관내용</li>
			<li>d.  &lt;개인정보이용 동의&gt; 약관에 동의하거나 거부하는 표시 (예, 마우스 클릭)</li>
			<li>e.  &lt;1:1 상담서비스&gt; 신청에 대한 ‘이용자’의 최종 확인 및 동의 버튼</li>
		</ol>
	</li>
</ol>
<h4>[제11조] &lt;1:1 상담서비스&gt; 신청 유보 관련</h4>
<ol>
	<li>1. ‘회사’는 ‘이용자’의  &lt;1:1 상담서비스&gt; 신청이 다음 각 호에 해당하는 경우에는 승낙하지 않거나 승낙을 유보할 수 있습니다.
		<ol>
			<li>a. 실명이 아니거나 타인의 명의를 이용한 경우</li>
			<li>b. 허위의 정보를 기재하거나, ‘회사’가 제시하는 내용을 기재하지 않은 경우</li>
			<li>c. 미성년자가 신청하는 경우</li>
			<li>d. 서비스 관련 설비의 여유가 없거나, 기술상 또는 업무상 문제가 있는 경우</li>
		</ol>
	</li>
	<li>2. ‘회사’의 승낙이 수신 확인 통지 형태로 ‘이용자’에게 도달한 시점에  &lt;1:1 상담서비스&gt; 신청이 성립한 것으로 봅니다.</li>
</ol>
<h4>[제12조]  &lt;1:1 상담서비스&gt; 수신확인 통지, 변경 및 취소</h4>
<ol>
	<li>1 ‘회사’는 ‘이용자’의  &lt;1:1 상담서비스&gt; 신청이 있는 경우 ‘이용자’에게 수신 확인통지를 합니다.</li>
	<li>2. 수신 확인통지를 받은 ‘이용자’는 의사표시의 불일치 등이 있는 경우에는 수신 확인통지를 받은 후 즉시 서비스 신청 변경 및 취소를 요청할 수 있고, ‘회사’는 서비스 제공 전에 ‘이용자’의 요청이 있는 경우에는 그 요청에 따라 처리하여야 합니다.</li>
</ol>
<h4>[제13조] 미성년자 이용계약에 관한 특칙</h4>
<p>‘회사’는 만 20세 미만의 미성년이용자가 유료서비스를 이용하고자 하는 경우에 부모 등 법정 대리인의 동의를 얻거나, 서비스 신청 후 추인을 얻지 않으면 미성년자 본인 또는 법정대리인이 그 서비스 신청을 취소할 수 있다는 내용을 서비스 신청 전에 고지하는 조치를 취합니다.</p>
<h4>[제14조] 면책조항</h4>
<ol>
	<li>1. ‘회사’는 천재지변 또는 이에 준하는 불가항력, 정보통신설비의 보수점검, 교체 또는 고장, 통신의 두절 등으로 인하여 일시적 또는 종국적으로 서비스를 제공할 수 없는 경우, 서비스 제공에 관한 책임이 면제됩니다. 이 경우 ‘회사’는 ‘회사’가 제공하는 ‘웹사이트’ 화면에 게시하거나 기타의 방법으로 ‘이용자’들에게 통지합니다.</li>
	<li>2. ‘회사’는 인터넷 이용자 또는 회원의 귀책사유로 인한 서비스 이용의 장애에 대하여 책임을 지지 않습니다.</li>
</ol>
<h4>[제15조] 준거법 및 관할법원</h4>
<p>이 개별약관과 ‘회사’와 ‘이용자’ 간의 서비스 이용계약, ‘이용자’ 상호 간의 용역거래에 대해서는 대한민국 법령이 적용되며, 이 개별약관, ‘회사’와 ‘이용자’ 간의 서비스 이용계약에 관한 해석과 관할법원에 대하여는 대한민국 법령에 따릅니다.</p>
<ul>
	<li>하우올리 홈페이지 이용약관 버전번호 : 1.0</li>
	<li>현재 이용약관 공고일자 : 2020년 12월 1일</li>
	<li>현재 이용약관 공고일자 : 2020년 12월 1일</li>	
</ul>
			</div>
		</div>

		<footer id="footer">
			<div class="wrap">
				<ul class="footer-link">
					<li><a href="javascript:void(0);" onclick="overlay.open($('.agreement'));">개인정보 취급방침</a></li>
					<li><a href="javascript:void(0);" onclick="overlay.open($('.privacy'));">이용약관</a></li>
					<li><a href="https://recruit.hauoli.co.kr" target="_blank">채용정보</a></li>
				</ul>
				<ul class="footer-sns">
<!-- 					<li><a href="https://www.facebook.com/stayhauoli" target="_blank"><img src="/img/ic_fb.png" alt="facebook"></a></li> -->
					<li><a href="https://blog.naver.com/stayhauoli" target="_blank"><img src="/img/ic_blog.png" alt="naver blog"></a></li>
<!-- 					<li><a href="https://www.instagram.com/stayhauoli" target="_blank"><img src="/img/ic_insta.png" alt="instagram"></a></li> -->
					<li><a href="https://www.youtube.com/channel/UCZ7mFIguIo9jS6xEUslFXuA" target="_blank"><img src="/img/ic_youtube.png" alt="youtube"></a></li>
				</ul>
				<div class="footer-desc">
					<p class="footer-call">02-6925-1260</p>
					<p>하우올리 고객센터</p>
					<p>AM 10:00 ~ PM 06:00 (Break 12:30 ~ 1:30)</p>
					<p>휴무 - 토요일, 일요일, 공휴일</p>
				</div>
				<hr class="footer-hr">
				<div class="footer-desc2">
					<p>(주)하우올리 대표이사 : 장재영   |   개인정보책임관리자 : 좌종호   |    (06192) 서울특별시 강남구 테헤란로 410, 1502호 (대치동, 금강타워) hello@hauoli.kr</p>
					<p>사업자등록번호 : 672-87-01601</p>
					<p>copyright ⓒ 2020 hauoli. All rights reserved.</p>
				</div>
			</div>
		</footer>
	</main>
	<script src="{{ asset('/js/common.js?0329') }}"></script>
</body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NQH5SN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</html>