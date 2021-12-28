@extends('layouts.master')

@section('head')
	<meta name="description" content="하우올리는 중소형 부동산 전문 종합 부동산 회사 입니다. 우리는 IT기술을 활용해 중소형 부동산 시장을 개선하고자 합니다.">
	<meta name="keywords" content="하우올리, hauoli, 중소형 부동산, 부동산 개발">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/visit_done.css?0805') }}">
	<meta name="mobile-web-app-capable" content="no">
	<meta name="apple-mobile-web-app-capable" content="no">
@endsection

@section('title')
	하우올리 상담신청 완료
@endsection

@section('content')
<section class="section-1">
	<div class="wrap">
		<h2>신청이 완료되었습니다</h2>
		<p>영업시간 기준 24시간 이내에 연락드리겠습니다.</p>
		<h4>신청 후 프로세스</h4>
		<div class="flow wrap-narrow">
			<img class="desktop" src="/img/visit/flow.png" alt="전화상담 방문예약 하우올리방문 서비스소개 및 질의응답 맞춤견적확인 최종계약">
			<img class="mobile" src="/img/visit/flowm.png" alt="전화상담 방문예약 하우올리방문 서비스소개 및 질의응답 맞춤견적확인 최종계약">
		</div>
		<a href="http://hauoli-pm.com/all/allcategory/onestopdevelopmentsolution/developmentstory/576/" target="_blank"><span class="underline">대면상담 안내사항</span></a>
	</div>
</section>
@endsection