$('.experience .owl-carousel').owlCarousel({
	loop:true,
	margin:10,
	items: 1,
	autoplay: true
})

$('.product-slider .owl-carousel').owlCarousel({
	items: 3,
	nav: true,
	navText:[
		"<span aria-label='Previous'><svg xmlns='http://www.w3.org/2000/svg' width='23' height='23' fill='currentColor' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/></svg></span>",
		"<span aria-label='Next'><svg xmlns='http://www.w3.org/2000/svg' width='23' height='23' fill='currentColor' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/></svg></span>"
		],
	dots: false
})

$(".nav-toggle").on("click", function() {
	var pageHead = $("head");
	var pageBody = $("body");
	var header = $(".header");
	var toggle = $(this);
	var navInner = $(".navigation-inner");
	var navMobile = $(".nav-mobile");
	var actionLinks = $(".header-action-links");

	if(header.hasClass('nav-active')) {
		pageHead.prop("style", "");
		pageBody.removeClass("no-scroll");
		pageBody.prop("style", "");
		header.removeClass("nav-active");
		toggle.removeClass("active");
		navInner.removeClass("active");
		navMobile.hide();
		actionLinks.removeClass("active");
	} else {
		pageHead.css({
					"height": "100vh"
				})
		pageBody.addClass("no-scroll")
		pageBody.css({
					"overflow": "hidden",
					"top": "0"
				})
		header.addClass("nav-active")
		toggle.addClass("active");
		navInner.addClass("active");
		navMobile.show();
		actionLinks.addClass("active");
	}
});

$(".nav-item-link").on("click", function() {
	var item = $(".nav-item");
	var layer = $(this).next(".nav-mobile-layer");
	var imageItem = $(".nav-mobile-image-item");
	
	item.addClass("flyout");
	imageItem.addClass("flyin");
	layer.addClass("visible");
	layer.show();
});

$(".nav-back").on("click", function() {
	var item = $(".nav-item");
	var layer = $(this).closest(".nav-mobile-layer");
	var imageItem = $(".nav-mobile-image-item");
	
	item.removeClass("flyout");
	imageItem.removeClass("flyin");
	layer.removeClass("visible");
	layer.hide();
});
