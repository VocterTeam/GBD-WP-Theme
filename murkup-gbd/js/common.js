$(document).ready(function(){
	$(".js-header-menu-button").click(function() {
		var menuIcon = $(this).children(".icon-bar"),
		menuList = $(this).next();

		if (!menuIcon.hasClass("active")){
			menuIcon.addClass("active");
			menuList.slideDown();
		} else {
			menuIcon.removeClass("active");
			menuList.slideUp();
		}
	});

	$(".js-main-slder").owlCarousel({
		items: 1,
		nav: false,
		dots: true,
		loop: true,
		navSpeed: 2000,
		dotsSpeed: 2000,
		autoplaySpeed: 2000,
		autoplay: true,
		autoplayTimeout: 8000,
		navText: ["", ""],
	});

	toggleContactsSelect(".js-contacts-select");

	toggleLang(".js-lang");

});

function toggleContactsSelect(elem) {
	var selectHead = $(elem).children(".contacts__select-head"),
	selectList = $(elem).children(".contacts__select-list"),
	selectItem = $(elem).find(".contacts__select-item");

	selectHead.text(selectItem.eq(0).text());

	$(selectItem).click(function() {
		selectHead.text($(this).text());

		selectHead.removeClass("active");

		selectList.hide();
	});

	$(selectHead).click(function() {
		if (!selectHead.hasClass("active")){
			selectHead.addClass("active");

			selectList.show();
		} else {
			selectHead.removeClass("active");

			selectList.hide();
		}
	})

	$(document).click(function(event){
		if ($(event.target).closest(elem).length) return;

		selectHead.removeClass("active");

		selectList.hide();
	});
}

function toggleLang(elem) {
	var langList = $(elem).children(".header__lang-list"),
	langHeadder = $(elem).children(".header__lang-head"),
	langItem = langList.children(".header__lang-item");

	langHeadder.html(langItem.eq(0).html());

	langHeadder.click(function() {
		if (!$(this).hasClass("active")){
			$(this).addClass("active");
			langList.show();
		} else {
			$(this).removeClass("active");
			langList.hide();
		}
	});


	$(document).click(function(event){
		if ($(event.target).closest(elem).length) return;

		langList.hide();
	});

	langItem.click(function() {
		langHeadder.html($(this).html());

		langList.hide();
	});

	$('.js-about').parallax("50%", -0.3);
}

function initMap() {
	var map;

	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 34.942736, lng: 33.618996},
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.TERRAIN,
		scrollwheel: false, 
	});

	var marker = new google.maps.Marker({
		position: map.center
	});

	marker.setMap(map);
}