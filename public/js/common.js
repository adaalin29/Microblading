 $(document).ready(function() {

	$(window).load(function(){   
        if ($('.grid').length){
            var container = document.querySelector('.grid');
            var msnry = new Masonry( container, {
                // options
                itemSelector: '.grid-item',
                gutter: 0,
                isFitWidth: true

            });
        }
     });

 		var HeaderBanner=new Swiper('.header-banner .swiper-container', {
 				pagination: {
 					el: '.swiper-pagination-elemente',
 					type: 'bullets',
 				}

 				,
 				autoplay: {
 					delay: 2000,
 				}

 				,
 			}

 		);
 		var slidesMobile=3;

 		if(screen.width<=1024) {
 			slidesMobile=2;
 		}

 		if(screen.width<=768) {
 			slidesMobile=1;
 		}

 		var IndexClasses=new Swiper('.classes-swiper .swiper-container', {

 				slidesPerView: slidesMobile,
 				spaceBetween: 30,
 				slidesPerGroup: 3,
 				loop: true,
 				loopFillGroupWithBlank: true,
 				navigation: {
 					nextEl: '.swiper-button-next',
 					prevEl: '.swiper-button-prev',
 				}

 				,
 			}

 		);
 		var slidesMobileElemente=2;

 		if(screen.width<=768) {
 			slidesMobileElemente=1;
 		}

 		var SwiperElemente=new Swiper('.elemente-swiper-container .swiper-container', {

 				slidesPerView: slidesMobileElemente,
 				spaceBetween: 30,
 				loop: true,
 				pagination: {
 					el: '.swiper-pagination',
 					clickable: true,
 				}

 				,
 				navigation: {
 					nextEl: '.swiper-button-next',
 					prevEl: '.swiper-button-prev',
 				}

 				,
 			}

 		);

 		var IndexTestimonials=new Swiper('.testimonials-swiper .swiper-container', {

 				slidesPerView: 1,
 				loop: true,
 				loopFillGroupWithBlank: true,
 				navigation: {
 					nextEl: '.swiper-button-next',
 					prevEl: '.swiper-button-prev',
 				}

 				,
 				pagination: {
 					el: '.swiper-pagination',
 				}

 				,
 				autoplay: {
 					delay: 2000,
 				}

 				,

 			}

 		);
		 var width_container_left=0;
		  var left_item_button=width_container_left;

 		if(screen.width <=1024) {
 			width_container_left=screen.width;
 			left_item_button=-width_container_left;

 			$(".topmenu").click(function() {
 					console.log('da');

 					if($('.sidenav').hasClass('afisat')) {
 						$('.sidenav').removeClass('afisat');

 						$(".sidenav").css( {
 								right:left_item_button+'px'
 							}

 						);
 					}
 				}

 			);
 		}


 		$(".topmenu").click(function() {
 				if($('.sidenav').hasClass('afisat')) {
 					$('.sidenav').removeClass('afisat');

 					$(".sidenav").css( {
 							right: left_item_button+'px'
 						}

 					);
 				}

 				else {
 					$('.sidenav').addClass('afisat');

 					$(".sidenav").css( {
 							right:'0'
 						}

 					);
 				}
 			}

 		);

 		$(".back-button").click(function() {
 				if($('.sidenav').hasClass('afisat')) {
 					$('.sidenav').removeClass('afisat');

 					$(".sidenav").css( {
 							right:'100%'
 						}

 					);
 				}
 			}

 		);
 	}

 )