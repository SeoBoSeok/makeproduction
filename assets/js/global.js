/* global helloScreenReaderText */
(function( $ ) {

	var Common = (function(){
	var headerScroll = false;
	var oldDeviceCheck;

	return {
		init : function(){
			//Common.preLoader();
			Common.deviceCheck();
			Common.adminbarCheck();
			Common.mobileMenu();
			Common.scrollMenu();
			Common.smoothScroll();
			Common.animateScript();	
			Common.projectItem();
			Common.recentSlide();
			Common.recentItem();
			//Common.owlScroll();
			
			var cachedWidth = $(window).width();
			$(window).resize(function(){
				var newWidth = $(window).width();
				if(newWidth !== cachedWidth){
					//DO RESIZE HERE
					Common.deviceCheck();
					Common.adminbarCheck();
					Common.mobileMenuReset();
					Common.projectItem();
					Common.recentSlide();
					Common.recentItem();
					cachedWidth = newWidth;
				}
			});
		},
		
		preLoader: function(){
			imageSources = []
			$('img').each(function() {
				var sources = $(this).attr('src');
				imageSources.push(sources);
			});
			if($(imageSources).load()){
				$('.pre-loader').fadeOut('slow');
			}
		},
		adminbarCheck : function(){
			var adminbarHeight = $('#wpadminbar').outerHeight();
			var headerHeight = $('.header').outerHeight();
			$('.wrap').css({'padding-top':headerHeight});
			
			if($('body').hasClass('admin-bar') == true){
				$('.header').css({top:adminbarHeight});
			}

			$(window).scroll(function () {
				if($('body').hasClass('admin-bar') == true){
					if ($(window).scrollTop() > 100) {
						if($(window).width() > 600){
							$('.header').css({top:adminbarHeight});
						}else{
							$('.header').css({top:0});
						}						
					}	else {
						$('.header').css({top:adminbarHeight});
					}		
				}else{					
					$('.header').css({top:0});						
				}
				
			});
		},
		mobileMenuReset : function(){
			$('#simple-menu').removeClass('is-active');
			TweenMax.to($('.mgnb_wrap'), 0.5,{autoAlpha:0,ease: Power3.easeOut});
			$('.mgnb_wrap').stop().slideUp(300);
		},

		scrollMenu: function(){
			var num = 200;			
			$(window).scroll(function () {
				if ($(window).scrollTop() > num) {
					$('.header').addClass('scrolled');
					TweenMax.to($('#topcontrol'), 0.5,{autoAlpha:1,ease: Power3.easeOut});
				} else {
					$('.header').removeClass('scrolled');
					TweenMax.to($('#topcontrol'), 0.5,{autoAlpha:0,ease: Power3.easeOut});
				}
			});
			$('#topcontrol').click(function(){
				$('body,html,header').animate({scrollTop:0},1e3);return false;
			})
		},

		smoothScroll: function() {
			// Smooth Scrolling
			$('a[href*=#].smooth').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		},

		animateScript: function() {
			$('.scrollpoint.sp-effect1').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInLeft');},{offset:'100%'});
			$('.scrollpoint.sp-effect2').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInRight');},{offset:'100%'});
			$('.scrollpoint.sp-effect3').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInDown');},{offset:'100%'});
			$('.scrollpoint.sp-effect4').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeIn');},{offset:'100%'});
			$('.scrollpoint.sp-effect5').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInUp');},{offset:'100%'});
		},

		deviceCheck : function(){
			var DeviceCheck;
			var w = $(window).width();
			var h = $(window).height();

			if(w < 768){
				DeviceCheck = "M";
			}else if(w > 767 && w < 992){
				DeviceCheck = "T";
			}else if(w > 991){
				DeviceCheck = "W";
			}

			if(DeviceCheck != oldDeviceCheck){
				oldDeviceCheck = DeviceCheck;
				
				$.each($(".mgnb > li"),function(i,val){
					$(val).css("height",(oldDeviceCheck == "M") ? 53 : 600);
				});

				$('.mgnb_wrap').css("height",h);

				$("html").removeClass("device_W");
				$("html").removeClass("device_T");
				$("html").removeClass("device_M");
				$("html").addClass("device_"+oldDeviceCheck);
			}
		},

		mobileMenu : function(){
			$("#simple-menu").on("click",function(e){
				e.preventDefault();
				if($(this).hasClass("is-active")){
					$(this).removeClass("is-active");
					TweenMax.to($(".mgnb_wrap"), 0.5,{autoAlpha:0,ease: Power3.easeOut});
					$('.mgnb_wrap').stop().slideUp(300);
				}else{
					$(this).addClass("is-active");
					$('.mgnb_wrap').stop().slideDown(300);
					TweenMax.to($(".mgnb_wrap"), 0.5,{autoAlpha:1,ease: Power3.easeOut});
				}
		   });

		   $.each($(".mgnb > li"),function(i,val){
			  if($(val).find(".sub-menu").length == 0){
				 $(val).addClass("nsm");
			  }
		   });

		   $(".device_M .mgnb > li > a").on("click",function(e){
			  if(!$(this).parent().hasClass("nsm")){
				 e.preventDefault();
				 var liH = 53;
				 var subH = $(this).parent().find(".sub-menu").outerHeight() + (liH + 1);

				 if($(this).parent().hasClass("sshow")){
					TweenMax.to($(this).parent(), 0.5,{"height":liH,ease: Power3.easeOut});
					$(this).parent().removeClass("sshow");
				 }else{
					$.each($(".mgnb > li"),function(i,val){
					   if($(val).hasClass("sshow")){
						  TweenMax.to($(val), 0.5,{"height":liH,ease: Power3.easeOut});
						  $(val).removeClass("sshow");
					   }
					});

					TweenMax.to($(this).parent(), 0.5,{"height":subH,ease: Power3.easeOut});
					$(this).parent().addClass("sshow");
				 }
			  }
		   });

		},
		recentSlide: function(){
			if($('.recent-list').length){
				$('.recent-list').owlCarousel({
					loop:true,
					nav:true,
					navText: ['<span></span>', '<span></span>'],
					items: recentItem(),
					stagePadding: stp2,
					margin: 10,
					onChanged :function(){
						recentItemAlign();
					}
				})
			}
		},
		recentItem: function(){
		  setTimeout(recentItemAlign, 200);
		},
		projectItem: function(){
			if($('.project-list').length){
				setTimeout(projectItem, 200);
			}
		},
		owlScroll: function(){
			var owl = $('.owl-carousel');
			owl.on('mousewheel', '.owl-stage', function (e) {
					if (e.deltaY>0) {
							$(this).trigger('next.owl');
					} else {
							$(this).trigger('prev.owl');
					}
					e.preventDefault();
			});
		}

		
	}
})();
function recentItem(){
	var windowWidth = $(window).width();
	if(windowWidth > 760){
		return 3;
	}else{
		return 2;
	}
}
function projectItem(){
	$('.project-item').each(function(){
		var projectWidth = $(this).find('.project-inner').width();
		var projectHeight = projectWidth*.56818;
		var projectImgWidth = $(this).find('.project-img').width();
		var projectImgHeight = $(this).find('.project-img').height();
		var projectImgRt = projectImgHeight/projectImgWidth;
		$(this).find('.project-imgCont').css({height: .56818*projectWidth, 'overflow':'hidden'});
		if(projectImgRt > .56818){
			$(this).find('.project-img').css({width:projectWidth, height: projectWidth*projectImgRt, 'margin-top':-.5*projectWidth*(projectImgRt-.56818)});
		} else {
			$(this).find('.project-img').css({width:projectHeight/projectImgRt, height:projectHeight, 'margin-left':-.5*projectWidth*(.56818/projectImgRt -1)});
		}
	})
}
function stp2(){
	var windowWidth = $(window).width();
	var containerWidth = $('.standard').width();
	var stpWidth = .5*(windowWidth-containerWidth-21);
	return stpWidth;
}
function recentItemAlign(){
	if($('.recent-list').length){
		$('.recent-list .owl-item').each(function(){
			var recentWidth = $(this).find('.item').width();
			var recentImgWidth = $(this).find('.recent-img').width();
			var recentImgHeight = $(this).find('.recent-img').height();
			var recentImgRt = recentImgHeight/recentImgWidth;
			$(this).find('.recent-imgCont').css({width:recentWidth, height: .65*recentWidth, 'overflow':'hidden'});
			if(recentImgRt > .65){
				$(this).find('.recent-img').css({width:recentWidth, height:recentWidth*recentImgRt, 'margin-top':-.5*recentWidth*(recentImgRt-.65)});
			} else {
				$(this).find('.recent-img').css({width:.65*recentWidth/recentImgRt, height:.65*recentWidth, 'margin-left':-.5*recentWidth*(.65/recentImgRt -1)});
			}
		})
	}
}

$(function(){
	Common.init();
});

})( jQuery );
