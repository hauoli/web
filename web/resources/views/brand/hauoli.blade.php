@extends('layouts.master')

@section('head')
<meta name="description" content="아늑한 나만의 아틀리에, 1인 가구 전문 주거 브랜드,
하우올리의 프로젝트들을 소개합니다.">
<link rel="stylesheet" type="text/css" href="{{ asset('css/brand.css?0730') }}">
<link rel="stylesheet" href="/css/swiper-bundle.min.css">
@endsection

@section('title')
브랜드소개 하우올리
@endsection

@section('content')
<section class="section-1 sub-main" style="background-image: url('/img/brand/hauoli/Main-Banner.png');">
	<div class="wrap">
		<h2>원룸은 <br><b>하우올리</b></h2>
		<p>아늑한 나만의 아틀리에, 1인 가구 전문 주거 브랜드, <span class="br"><br></span>하우올리의 프로젝트들을 소개합니다.</p>
	</div>
</section>
<section class="sub-catelist">
	<div class="wrap-narrow">
		<ul class="prj-catelist">
			<li><a href="/brand/hauoli" class="underline">하우올리</a></li>
			<li><a href="/brand/trapiche">트라피체</a></li>
		</ul>
	</div>
</section>
<section class="section-2 section-type-1">
	<div class="wrap-narrow">
		<div class="sec-type-1-img">
			<img src="/img/brand/hauoli/01.png" alt="참고사진 4장">
		</div>
		<p>하우올리는 고객의 입장에서 고객이 생각하는 가장 이상적인 주거공간의 가치를 실현하기 위해 끊임없이 연구하고 또 제안합니다.<br><br>1인 가구의 라이프 스타일에 가장 근접할 수 있는 집을 짓기 위한 하우올리만의 독보적인 솔루션은 입주자의 니즈를 누구보다 영민하게 파악합니다.<br><br>하우올리가 지어낸 1인 가구 지향형 주택은 일률적인 주거공간을 넘어 보다 나은 공간으로서의 가치를 가지며, 누구나 살고 싶은 집, 자랑하고 싶은 집, 오래 머물고 싶은 집으로 거듭납니다.</p>
	</div>
</section>
<section class="section-3 section-type-2">
	<div class="wrap-narrow">
		<h2>하우올리가 특별한 이유</h2>
		<ul>
			<li>
				<div class="sec-type-2-img">
					<span class="no-1"></span>
					<img class="desktop" src="/img/brand/hauoli/icon01.png" alt="아이콘">
					<img class="mobile" src="/img/brand/hauoli/icon01m.png" alt="아이콘">
				</div>
				<div class="sec-type-2-txt">
					<h4>거주자의 UX를 고려한 평면설계</h4>
					<p>하우올리는 거주자의 생활 방식에 맞는 평면 설계를 항상 고민합니다. 이를 통해 불편함 없는 주거 환경을 만들고 나아가 삶의 질 개선에도 영향을 미칠 수 있기를 기대합니다.</p>
				</div>
			</li>
			<li>
				<div class="sec-type-2-img">
					<span class="no-2"></span>
					<img src="/img/brand/hauoli/icon02.png" alt="아이콘">
				</div>
				<div class="sec-type-2-txt">
					<h4>새로운 세대들의 라이프스타일에 맞는 공간</h4>
					<p>하우올리는 새로운 세대들의 라이프 스타일을 고려해 풀옵션, 감각적인 인테리어 트렌드는 물론, 다양한 지역 환경이나 주거 환경 등을 제안합니다.</p>
				</div>
			</li>
			<li>
				<div class="sec-type-2-img">
					<span class="no-3"></span>
					<img src="/img/brand/hauoli/icon03.png" alt="아이콘">
				</div>
				<div class="sec-type-2-txt">
					<h4>입주자를 사로잡는 최적의 위치 선정</h4>
					<p>하우올리는 교통 여건, 상권, 녹지 등 다양한 지역 상황을 고려하여 최적의 부지를 선정합니다. 하우올리가 선정한 위치는 무엇 하나 아쉽지 않아야 하기 때문입니다.</p>
				</div>
			</li>
		</ul>
		<div class="sec-type-1-link"><a href="/project/hauoli">하우올리 프로젝트 사례 &gt;</a></div>
	</div>
</section>
@endsection