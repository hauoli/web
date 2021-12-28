$(function(){
	$('.gnb-item').mouseover(function() {
		$(this).children('.gnb-sub').addClass('hover');
	});
	$('.gnb-item').mouseout(function() {
		$(this).children('.gnb-sub').removeClass('hover');
	});

	if (!sessionStorage.getItem("tb")) {
		$("#top-banner").show();
	}
	if (!sessionStorage.getItem("bb")) {
		$("#bottom-banner").show();
	}
});

var dim = document.createElement('div');
dim.className = 'dim';

var slide = {
	open: function open() {
		document.getElementById('gnm-slide').classList.add('show');
		dim.onclick = function () {
			slide.close();
		};
		document.getElementById('main').prepend(dim);
	},
	close: function close() {
		document.getElementById('gnm-slide').classList.remove('show');
		dim.remove();
		dim.onclick = function () {return false;};
	}
};

var overlay = {
	open: function open(target, scroll, callback) {
		dim.onclick = function () {
			overlay.close(target);
		};
		document.getElementById('main').prepend(dim);
		target.fadeIn();
		if(!scroll) {
			document.body.style.overflowY = 'hidden';
			document.documentElement.style.overflowY = 'hidden';
		}
		if (typeof callback == 'function') {
			callback();
		}
	},
	close: function close(target, callback) {
		target.fadeOut(function(){
			dim.remove()
			if (typeof callback == 'function') {
				callback();
			}
		});
		document.body.style.overflowY = 'visible';
		document.documentElement.style.overflowY = 'visible';
	}
};

/**
 * 문자열이 빈 문자열인지 체크하여 결과값을 리턴한다.
 * @param str       : 체크할 문자열
 */
function isEmpty(str){
     
    if(typeof str == "undefined" || str == null || str == "")
        return true;
    else
        return false ;
}
 
/**
 * 문자열이 빈 문자열인지 체크하여 기본 문자열로 리턴한다.
 * @param str           : 체크할 문자열
 * @param defaultStr    : 문자열이 비어있을경우 리턴할 기본 문자열
 */
function nvl(str, defaultStr){
     
    if(typeof str == "undefined" || str == null || str == "")
        str = defaultStr ;
     
    return str ;
}


var $loading = $('#loading');
$(document)
	.ajaxStart(function () {
		$loading.addClass('show');
	})
	.ajaxStop(function () {
		$loading.removeClass('show');
	});


window.onscroll = function() {
	// When the user scrolls the page, execute myFunction
	myFunction();
	// When the user scrolls down 20px from the top of the document, show the button
	scrollFunction();
};

// Get the header
var header = document.getElementById("gnm");
var main = document.getElementById("main");
var bottom = document.getElementById("bottom-banner");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    main.style.paddingTop = header.offsetHeight+"px";
    bottom.style.bottom = 0;
  } else {
    header.classList.remove("sticky");
    main.style.paddingTop = 0;
    bottom.style.bottom = "-"+bottom.offsetHeight+"px";
  }
}

//Get the button
var mybutton = document.getElementById("top-button");

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}