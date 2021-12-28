@extends('layouts.master')

@section('head')
	<meta name="description" content="하우올리는 중소형 부동산 전문 종합 부동산 회사 입니다. 우리는 IT기술을 활용해 중소형 부동산 시장을 개선하고자 합니다.">
	<meta name="keywords" content="하우올리, hauoli, 중소형 부동산, 부동산 개발">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/visit.css?0804v3') }}">
	<link rel="stylesheet" href="/css/swiper-bundle.min.css">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="mobile-web-app-capable" content="no">
	<meta name="apple-mobile-web-app-capable" content="no">
@endsection

@section('title')
	하우올리 상담신청
@endsection

@section('content')
<section class="section-1 sub-main">
	<div class="wrap">
		<h2>중소형 부동산 개발을 꿈꾼다면?</h2>
		<p>부동산 개발 여정의 처음부터 끝까지 전문적인 서비스를 제공하는 <span class="br"><br></span>든든한 동반자 하우올리와 함께하세요</p>
		<button type="button" onclick="$([document.documentElement, document.body]).animate({scrollTop: $('#section-visit').offset().top}, 300);"><span class="underline">상담 신청 바로가기</span></button>
	</div>
</section>
<section class="section-2 section-type-1">
	<div class="wrap-narrow">
		<h2>하우올리와 함께라면 누구든 <span class="mobile-600r"><br></span>중소형 부동산 개발의 뜻을 펼칠 수 있습니다</h2>
		<div class="sec-type-1-img">
			<img src="/img/visit/dots.png" alt="">
		</div>
		<p>하우올리는 건축주가 안심하고 사업을 진행할 수 있도록 <span class="mobile-600r"><br></span>부동산 PM 서비스를 제공하고 있습니다.</p>
	</div>
</section>
<section class="section-3 section-type-1">
	<div class="wrap-narrow">
		<h2>다수의 경험을 바탕으로 믿음직한 동반자가 되겠습니다</h2>
		<div class="sec-type-1-img">
			<img src="/img/visit/dots.png" alt="">
		</div>
		<p>하우올리는 중소형 부동산 개발 검토 경험 3,000회 이상, <span class="mobile-600r"><br></span>다수의 중소형 부동산 개발 및 시공 경험을 보유하고 있습니다.</p>
		<span class="f-hl">다수의 프로젝트 경험으로 이미 검증된 실력</span>
		<div class="section-type-img">
			<div class="sec-type-2-img desktop">
				<img src="/img/visit/01.png" alt="프로젝트 사진">
				<img src="/img/visit/02.png" alt="프로젝트 사진">
				<img src="/img/visit/03.png" alt="프로젝트 사진">
				<img src="/img/visit/04.png" alt="프로젝트 사진">
			</div>
			<div class="sec-type-1-slide mobile swiper-container slide-1">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img src="/img/visit/01.png" alt="프로젝트 사진"></div>
					<div class="swiper-slide"><img src="/img/visit/02.png" alt="프로젝트 사진"></div>
					<div class="swiper-slide"><img src="/img/visit/03.png" alt="프로젝트 사진"></div>
					<div class="swiper-slide"><img src="/img/visit/04.png" alt="프로젝트 사진"></div>
				</div>
				<div class="swiper-scrollbar"></div>
			</div>
		</div>
	</div>
</section>
<div class="visit-bg" id="section-visit">
	<div class="wrap">
		<section class="visit-tit">
			<h2 class="desktop">지금, 무료 상담을 통해</h2>
			<h2 class="mobile">지금 <span style="color: #f5865f;">무료상담</span>을 통해</h2>
			<h3>중소형 부동산 개발 및 시공의 고민을 해결해보세요</h3>
		</section>
		<div class="visit-wrap desktop">
			<form name="visit-form" id="visit-form">
				<input type="hidden" name="mail-type" value="visit">
				<input type="hidden" name="visit-time" value="">
				<div class="visit-1">
					<div class="visit-left">
						<div>다수의 부동산 개발 및 시공 경험을 바탕으로 내실있는 상담이 되도록 하겠습니다.</div>
						<h4>상담 비용</h4>
						<ul class="semi-bold">
							<li class="cancel_line">비용 : 8만원 <span style="color:#6f6f6f; font-weight:300;">(60분 기준)</span><img src="/img/icon/cancel_line.png" alt=""></li>
							<li><span class="bof">오픈 기념 무료 상담</span></li>
							<li>기한 : {{ date("Y년 n월 t일") }}까지</li>
						</ul>
						<h4>상담 내용</h4>
						<ul>
							<li>개발 방향 컨설팅 (세금 및 매매 관점)</li>
							<li>신축부지 소개 및 가설계</li>
							<li>설계도면 검토 (인허가, 사업성, 시공성, 사용성 등)</li>
							<li>원룸/상가주택/꼬마빌딩 건축시공 관련</li>
							<li>신축개발 금융구조 컨설팅</li>
						</ul>
						<h4>방문상담 안내</h4>
						<ul>
							<li>장소 : 하우올리 본사 (5호선 공덕역 인근)</li>
						</ul>
					</div>
					<div class="visit-right">
						<h4>상담받으시는 분의 정보를 입력해주세요.</h4>
						<div class="input-wrap">
							<label for="visit-name">이름</label>
							<input type="text" id="visit-name" name="visit-name">
						</div>
						<div class="input-wrap">
							<label for="visit-phone">핸드폰번호</label>
							<input type="tel" id="visit-phone" name="visit-phone" onKeyup="inputPhoneNumber(this);" maxlength="13">
						</div>
						<div class="input-wrap">
							<label for="visit-email">메일주소</label>
							<input type="text" id="visit-email" name="visit-email">
						</div>
						<div class="input-wrap">
							<label for="visit-address">개발부지 주소</label>
							<input type="text" id="visit-address" name="visit-address" placeholder="주소를 입력해 주시면 구체적인 상담이 가능합니다.">
						</div>
						<label><input type="checkbox" name="visit-site" id="visit-site" value="기 확보된 부지가 없습니다.">기 확보된 부지가 없습니다.</label>
						<div class="f-ps">*하우올리의 원스톱 PM및 건축 시공 가능 지역 : 서울 전 지역</div>
						<label><input type="checkbox" name="visit-agree" id="visit-agree" value="개인정보 수집 및 이용에 동의합니다">(필수) 개인정보 수집 및 이용에 동의합니다 <a href="javascript:void(0);" class="underline" onclick="overlay.open($('.layer-policy'),1);">(보기)</a></label>
						<!-- <h4>상담을 원하시는 날짜를 입력해 주세요.(복수입력가능)</h4>
						<div class="input-wrap">
							<input type="text" id="visit-date" name="visit-date" placeholder="예) 10/12, 11/2">
						</div>
						<p>*확정 날짜는 연락드리도록 하겠습니다</p>
						<h4>상담을 원하는 시간대를 선택해 주세요</h4>
						<div class="visit-time-wrap">
							<label><input type="checkbox" name="visit-time-chk" value="10:00~11:00">10:00~11:00</label>
							<label><input type="checkbox" name="visit-time-chk" value="11:00~12:00">11:00~12:00</label>
							<label><input type="checkbox" name="visit-time-chk" value="12:00~13:00">12:00~13:00</label>
							<label><input type="checkbox" name="visit-time-chk" value="13:00~14:00">13:00~14:00</label>
							<label><input type="checkbox" name="visit-time-chk" value="14:00~15:00">14:00~15:00</label>
							<label><input type="checkbox" name="visit-time-chk" value="15:00~16:00">15:00~16:00</label>
							<label><input type="checkbox" name="visit-time-chk" value="16:00~17:00">16:00~17:00</label>
							<label><input type="checkbox" name="visit-time-chk" value="17:00~18:00">17:00~18:00</label>
							<label><input type="checkbox" name="visit-time-chk" value="18:00~19:00">18:00~19:00</label>
							<label><input type="checkbox" name="visit-time-chk" value="19:00~20:00">19:00~20:00</label>
						</div>
						<button type="button" class="visit-button" onclick="visit_step('1');">다음 단계</button> -->
					</div>
					<button type="button" id="visit-submit" class="visit-button" onclick="visit_step('2')">신청 완료</button>
				</div>
	<!-- 			<div class="visit-2">
					<h2>방문상담 신청하기</h2>
						<div class="visit-left">
							<h4>상담받으시는 분의 정보를 입력해주세요.</h4>
							<div class="input-wrap">
								<label for="visit-name">이름</label>
								<input type="text" id="visit-name" name="visit-name">
							</div>
							<div class="input-wrap">
								<label for="visit-phone">핸드폰번호</label>
								<input type="tel" id="visit-phone" name="visit-phone" onKeyup="inputPhoneNumber(this);" maxlength="13">
							</div>
							<div class="input-wrap">
								<label for="visit-email">메일주소</label>
								<input type="text" id="visit-email" name="visit-email">
							</div>
							<div class="input-wrap">
								<label for="visit-address">개발부지 주소</label>
								<input type="text" id="visit-address" name="visit-address" placeholder="상세한 지번까지 기입해 주시면 구체적인 상담이 가능합니다.">
							</div>
							<label><input type="checkbox" name="visit-site" id="visit-site" value="기 확보된 부지가 없습니다.">기 확보된 부지가 없습니다.</label>
						</div>
						<div class="visit-right">
							<h4>상담 내용을 자유롭게 적어주세요.</h4>
							<textarea name="visit-comment" id="visit-comment" cols="30" rows="12" placeholder="상세한 정보를 기입해 주실수록 내실있는 상담이 가능합니다.&#10;&#10;ex)&#10;- 개발/시공할 주소 또는 지역&#10;- 고려하는 개발 방향 (다세대, 다중, 상가주택 등)&#10;- 보유 예산 혹은 투자 희망금액&#10;- 기타 개발/시공 관련 궁금한 점&#10;- 상담 시 중점 논의하고 싶은 내용"></textarea>
						</div>
					<div class="ib-wrap">
						<button type="button" class="visit-button btn-prev" onclick="visit_step('0')">이전 단계</button>
						<button type="button" id="visit-submit" class="visit-button btn-next" onclick="visit_step('2')">신청 완료</button>
					</div>
				</div> -->
			</form>
		</div>
		<div class="visit-m-wrap mobile">
			<form name="visit-m-form" id="visit-m-form">
				<input type="hidden" name="mail-type" value="visit">
				<input type="hidden" name="visit-time" value="">
				<div class="visit-m-1">
					<p>다수의 부동산 개발 및 시공 경험을 바탕으로 내실 있는 상담이 되도록 하겠습니다.</p>
					<h4>상담 비용</h4>
					<ul class="semi-bold">
						<li class="cancel_line">비용 : 8만원 (60분 기준)<img src="/img/icon/cancel_line.png" alt=""></li>
						<li><span class="bof">오픈 기념 무료 상담</span></li>
						<li>기한 : {{ date("Y년 n월 t일") }}까지</li>
					</ul>
					<h4>상담 내용</h4>
					<ul>
						<li>개발 방향 컨설팅 (세금 및 매매 관점)</li>
						<li>신축부지 소개 및 가설계</li>
						<li>설계도면 검토 (인허가, 사업성, 시공성, 사용성 등)</li>
						<li>원룸/상가주택/꼬마빌딩 건축시공 관련</li>
						<li>신축개발 금융구조 컨설팅</li>
					</ul>
					<h4>방문상담 안내</h4>
					<ul>
						<li>장소 : 하우올리 본사 (5호선 공덕역 인근)</li>
					</ul>
				</div>
				<div class="visit-m-3">
					<h3>상담받으시는 분의 정보를 입력해주세요.</h3>
					<div class="input-wrap">
						<label for="visit-m-name">이름</label>
						<input type="text" id="visit-m-name" name="visit-name">
					</div>
					<div class="input-wrap">
						<label for="visit-m-phone">핸드폰번호</label>
						<input type="tel" id="visit-m-phone" name="visit-phone" onkeyup="inputPhoneNumber(this);" maxlength="13">
					</div>
					<div class="input-wrap">
						<label for="visit-m-email">메일주소</label>
						<input type="text" id="visit-m-email" name="visit-email">
					</div>
					<div class="input-wrap">
						<label for="visit-m-address">부지 주소</label>
						<input type="text" id="visit-m-address" name="visit-address" placeholder="주소를 입력해 주시면 구체적인 상담이 가능합니다.">
					</div>
					<div class="f-ps">*하우올리의 원스톱 PM및 건축 시공 가능 지역 : 서울 전 지역</div>
					<label style="text-align: right;"><input type="checkbox" id="visit-m-site" name="visit-site" value="기 확보된 부지가 없습니다.">기 확보된 부지가 없습니다.</label>
					<div>
						<label style="text-align: center;"><input type="checkbox" name="visit-agree" id="visit-m-agree">(필수) 개인정보 수집 및 이용에 동의합니다 <a href="javascript:void(0);" class="underline" onclick="overlay.open($('.layer-policy'),1);">(보기)</a></label>
					</div>
					<div class="ib-wrap">
						<button type="button" class="visit-button" onclick="visit_step('m3');">상담 신청 완료</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="layer-policy">
	<button class="close-button" onclick="overlay.close($('.layer-policy'));"></button>
	<h2>개인정보 이용약관</h2>
	<div class="layer-policy-cont">1. 수집하는 개인정보 항목 : 성명, 주민등록번호, 주소, 이메일, 연락처<br><br>2. 개인정보의 수집 및 이용 목적 : 제공하신 정보는 <상담신청> 확인을 위해 사용합니다.<br><br>① 본인 확인 식별 (동명이인 등) 절차에 이용 (성명, 주민등록번호), ② 의사소통 및 정보 전달 등에 이용 (이메일, 연락처), ③ 기타 상담 관련 제반업무 (성명, 주민등록번호, 연락처)<br><br>3. 개인정보 보유 및 이용기간 : 수집된 개인정보의 보유기간은 <상담신청> 후 1년 간이며 삭제 요청 시 당사자는 개인 정보를 재생 불가능한 방법으로 즉시 파기합니다.<br><br>※ 귀하는 이에 대한 동의를 거부할 수 있습니다. 다만 동의가 없을 경우 당 회사의 <상담신청>이 불가능할 수도 있음을 알려드립니다.</div>
</div>
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
	<script src="/js/visit.js?0709"></script>
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
	</script>
@endsection