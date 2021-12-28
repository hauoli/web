@extends('layouts.master')

@section('head')
<meta name="description" content="중소형 부동산 개발 원스톱 솔루션 IT기술 기반 종합 부동산회사 사업구조로 중소형 부동산 시장을 개선해 가겠습니다.">
<link rel="stylesheet" type="text/css" href="{{ asset('css/business.css?1130') }}">
<link rel="stylesheet" href="/css/swiper-bundle.min.css">
@endsection

@section('title')
하우올리 사업소개
@endsection

@section('content')
<section class="section-1 sub-main">
	<div class="wrap">
		<h2>중소형 부동산 개발<br>원스톱 솔루션</h2>
		<p>IT기술 기반 종합 부동산회사 사업구조로<br>중소형 부동산 시장을 개선해 가겠습니다.</p>
	</div>
</section>
<section class="section-2 section-type-4">
	<div class="wrap-narrow">
		<div class="sec-type-4-title">
			<span class="sec-type-4-logo"></span>
			<h2>중소형 부동산 전문,<br>부동산 개발사업</h2>
		</div>
		<h4 class="mobile">중소형 부동산 전문, 부동산 개발사업</h4>
		<div class="sec-type-4-img desktop">
			<img src="/img/business01.png?0901" alt="참고사진1">
			<img src="/img/business02.png" alt="참고사진2">
			<img src="/img/business03.png" alt="참고사진3">
		</div>
		<div class="sec-type-4-slide mobile swiper-container slide-1">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="/img/business01.png" alt="참고사진1"></div>
				<div class="swiper-slide"><img src="/img/business02.png" alt="참고사진2"></div>
				<div class="swiper-slide"><img src="/img/business03.png" alt="참고사진3"></div>
			</div>
			<div class="swiper-scrollbar"></div>
		</div>
		<p>하우올리는 서울과 수도권 지역에서 원룸과 빌라, 꼬마빌딩과 상가주택 등 중소형 부동산 개발사업을 진행합니다.<br><br>단순한 집장사를 넘어 철학있는 디벨로퍼를 지향합니다.<br>창조된 공간에 대한 사회적 책임감을 느끼며 사업에 임해 가겠습니다.</p>	
		<div class="sec-type-4-link"><a href="/project">완료 프로젝트 &gt;</a></div>
	</div>
</section>
<section class="section-3 section-type-4">
	<div class="wrap-narrow">
		<div class="sec-type-4-title">
			<span class="sec-type-4-logo"></span>
			<h2>중소형 부동산 전문,<br>원스톱 PM 서비스</h2>
		</div>
		<h4 class="mobile">중소형 부동산 전문, 원스톱 PM 서비스</h4>
		<div class="sec-type-4-img">
			<img class="desktop" src="/img/business04.png" alt="참고도표">
			<div class="mobile" style="max-width: 327px;"><img src="/img/business04m.png" alt="참고도표"></div>
		</div>
		<p>하우올리는 자체 개발을 통한 축적된 경험과 네트워크를 바탕으로 외부 고객의 부동산 개발 사업에 대한 PM 서비스를 제공합니다.<br><br>토지매매, 사업성검토, 건설CM, 분양/임대 컨설팅 등 사업 전 과정에서 함께하며 고객의 성공을 위해 최선을 다합니다.</p>
		<div class="sec-type-4-link"><a href="/onestop">자세히 알아보기 &gt;</a></div>
	</div>
</section>
<section class="section-4 section-type-4">
	<div class="wrap-narrow">
		<div class="sec-type-4-title">
			<span class="sec-type-4-logo"></span>
			<h2>중소형 부동산 전문,<br>종합건설회사</h2>
		</div>
		<h4 class="mobile">중소형 부동산 전문, 종합건설회사</h4>
		<div class="sec-type-4-img desktop">
			<img src="/img/business05.png" alt="건설업등록증">
			<img src="/img/business06.png" alt="참고사진">
			<img src="/img/business07.png?0901" alt="공정관리 시스템 coming soon">
		</div>
		<div class="sec-type-4-slide mobile swiper-container slide-2">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="/img/business05.png" alt="건설업등록증"></div>
				<div class="swiper-slide"><img src="/img/business06.png" alt="참고사진"></div>
				<div class="swiper-slide"><img src="/img/business07.png" alt="공정관리 시스템 coming soon"></div>
			</div>
			<div class="swiper-scrollbar"></div>
		</div>
		<p>하우올리는 건축공사업 면허를 취득한 종합건설회사를 통해 자체 개발사업과 외부 고객이 의뢰한 건설시공 프로젝트를 진행합니다.<br><br>공정관리 효율화, 철저한 VE, 프리콘 기법 등을 기반으로 중소형 부동산 건축에 특화된 시공역량과 협력업체 네트워크를 가지고 있습니다.</p>	
		<div class="sec-type-4-link"><a href="/build">자세히 알아보기 &gt;</a></div>
	</div>
</section>
<section class="section-5 section-type-4">
	<div class="wrap-narrow">
		<div class="sec-type-4-title">
			<span class="sec-type-4-logo"></span>
			<h2>IT기술 기반,<br>임대관리 서비스 제공</h2>
		</div>
		<h4 class="mobile">IT기술 기반, 임대관리 서비스 제공</h4>
		<div class="sec-type-4-img"><img src="/img/business08.png" alt="스마트폰 APP부터 IoT 기반 센싱 시스템 까지"></div>
		<p>하우올리는 ERP 기반 PM, 지역 부동산과 연계한 LM, 설계/시공에 반영된 FM 등을 바탕으로 고도화된 임대관리 서비스를 제공합니다.<br><br>또한 AI와 IoT 등의 IT 기술을 활용한 임대관리 솔루션을 통해 임대관리의 새로운 가치를 제안하고자 합니다.</p>
	</div>
</section>
<script src="/js/swiper-bundle.min.js"></script>
<script type="text/javascript">
var swiper = new Swiper('.slide-1', {
	slidesPerView: 'auto',
	spaceBetween: 10,
	scrollbar: {
		el: '.swiper-scrollbar',
		draggable: true,
		snapOnRelease: false,
	},
});
var swiper = new Swiper('.slide-2', {
	slidesPerView: 'auto',
	spaceBetween: 10,
	scrollbar: {
		el: '.swiper-scrollbar',
		draggable: true,
		snapOnRelease: false,
	},
});
</script>
@endsection