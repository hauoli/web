@extends('layouts.master')

@section('head')
	<meta name="description" content="하우올리는 중소형 부동산 전문 종합 부동산 회사 입니다. 우리는 IT기술을 활용해 중소형 부동산 시장을 개선하고자 합니다.">
	<meta name="keywords" content="하우올리, hauoli, 중소형 부동산, 부동산 개발">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css?0805') }}">
	<!-- <link rel="stylesheet" href="/css/swiper-bundle.min.css"> -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="mobile-web-app-capable" content="no">
	<meta name="apple-mobile-web-app-capable" content="no">
@endsection

@section('title')
	하우올리
@endsection

@section('content')
	<section class="section-1">
		<ul class="wrap">
			<li><!-- <div>하우올리<span class="font-light">는</span><br>중소형 부동산 전문<br>종합 부동산 회사<span class="font-light">입니다</span></div> -->
				<span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "하우올리는 중소형 부동산 전문 종합 부동산 회사 입니다.", "부동산 개발의 A부터 Z까지 원스톱 솔루션을 제공합니다.", "하우올리는 중소형 부동산 개발사업의 든든한 동반자 입니다.", "하우올리를 만나면 합리적인 비용으로 내실있는 건축이 가능합니다.", "우리는 IT기술을 활용해 중소형 부동산 시장을 개선하고자 합니다." ]'></span><span class="blinking-cursor">|</span>
			</li>
		</ul>
		<a class="section-1-link" href="/company">브랜딩 스토리 보기></a>
		<video autoplay muted loop id="sec-1-video">
			<source src="" type="video/mp4">
<!-- 			<source src="/video/indexm.mp4" type="video/mp4"> -->
		</video>
		<div class="dim"></div>
	</section>
	<section class="section-2 section-type-1">
		<div class="wrap">
			<a href="/onestop">
				<img class="desktop" src="/img/main_onestop01.png" alt="중소형 부동산개발 원스톱 PM">
				<div class="mobile dc" style="max-width: 327px;"><img src="/img/main_onestop01m.png" alt="중소형 부동산개발 원스톱 PM"></div>
			</a>
		</div>
	</section>
	<section class="section-3 section-type-1">
		<div class="wrap">
			<a href="/build">
				<img class="desktop" src="/img/main_assure01.png" alt="중소형 부동산 전문 안심건축 서비스">
				<div class="mobile dc" style="max-width: 269px;"><img src="/img/main_assure01m.png" alt="중소형 부동산 전문 안심건축 서비스"></div>
			</a>
		</div>
	</section>
	<section class="section-4 section-type-2">
		<div class="wrap">
			<div class="sec-type-2-tit">
				<h2>하우올리가 진행한 프로젝트</h2>
				<a href="/project">전체보기</a>
			</div>
			<div class="prj-wrap">
				<div class="prj-item">
					<a href="/project/sdbB"><img src="/img/t_sdbB.png" alt="새절A"></a>
					<div class="prj-desc">
						<span class="prj-age">2021년</span>
						<h4><a href="/project/sdbB">서울 관악구 신림동</a></h4>
						<span class="font-light">하우올리 신대방B</span>
						<a class="prj-link" href="/project/sdbB">자세히 보기 <b>&rarr;</b></a>
					</div>
				</div>
				<div class="prj-item">
					<a href="/project/ysnA"><img src="/img/t_ysnA.png?0806" alt="연신내A"></a>
					<div class="prj-desc">
						<span class="prj-age">2021년</span>
						<h4><a href="/project/ysnA">서울 은평구 갈현동</a></h4>
						<span class="font-light">원스톱PM 연신내A</span>
						<a class="prj-link" href="/project/ysnA">자세히 보기 <b>&rarr;</b></a>
					</div>
				</div>
			</div>
			<div class="prj-wrap">
				<div class="prj-item">
					<a href="/project/gusanA"><img src="/img/t_gusanA.png" alt="구산A"></a>
					<div class="prj-desc">
						<span class="prj-age">2020년</span>
						<h4><a href="/project/gusanA">서울 은평구 구산동</a></h4>
						<span class="font-light">원스톱PM 구산A</span>
						<a class="prj-link" href="/project/gusanA">자세히 보기 <b>&rarr;</b></a>
					</div>
				</div>
				<div class="prj-item">
					<a href="/project/hwagokA"><img src="/img/t_hwagokA.png" alt="화곡A"></a>
					<div class="prj-desc">
						<span class="prj-age">2020년</span>
						<h4><a href="/project/hwagokA">서울 강서구 화곡동</a></h4>
						<span class="font-light">원스톱PM 화곡A</span>
						<a class="prj-link" href="/project/hwagokA">자세히 보기 <b>&rarr;</b></a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--블로그
	<section class="section-5 section-type-2">
		<div class="wrap">
			<h2>하우올리가 진행하고 있는 프로젝트<a href="/blog">전체보기</a></h2>
			<div class="blog-container swiper-container">
				<div class="blog-wrap swiper-wrapper">
					<div class="blog-item swiper-slide">
						<img src="http://placehold.it/350x350" alt="350x350">
					</div>
					<div class="blog-item swiper-slide">
						<img src="http://placehold.it/350x350" alt="350x350">
					</div>
					<div class="blog-item swiper-slide">
						<img src="http://placehold.it/350x350" alt="350x350">
					</div>
					<div class="blog-item swiper-slide">
						<img src="http://placehold.it/350x350" alt="350x350">
					</div>
					<div class="blog-item swiper-slide">
						<img src="http://placehold.it/350x350" alt="350x350">
					</div>
				</div>
				<div class="blog-scrollbar swiper-scrollbar"></div>
			</div>
		</div>
	</section>
-->
	<section class="section-6 section-type-2" id="main-section-6">
		<div class="wrap">
			<div class="sec-type-2-tit">
				<h2>부동산 신축 개발을 고민하시나요?</h2>
			</div>
			<p class="visit-desc">
				중소형 부동산 개발 및 건축에 대해<br>궁금한 점이 있으시면 부담없이 상담 신청 주세요.
			</p>
			<div class="visit-btn-wrap">
<!-- 				<button type="button" class="visit-btn desktop" onclick="overlay.open($('.visit-wrap'));">방문상담 신청하기</button>
				<button type="button" class="visit-btn mobile" onclick="overlay.open($('.visit-m-wrap'));">방문상담 신청하기</button> -->
				<button type="button" class="visit-btn desktop" onclick="location.href='/visit'">방문상담 신청하기</button>
				<button type="button" class="visit-btn mobile" onclick="location.href='/visit'">방문상담 신청하기</button>
			</div>
		</div>
	</section>
	<section class="section-7">
		<div class="wrap">
			<h4>중소형 부동산 개발 및 건축 관련<br>접하기 힘든 정보들을 받아보세요.</h4>
			<div class="mail-wrap">
				<form name="subscribe-form">
					<input type="hidden" name="mail-type" value="subscribe">
					<input name="subs-email" id="mail-input" type="text" placeholder="메일주소@example.kr">
					<button type="button" id="mail-btn" onclick="subscribe();">뉴스레터 구독하기</button>
				</form>
			</div>
		</div>
	</section>
<!-- 	<script src="/js/swiper-bundle.min.js"></script>
	<script type="text/javascript">
	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 3,
		spaceBetween: 75,
		scrollbar: {
			el: '.swiper-scrollbar',
			draggable: true,
			snapOnRelease: false,
			dragSize: 400,
		},
	});
	</script> -->
	<script src="/js/index.js?0317"></script>
@endsection