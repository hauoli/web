var TxtRotate = function(el, toRotate, period) {
	this.toRotate = toRotate;
	this.el = el;
	this.loopNum = 0;
	this.period = parseInt(period, 10) || 2000;
	this.txt = '';
	this.tick();
	this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
	var i = this.loopNum % this.toRotate.length;
	var fullTxt = this.toRotate[i];

	if (this.isDeleting) {
		// this.txt = fullTxt.substring(0, this.txt.length - 1);
		this.txt = '';
	} else {
		this.txt = fullTxt.substring(0, this.txt.length + 1);
	}

	this.el.innerHTML = '<span class="typo-wrap">'+this.txt+'</span>';

	var that = this;
	var delta = 150 - Math.random() * 100;

	if (this.isDeleting) { delta /= 2; }

	if (!this.isDeleting && this.txt === fullTxt) {
		delta = this.period;
		this.isDeleting = true;
	} else if (this.isDeleting && this.txt === '') {
		this.isDeleting = false;
		this.loopNum++;
		delta = 500;
	}

	setTimeout(function() {
		that.tick();
	}, delta);
};

window.onload = function() {
	var elements = document.getElementsByClassName('txt-rotate');
	for (var i=0; i<elements.length; i++) {
		var toRotate = elements[i].getAttribute('data-rotate');
		var period = elements[i].getAttribute('data-period');
		if (toRotate) {
			new TxtRotate(elements[i], JSON.parse(toRotate), period);
		}
	}
// INJECT CSS
// var css = document.createElement("style");
// css.type = "text/css";
// css.innerHTML = ".txt-rotate > .typo-wrap { border-right: 0.08em solid #fff }";
// document.body.appendChild(css);
};

$(document).ready(function() {
	if($(window).width() < 430){
		$('#sec-1-video source').attr('src', '/video/indexmv2.mp4');
	} else {
		$('#sec-1-video source').attr('src', '/video/indexv3.mp4');
	};
	$('#sec-1-video')[0].load();
});

function inputPhoneNumber(obj) {

	obj.value = obj.value.replace(/[^0-9]/gi,"");
	var number = obj.value.replace(/[^0-9]/g, "");
	var phone = "";

	if(number.length < 4) {
		return number;
	} else if(number.length < 7) {
		phone += number.substr(0, 3);
		phone += "-";
		phone += number.substr(3);
	} else if(number.length < 11) {
		phone += number.substr(0, 3);
		phone += "-";
		phone += number.substr(3, 3);
		phone += "-";
		phone += number.substr(6);
	} else {
		phone += number.substr(0, 3);
		phone += "-";
		phone += number.substr(3, 4);
		phone += "-";
		phone += number.substr(7);
	}
	obj.value = phone;
}

function mail_send(form) {
	var queryString = form.serialize();

	$.ajax({
		//아래 headers에 반드시 token을 추가해줘야 한다.!!!!! 
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		type: 'post',
		url: 'mailSend',
		dataType: 'json',
		data: queryString,
		success: function() {
			alert('상담신청 완료!\n하우올리팀에서 확인 후 3일 이내 연락드리도록 하겠습니다. 감사합니다. ');
			form[0].reset();
			visit_step('end');
		},
		error: function() {
			alert('에러가 발생했습니다.');
		}
	});
}

function subscribe() {
	var email = $('input[name="subs-email"]').val();
	if (email == '' || email == 'undefined') {
		alert('메일주소를 입력해주세요.');
	} else if (! email_check(email)) {
		alert('올바른 이메일 형식이 아닙니다.');
	} else {
		var queryString = $('form[name=subscribe-form]').serialize();
		$.ajax({
			//아래 headers에 반드시 token을 추가해줘야 한다.!!!!! 
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			type: 'post',
			url: 'mailSend',
			dataType: 'json',
			data: queryString,
			success: function(response) {
				if(response.status == 'success') {
					alert('구독신청을 완료했습니다.');
					$('form[name=subscribe-form]')[0].reset();
				} else {
					alert('잠시 후 다시 시도해주세요.\n\n서버로부터 내용을 불러오지 못했습니다.\n지속적으로 발생할 경우 고객센터로 문의해주세요.\n불편을 드려 죄송합니다.');
				}
			},
			error: function() {
				alert('잠시 후 다시 시도해주세요.\n\n서버로부터 내용을 불러오지 못했습니다.\n지속적으로 발생할 경우 고객센터로 문의해주세요.\n불편을 드려 죄송합니다.');
			}
		});
	}
}

function concat_time() {
	var str = "";  
	$("input[name='visit-time-chk']:checked").each(function (index) {  
		str += $(this).val() + ", ";  
	});
	$("input[name='visit-time']").val(str);
}

function email_check(email) {    
	var regex=/([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	return (email != '' && email != 'undefined' && regex.test(email)); 
}

function visit_step(step) {
	var req = $('<span class="require"></span>');
	var match = /^01([0|1|6|7|8|9]?)-?([0-9]{3,4})-?([0-9]{4})$/;

	switch (step) {
		case '0':
			$('.visit-2').hide(0,function(){$('.visit-1').show()});
		break;
		case '1':
			$('.visit-1').find($('.require')).remove();
			if (isEmpty($('#visit-date').val())) {
				$('#visit-date').after(req.text('필수 항목입니다').clone());
			} else {
				concat_time();
				$('.visit-1').hide(0,function(){$('.visit-2').show()});
			}
		break;
		case '2':
			var cnt = 0;
			var phone = $('#visit-phone').val();

			$('.visit-1').find($('.require')).remove();
			if ($('#visit-agree').is(':checked') == false) {
				alert('개인 정보 이용에 동의해 주세요.');
			} else {cnt++;}
			if (isEmpty($('#visit-name').val())) {
				$('#visit-name').after(req.text('필수 항목입니다').clone());
			} else {cnt++;}
			if (isEmpty(phone)) {
				$('#visit-phone').after(req.text('필수 항목입니다').clone());
			} else if (!match.test(phone)) {
				$('#visit-phone').after(req.text('올바른 형식이 아닙니다').clone());
			} else {cnt++;}
			if (isEmpty($('#visit-email').val())) {
				$('#visit-email').after(req.text('필수 항목입니다').clone());
			} else if (! email_check($('#visit-email').val())) {
				$('#visit-email').after(req.text('올바른 이메일 형식이 아닙니다').clone());
			} else {cnt++;}
			if (isEmpty($('#visit-address').val()) && $('#visit-site').is(':checked') == false) {
				$('#visit-address').after(req.text('필수 항목입니다').clone());
			} else {cnt++;}
			if (cnt == 5) {
				mail_send($('form[name=visit-form]'));
			}
		break;
		case 'm0':
			$('.visit-m-2, .visit-m-3').hide(0,function(){$('.visit-m-1').show()});
		break;
		case 'm1':
			$('.visit-m-1, .visit-m-3').hide(0,function(){$('.visit-m-2').show()});
		break;
		case 'm2':
			// $('.visit-m-2').find($('.require')).remove();
			// if (isEmpty($('#visit-m-date').val())) {
			// 	$('#visit-m-date').after(req.text('필수 항목입니다').clone());
			// } else {
			// 	concat_time();
				$('.visit-m-1').hide(0,function(){$('.visit-m-3').show()});
			// }
		break;
		case 'm3':
			var req = $('<span class="require"></span>');
			var cnt = 0;
			var phone = $('#visit-m-phone').val();

			$('.visit-m-3').find($('.require')).remove();
			if ($('#visit-m-agree').is(':checked') == false) {
				alert('개인 정보 이용에 동의해 주세요.');
			} else {cnt++;}
			if (isEmpty($('#visit-m-name').val())) {
				$('#visit-m-name').after(req.text('필수 항목입니다').clone());
			} else {cnt++;}
			if (isEmpty($('#visit-m-phone').val())) {
				$('#visit-m-phone').after(req.text('필수 항목입니다').clone());
			} else if (!match.test(phone)) {
				$('#visit-m-phone').after(req.text('올바른 형식이 아닙니다').clone());
			} else {cnt++;}
			if (isEmpty($('#visit-m-email').val())) {
				$('#visit-m-email').after(req.text('필수 항목입니다').clone());
			} else if (! email_check($('#visit-m-email').val())) {
				$('#visit-m-email').after(req.text('올바른 이메일 형식이 아닙니다').clone());
			} else {cnt++;}
			if (isEmpty($('#visit-m-address').val()) && $('#visit-m-site').is(':checked') == false) {
				$('#visit-m-address').after(req.text('필수 항목입니다').clone());
			} else {cnt++;}
			if (cnt == 5) {
				mail_send($('form[name=visit-m-form]'));
			}
		break;
		case 'end':
			$('.visit-wrap, .visit-m-wrap').hide(0, function(){
				$('.dim').remove();
				document.body.style.overflowY = 'visible';
				$('.visit-1').show();
				$('.visit-2').hide();
				$('.visit-m-1').show();
				$('.visit-m-2').hide();
				$('.visit-m-3').hide();
			});
		break;
	}
}

$("#visit-site, #visit-m-site").change(function() {
	var ad = $("#visit-address, #visit-m-address");
    if(this.checked) {
        ad.val("").attr("readonly", true);
    } else if (!this.checked) {
    	ad.removeAttr("readonly");
    }
});