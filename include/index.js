// ***** LOADING *****

$('body').css('overflow', 'hidden');
if ($(window).width() > 1024){
	  setTimeout(function(){
	     $(window).ready(function() {
	     $('.loader').css('display', 'none');
	     $('body').css('overflow', 'initial');
	    })
	  }, 1000);
	} else{
	  $('.loader').css('display', 'none');
	  $('body').css('overflow', 'initial');
	}

// ****** FIN ******

// ** MENU BURGER **

var i = document.getElementsByTagName('i');
i[0].onclick = function() {
	var o = document.getElementsByClassName('opacity');
	o[0].style.display = 'initial';
	var a = document.getElementsByTagName('aside');
	a[0].style.left = '0';
	a[0].style.transition = 'ease 0.4s';
};

var o = document.getElementsByClassName('opacity');
o[0].onclick = function() {
	this.style.display = 'none';
	var a = document.getElementsByTagName('aside');
	a[0].style.left = '-200px';
}

// ****** FIN ******

// ***** ARROW *****

"use strict";

var gotoOne = function gotoOne() {
  return $.scrollTo($("#one"), 800);
};
var gotoTop = function gotoTop() {
  return $.scrollTo($("#top"), 800);
};

$("#topArrow").click(gotoOne);
$("#bottomArrow").click(gotoTop);

// ***** FIN *******

//*** NAV SCROLL*****

$('a[href^="#"]').click(function(){
	var the_id = $(this).attr("href");
	$('html, body').animate({
		scrollTop:$(the_id).offset().top
	}, 'slow');
	return false;
});

//***** FIN *****

// ***** PARALLAX *****

$(document).ready(function(){
	$('.parallax').parallax();
});

// ***** FIN *****