(function( $ ) {
	var Main = (function(){
	  return {

		init : function(){
		  Main.mainSlide();
			
		  
			var cachedWidth = $(window).width();
			$(window).resize(function(){
				var newWidth = $(window).width();
				if(newWidth !== cachedWidth){
					Main.mainSlide();
				}
			})
		},

		mainSlide: function(){
				$('#slider1').owlCarousel({
					loop:true,
					nav:true,
					navText: ['<span></span>', '<span></span>'],
					items: mainItem(),
					stagePadding: stp,
					onInitialize: function(){
					},
					onResized: function(){
											
					}
				});
				$('.owl-item').each(function(){
					var itemWidth = $(this).find('.item').width();
					$(this).find('.msl-img').css({height:itemWidth});
				})
				var itemWidth1 = $('#slider1').find('.owl-item:first-child .item').width();
				$('#slider1 .owl-nav').css({top:.5*itemWidth1-30});


		},
		



		section2Item: function(){
		  setTimeout(section2Items, 200);
		},
		section4Item: function(){
		  setTimeout(section4Items, 200);
		},
		section6Item: function(){
		  setTimeout(section6Items, 300);
		},
		tvItemAlign:function(){
		  if($('.tv-list').length){
			$('.tv-item').each(function(){
			  var tvWidth = $(this).find('.tv-inner').width();
			  var tvHeight = $(this).find('.tv-inner').height();
			  var tvImgWidth = $(this).find('.tv-img').width();
			  var tvImgHeight = $(this).find('.tv-img').height();
			  var tvImgRt = tvImgHeight/tvImgWidth;
			  //console.log(tvWidth+'/'+tvHeight+'/'+tvImgWidth+'/'+tvImgHeight+'/'+tvImgRt)
			  $(this).find('.tv-imgCont').css({height: .4473*tvWidth, 'overflow':'hidden'});
			  $(this).find('.tv-imgLink').css({width:tvWidth, height:.4473*tvWidth});
			  if(tvImgRt > .4473){
				$(this).find('.tv-img').css({width:tvWidth, height:tvWidth*tvImgRt, 'margin-top':-.5*tvWidth*(tvImgRt-.4473)});
			  } else {
				$(this).find('.tv-img').css({width:.4473*tvWidth/tvImgRt, height:.4473*tvWidth, 'margin-left':-.5*tvWidth*(.4473/tvImgRt -1)});
			  }
			})
		  }
		},

		pressItemAlign:function(){
		  if($('.press-list').length){
			setTimeout(pressAlign, 300)
		  }
		},

		reviewItemAlign:function(){
		  $('body').on('click', '.manual-tabs li a', function(){
			setTimeout(reviewAlign, 200);
		  })
		  if($('.review-list').length){
			reviewAlign();
		  };
		}

	  }
	})();
	function stp(){
		var windowWidth = $(window).width();
		var containerWidth = $('.standard').width();
		var stpWidth = .5*(windowWidth-containerWidth);
		return stpWidth;
	}	
	function mainItem(){
		var windowWidth = $(window).width();
		if(windowWidth > 760){
			return 2;
		}else{
			return 1;
		}
	}
	$(function(){
	  Main.init();
	});
})( jQuery );
