@extends('layouts.master')

@section('head')
	<meta name="description" content="하우올리가 진행한 프로젝트">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/project.css?0805') }}">
	<!-- <link rel="stylesheet" href="/css/swiper-bundle.min.css"> -->
@endsection

@section('title')
	하우올리 프로젝트
@endsection

@section('content')
@if ($category == 'all')
<section class="section-1 section-1-all sub-main">
	<div class="wrap">
		<h2><span class="font-light">하우올리가 진행한</span><br>전체 프로젝트</h2>
		<p>중소형 부동산 시장의 혁신을 위한 우리의 노력,<br>하우올리의 결과물들을 소개합니다.</p>
	</div>
</section>
<section class="section-prj wrap">
	<ul class="prj-catelist">
		<li><a href="/project/all" class="underline">전체</a></li>
		<li><a href="/project/hauoli">하우올리</a></li>
		<li><a href="/project/trapiche">트라피체</a></li>
		<li><a href="/project/onestop">원스톱PM</a></li>
		<li><a href="/project/build">안심건축</a></li>
	</ul>
	<div class="clear"></div>
	<ul class="prj-list list-1 list-all">
		@if ($page == '1')
		<li class="prj-item">
			<div class="prj-thumb">
				<a href="/project/sdbB"><img src="/img/project/prj_t_sdbB.png" alt="신대방B"></a>
			</div>
			<div class="prj-age">2021.03.22</div>
			<h2><a href="/project/sdbB"><span class="prj-cate c-hauoli">하우올리</span>신대방B</a></h2>
			<p>서울시 관악구 신림동</p>
			<a href="/project/sdbB">자세히 보기<span class="desktop"> &rarr;</span><span class="mobile">&gt;</span></a>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<a href="/project/ysnA"><img src="/img/project/prj_t_ysnA.png" alt="연신내A"></a>
			</div>
			<div class="prj-age">2021. 01</div>
			<h2><a href="/project/ysnA"><span class="prj-cate c-onestop">원스톱PM</span>연신내A</a></h2>
			<p>서울시 은평구 갈현동</p>
			<a href="/project/ysnA">자세히 보기<span class="desktop"> &rarr;</span><span class="mobile">&gt;</span></a>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<a href="/project/gusanA"><img src="/img/project/prj_t_gusanA.png" alt="구산A"></a>
			</div>
			<div class="prj-age">2021. 01</div>
			<h2><a href="/project/gusanA"><span class="prj-cate c-onestop">원스톱PM</span>구산A</a></h2>
			<p>서울시 은평구 구산동</p>
			<a href="/project/gusanA">자세히 보기<span class="desktop"> &rarr;</span><span class="mobile">&gt;</span></a>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<a href="/project/hwagokA"><img src="/img/project/prj_t_hwagokA.png" alt="화곡A"></a>
			</div>
			<div class="prj-age">2019. 02</div>
			<h2><a href="/project/hwagokA"><span class="prj-cate c-onestop">원스톱PM</span>화곡A</a></h2>
			<p>서울시 강서구 화곡동</p>
			<a href="/project/hwagokA">자세히 보기<span class="desktop"> &rarr;</span><span class="mobile">&gt;</span></a>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<a href="/project/saejeolA"><img src="/img/project/prj_t_saejeolA.png" alt="새절A"></a>
			</div>
			<div class="prj-age">2019. 01</div>
			<h2><a href="/project/saejeolA"><span class="prj-cate c-onestop">원스톱PM</span>새절A</a></h2>
			<p>서울시 은평구 응암동</p>
			<a href="/project/saejeolA">자세히 보기<span class="desktop"> &rarr;</span><span class="mobile">&gt;</span></a>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_sdbA.png" alt="신대방A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.06.10</div>
			<h2><span class="prj-cate c-onestop">원스톱PM</span>신대방A</h2>
			<p>서울시 관악구 신림동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_hwagokB.png" alt="화곡B">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021. 06</div>
			<h2><span class="prj-cate c-hauoli">하우올리</span>화곡B</h2>
			<p>서울시 양천구 신월동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_hwagokD.png" alt="화곡D">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.04.26</div>
			<h2><span class="prj-cate c-onestop">원스톱PM</span>화곡D</h2>
			<p>서울시 강서구 화곡동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_cheonhoA.png" alt="천호A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.03.15</div>
			<h2><span class="prj-cate c-build">안심건축</span>천호A</h2>
			<p>서울시 강동구 성내동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_sdbD.png" alt="신대방D">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.03.11</div>
			<h2><span class="prj-cate c-onestop">원스톱PM</span>신대방D</h2>
			<p>서울시 관악구 신림동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_hwagokC.png" alt="화곡C">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.03.11</div>
			<h2><span class="prj-cate c-onestop">원스톱PM</span>화곡C</h2>
			<p>서울시 강서구 화곡동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_gusanB.png" alt="구산B">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.01.12</div>
			<h2><span class="prj-cate c-build">안심건축</span>구산B</h2>
			<p>서울시 은평구 갈현동</p>
		</li>
	</ul>
	<div class="prj-paging">
		<!-- <span class="prj-paging-prev">&lt; </span> -->
		<span class="prj-paging-num now">1</span>
		<span class="prj-paging-num"><a href="/project/all/2">2</a></span>
		<!-- <span class="prj-paging-next"> &gt;</span> -->
	</div>
		@elseif ($page == '2')
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_spl.png" alt="숙박 및 근생 신축">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2020.11.18</div>
			<h2><span class="prj-cate c-build">안심건축</span>숙박 및 근생 신축</h2>
			<p>강원도 고성군 삼포리</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_sdbC.png" alt="신대방C">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2020.09.16</div>
			<h2><span class="prj-cate c-onestop">원스톱PM</span>신대방C</h2>
			<p>서울시 관악구 신림동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_dchonA.png" alt="등촌A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">진행 중</div>
			<h2><span class="prj-cate c-trapiche">트라피체</span>등촌A</h2>
			<p>서울시 강서구 등촌동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_sbhA.png" alt="신방화A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">진행 중</div>
			<h2><span class="prj-cate c-trapiche">트라피체</span>신방화A</h2>
			<p>서울시 강서구 방화동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_ujsA.png" alt="우장산A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">진행 중</div>
			<h2><span class="prj-cate c-hauoli">하우올리</span>우장산A</h2>
			<p>서울시 강서구 내발산동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_eungamA.png" alt="응암A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">진행 중</div>
			<h2><span class="prj-cate c-hauoli">하우올리</span>응암A</h2>
			<p>서울시 은평구 신사동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_jeungsanA.png" alt="증산A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">진행 중</div>
			<h2><span class="prj-cate c-hauoli">하우올리</span>증산A</h2>
			<p>서울시 서대문구 북가좌동</p>
		</li>
	</ul>
	<div class="prj-paging">
		<!-- <span class="prj-paging-prev">&lt; </span> -->
		<span class="prj-paging-num"><a href="/project/all">1</a></span>
		<span class="prj-paging-num now">2</span>
		<!-- <span class="prj-paging-next"> &gt;</span> -->
	</div>
		@endif
</section>
@elseif ($category == 'hauoli')
<section class="section-1 section-1-hau sub-main">
	<div class="wrap">
		<h2><span class="font-light">원룸은</span><br>하우올리</h2>
		<p>아늑한 나만의 아틀리에, 1인 가구 전문 주거 브랜드,<br>하우올리의 프로젝트들을 소개합니다.</p>
	</div>
</section>
<section class="section-prj wrap">
	<ul class="prj-catelist">
		<li><a href="/project/all">전체</a></li>
		<li><a href="/project/hauoli" class="underline font-bold">하우올리</a></li>
		<li><a href="/project/trapiche">트라피체</a></li>
		<li><a href="/project/onestop">원스톱PM</a></li>
		<li><a href="/project/build">안심건축</a></li>
	</ul>
	<div class="clear"></div>
	<ul class="prj-list list-1 list-all">
		<li class="prj-item">
			<div class="prj-thumb">
				<a href="/project/sdbB"><img src="/img/project/prj_t_sdbB.png" alt="신대방B"></a>
			</div>
			<div class="prj-age">2021.03.22</div>
			<h2><a href="/project/sdbB"><span class="prj-cate c-hauoli">하우올리</span>신대방B</a></h2>
			<p>서울시 관악구 신림동</p>
			<a href="/project/sdbB">자세히 보기<span class="desktop"> &rarr;</span><span class="mobile">&gt;</span></a>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_sdbA.png" alt="신대방A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.06.10</div>
			<h2><span class="prj-cate c-hauoli">하우올리</span>신대방A</h2>
			<p>서울시 관악구 신림동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_hwagokB.png" alt="화곡B">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021. 06</div>
			<h2><span class="prj-cate c-hauoli">하우올리</span>화곡B</h2>
			<p>서울시 양천구 신월동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_ujsA.png" alt="우장산A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">진행 중</div>
			<h2><span class="prj-cate c-hauoli">하우올리</span>우장산A</h2>
			<p>서울시 강서구 내발산동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_eungamA.png" alt="응암A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">진행 중</div>
			<h2><span class="prj-cate c-hauoli">하우올리</span>응암A</h2>
			<p>서울시 은평구 신사동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_jeungsanA.png" alt="증산A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">진행 중</div>
			<h2><span class="prj-cate c-hauoli">하우올리</span>증산A</h2>
			<p>서울시 서대문구 북가좌동</p>
		</li>
	</ul>
	<div class="prj-paging">
		<!-- <span class="prj-paging-prev">&lt; </span> -->
		<span class="prj-paging-num now">1</span>
		<!-- <span class="prj-paging-next"> &gt;</span> -->
	</div>
</section>
@elseif ($category == 'trapiche')
<section class="section-1 section-1-tra sub-main">
	<div class="wrap">
		<h2><span class="font-light">주거 환경의 새로운 기준</span><br>트라피체</h2>
		<p>모두가 기다려온 주거 환경의 새로운 기준,<br>트라피체의 프로젝트들을 소개합니다.</p>
	</div>
</section>
<section class="section-prj wrap">
	<ul class="prj-catelist">
		<li><a href="/project/all">전체</a></li>
		<li><a href="/project/hauoli">하우올리</a></li>
		<li><a href="/project/trapiche" class="underline font-bold">트라피체</a></li>
		<li><a href="/project/onestop">원스톱PM</a></li>
		<li><a href="/project/build">안심건축</a></li>
	</ul>
	<div class="clear"></div>
	<ul class="prj-list list-1 list-all">
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_dchonA.png" alt="등촌A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">진행 중</div>
			<h2><span class="prj-cate c-trapiche">트라피체</span>등촌A</h2>
			<p>서울시 강서구 등촌동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_sbhA.png" alt="신방화A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">진행 중</div>
			<h2><span class="prj-cate c-trapiche">트라피체</span>신방화A</h2>
			<p>서울시 강서구 방화동</p>
		</li>
	</ul>
	<div class="prj-paging">
		<!-- <span class="prj-paging-prev">&lt; </span> -->
		<span class="prj-paging-num now">1</span>
		<!-- <span class="prj-paging-next"> &gt;</span> -->
	</div>
</section>
@elseif ($category == 'onestop')
<section class="section-1 section-1-one sub-main">
	<div class="wrap">
		<h2><span class="font-light">부동산 개발의 든든한 동반자</span><br>원스톱PM</h2>
		<p>전문성과 경험이 필요한 부동산 개발과 건축시공 분야,<br>뛰어난 전문성으로 진행한 원스톱PM 프로젝트들을 소개합니다.</p>
	</div>
</section>
<section class="section-prj wrap">
	<ul class="prj-catelist">
		<li><a href="/project/all">전체</a></li>
		<li><a href="/project/hauoli">하우올리</a></li>
		<li><a href="/project/trapiche">트라피체</a></li>
		<li><a href="/project/onestop" class="underline font-bold">원스톱PM</a></li>
		<li><a href="/project/build">안심건축</a></li>
	</ul>
	<div class="clear"></div>
	<ul class="prj-list list-1 list-all">
		<li class="prj-item">
			<div class="prj-thumb">
				<a href="/project/ysnA"><img src="/img/project/prj_t_ysnA.png" alt="연신내A"></a>
			</div>
			<div class="prj-age">2021. 01</div>
			<h2><a href="/project/ysnA"><span class="prj-cate c-onestop">원스톱PM</span>연신내A</a></h2>
			<p>서울시 은평구 갈현동</p>
			<a href="/project/ysnA">자세히 보기<span class="desktop"> &rarr;</span><span class="mobile">&gt;</span></a>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<a href="/project/gusanA"><img src="/img/project/prj_t_gusanA.png" alt="구산A"></a>
			</div>
			<div class="prj-age">2021. 01</div>
			<h2><a href="/project/gusanA"><span class="prj-cate c-onestop">원스톱PM</span>구산A</a></h2>
			<p>서울시 은평구 구산동</p>
			<a href="/project/gusanA">자세히 보기<span class="desktop"> &rarr;</span><span class="mobile">&gt;</span></a>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<a href="/project/hwagokA"><img src="/img/project/prj_t_hwagokA.png" alt="화곡A"></a>
			</div>
			<div class="prj-age">2019. 02</div>
			<h2><a href="/project/hwagokA"><span class="prj-cate c-onestop">원스톱PM</span>화곡A</a></h2>
			<p>서울시 강서구 화곡동</p>
			<a href="/project/hwagokA">자세히 보기<span class="desktop"> &rarr;</span><span class="mobile">&gt;</span></a>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<a href="/project/saejeolA"><img src="/img/project/prj_t_saejeolA.png" alt="새절A"></a>
			</div>
			<div class="prj-age">2019. 01</div>
			<h2><a href="/project/saejeolA"><span class="prj-cate c-onestop">원스톱PM</span>새절A</a></h2>
			<p>서울시 은평구 응암동</p>
			<a href="/project/saejeolA">자세히 보기<span class="desktop"> &rarr;</span><span class="mobile">&gt;</span></a>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_hwagokD.png" alt="화곡D">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.04.26</div>
			<h2><span class="prj-cate c-onestop">원스톱PM</span>화곡D</h2>
			<p>서울시 강서구 화곡동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_sdbD.png" alt="신대방D">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.03.11</div>
			<h2><span class="prj-cate c-onestop">원스톱PM</span>신대방D</h2>
			<p>서울시 관악구 신림동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_hwagokC.png" alt="화곡C">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.03.11</div>
			<h2><span class="prj-cate c-onestop">원스톱PM</span>화곡C</h2>
			<p>서울시 강서구 화곡동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_sdbC.png" alt="신대방C">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2020.09.16</div>
			<h2><span class="prj-cate c-onestop">원스톱PM</span>신대방C</h2>
			<p>서울시 관악구 신림동</p>
		</li>
	</ul>
	<div class="prj-paging">
		<!-- <span class="prj-paging-prev">&lt; </span> -->
		<span class="prj-paging-num now">1</span>
		<!-- <span class="prj-paging-next"> &gt;</span> -->
	</div>
</section>
@elseif ($category == 'build')
<section class="section-1 section-1-bui sub-main">
	<div class="wrap">
		<h2><span class="font-light">합리적인 비용과</span><br>내실있는 건축</h2>
		<p>중소형부동산 전문 종합건설회사 하우올리씨앤디의<br>안심건축 프로젝트들을 소개합니다</p>
	</div>
</section>
<section class="section-prj wrap">
	<ul class="prj-catelist">
		<li><a href="/project/all">전체</a></li>
		<li><a href="/project/hauoli">하우올리</a></li>
		<li><a href="/project/trapiche">트라피체</a></li>
		<li><a href="/project/onestop">원스톱PM</a></li>
		<li><a href="/project/build" class="underline font-bold">안심건축</a></li>
	</ul>
	<div class="clear"></div>
	<ul class="prj-list list-1 list-all">
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_cheonhoA.png" alt="천호A">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.03.15</div>
			<h2><span class="prj-cate c-build">안심건축</span>천호A</h2>
			<p>서울시 강동구 성내동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_gusanB.png" alt="구산B">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2021.01.12</div>
			<h2><span class="prj-cate c-build">안심건축</span>구산B</h2>
			<p>서울시 은평구 갈현동</p>
		</li>
		<li class="prj-item">
			<div class="prj-thumb">
				<img src="/img/project/prj_t_spl.png" alt="숙박 및 근생 신축">
				<div class="prj-thumb-ready">프로젝트 진행 중</div>
			</div>
			<div class="prj-age">2020.11.18</div>
			<h2><span class="prj-cate c-build">안심건축</span>숙박 및 근생 신축</h2>
			<p>강원도 고성군 삼포리</p>
		</li>
	</ul>
	<div class="prj-paging">
		<!-- <span class="prj-paging-prev">&lt; </span> -->
		<span class="prj-paging-num now">1</span>
		<!-- <span class="prj-paging-next"> &gt;</span> -->
	</div>
</section>
@endif

<script type="text/javascript">
$('.prj-catelist').find('a').click(function(){
	$('.prj-catelist').find('a').removeClass("underline");     // a 태그의 클래스 명 test를 삭제
	$(this).addClass("underline");        // a 태그에 클래스 명 test를 추가
	$('.prj-list').hide();
	$('.list-'+$(this).attr().show();
});
</script>
@endsection