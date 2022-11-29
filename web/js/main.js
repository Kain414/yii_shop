/*price range*/

$('#sl2').slider();

function showCart(cart) {
	// if (cart != false) {
	// 	Cookies.set('cart', cart);
	// 	$('#cart .modal-body').html(cart);
	// 	$('#cart').modal();
	// } else {
	// 	cart = Cookies.get('cart');
	// 	$('#cart .modal-body').html(cart);
	// 	$('#cart').modal();
	// }
	$('#cart .modal-body').html(cart);
	$('#cart').modal();
}

function getCart() {
	$.ajax ({
		url: '/cart/get',
		type: 'GET',
		success: function (res) {
			if (!res) alert('Ошибка')
			showCart(res);
		},
		error: function () {
			alert('Ошибка!');
		}
	})
}

// $('.cart-btn').click(function (e) {
// 	e.preventDefault();
// 	showCart(false);
// })

$('#cart .modal-body').on('click', '.del-item', function () {
	let id = $(this).data('id');
	$.ajax ({
		url: '/cart/del-item',
		data: {id: id},
		type: 'GET',
		success: function (res) {
			if (!res) alert('Ошибка')
			showCart(res);
		},
		error: function () {
			alert('Ошибка!');
		}
	})
})

function clearCart () {
	$.ajax ({
		url: '/cart/clear',
		type: 'GET',
		success: function (res) {
			if (!res) alert('Ошибка')
			showCart(res);
		},
		error: function () {
			alert('Ошибка!');
		}
	})
}

$('.add-to-cart').click(function(e) {
	e.preventDefault();
	let id = $(this).data('id'),
		qty = $('#qty').val();
	$.ajax ({
		url: '/cart/add',
		data: {id: id, qty: qty},
		type: 'GET',
		success: function (res) {
			if (!res) alert('Нет такого товара!')
			showCart(res);
		},
		error: function () {
			alert('Error');
		}
	})
})

$('.catalog').accordion({
	animate: 150,
	collapsible: true,
	heightStyle: "content"
})

$('.category-no-childs').click(function () {
	window.location.href = $(this).children('a').attr('href');
})

$('.ui-accordion-header').click(function() {
	Cookies.set('select-category',$('.catalog').accordion( "option", "active"))
})

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	if (Cookies.get('select-category') !== undefined) {
		let ui = Cookies.get('select-category')
		$('.catalog').accordion("option", "active", Number(ui));
	}

	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});
