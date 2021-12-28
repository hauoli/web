@extends('layouts.master')

@section('head')
<meta name="description" content="집에 대한 모두의 이상과 부합하는 곳, 주거공간의 새로운 기준을 제시하는 브랜드, 트라피체">
<link rel="stylesheet" type="text/css" href="{{ asset('css/brand.css?0730') }}">
@endsection

@section('title')
브랜드소개 트라피체
@endsection

@section('content')
<section class="section-1 sub-main" style="background-image: url('/img/brand/trapiche/Main-Banner.png');">
	<div class="wrap">
		<h2>주거공간의 새로운 기준 <br><b>트라피체</b></h2>
		<p>집에 대한 모두의 이상과 부합하는 곳, <span class="br"><br></span>주거공간의 새로운 기준을 제시하는 브랜드, 트라피체</p>

	</div>
</section>
<section class="sub-catelist">
	<div class="wrap-narrow">
		<ul class="prj-catelist">
			<li><a href="/brand/hauoli">하우올리</a></li>
			<li><a href="/brand/trapiche" class="underline">트라피체</a></li>
		</ul>
	</div>
</section>
<section class="section-2 section-type-1">
	<div class="wrap-narrow">
		<div class="sec-type-1-img">
			<img src="/img/brand/trapiche/01.png" alt="참고사진 4장">
		</div>
		<p>잘 지어진 집이란 무엇일까? 트라피체는 이 물음에 답하기 위해 늘 고민합니다. 누구나 ‘편안하면서도 감각적인 나만의 공간, 집’에 대한 이상향을 가지고 있습니다.<br><br>트라피체는 집이라는 본연의 가치에 집중하여 기존의 집의 가치를 뛰어넘는 트라피체만의 특별한 집을 선보이고자 합니다.<br><br>입주자의 작은 움직임까지 고려한 내부 설계는 물론, 좋은 입지와 빼어난 외관까지 생각하여 트라피체에 담았습니다.<br><br>모두의 행복을 위한 공간, 트라피체가 주거공간 트렌드를 이끌어 나가겠습니다.</p>
	</div>
</section>
<section class="section-3 section-type-2">
	<div class="wrap-narrow">
		<h2>트라피체가 특별한 이유</h2>
		<ul>
			<li>
				<div class="sec-type-2-img">
					<span class="no-1"></span>
					<img src="/img/brand/trapiche/icon01.png?0730" alt="아이콘">
				</div>
				<div class="sec-type-2-txt">
					<h4>트라피체만의 특화 설계</h4>
					<p>입주자의 편리성을 최대한 고려하여 알파룸, 드레스룸, 펜트리 같은 옵션들을 추가했습니다.</p>
				</div>
			</li>
			<li>
				<div class="sec-type-2-img">
					<span class="no-2"></span>
					<img src="/img/brand/trapiche/icon02.png" alt="아이콘">
				</div>
				<div class="sec-type-2-txt">
					<h4>입지까지 고려하여 더욱 높은 가치</h4>
					<p>다양한 거주자의 니즈를 충족시키려 여러 조건들을 꼼꼼히 따져보고 결정하여 입지로부터 발생하는 불편함을 근본부터 차단합니다.</p>
				</div>
			</li>
			<li>
				<div class="sec-type-2-img">
					<span class="no-3"></span>
					<img src="/img/brand/trapiche/icon03.png?0730" alt="아이콘">
				</div>
				<div class="sec-type-2-txt">
					<h4>스마트한 공간</h4>
					<p>일괄 소등 기능, 원격 검침기, 전열교환기 등 입주자의 생활에 편리함과 쾌적함을 더하는 옵션들로 스마트한 공간을 구현했습니다.</p>
				</div>
			</li>
		</ul>
		<div class="sec-type-1-link"><a href="/project/trapiche">트라피체 프로젝트 사례 &gt;</a></div>
	</div>
</section>
@endsection