$(document).ready(function(){
	$('#eventsMain > div').stop().fadeOut();
	$('#ideazDetails').stop().fadeIn();
	var ar=new Array(33,34,35,36,37,38,39,40);

$(document).keydown(function(e) {
     var key = e.which;
      //console.log(key);
      //if(key==35 || key == 36 || key == 37 || key == 39)
      if($.inArray(key,ar) > -1) {
          e.preventDefault();
          return false;
      }
      return true;
});	
	$('#robo').bind('hover',function(event){
			
			$('#robo').stop().animate({
                        left: -15
                    }, 1000
                    );
			
			
			});
			$('#robo').bind('mouseleave',function(event){
			window.setTimeout(function(){
						$('#robo').stop().animate({
                        left: -270
                    }, 1000
                    );
					},500);
			
			
			
			});
	
	function clear()
		{
			$('#eventList div').removeClass("activeList");
			$('#eventsMain > div').stop().fadeOut(500);
					
		}
		$('#eventList div').bind('click',function(event){
			
					var $anchor = $(this);
					//alert('#'+$anchor.attr('id'));
					if($anchor.attr('id') != "")
					{
					clear();
					
					//alert('#'+$anchor.attr('id')+'Details');
					$anchor.addClass("activeList");
					
					window.setTimeout(function(){
						$('#'+$anchor.attr('id')+'Details').stop().fadeIn(1000);
					}
					,500);
					}
					//$('#'+$anchor.attr('id')+'Details').css("z-index") = $('#'+$anchor.attr('id')+'Details').css("z-index") + 10;
			});
	
	
	
	function reset(){
			$('header div.menu ul li a').removeClass("active");
			}
			
	$('header div.menu ul li a').bind('click',function(event){
					var $anchor = $(this);
					reset();
					$anchor.addClass("active");
					//alert($anchor.attr('href'));
                    $('html, body').stop().animate({
                        scrollTop: $("div#"+$anchor.attr('id')).offset().top
                    }, 1000,'easeOutCubic'
                    );
                    
                });
     $(window).bind('scroll',function(e){
     	
     	var top = $(this).scrollTop();
     	//alert(top);
     	if(top > 600){
     		$("header").css('top','0px');
     	}
     	else{
     		$("header").css('top','-80px');
     		reset();
     	}
		if(top>600 && top<1400){
			reset();
			$('header div.menu ul li a#about').addClass("active");
		}
		else if(top>1400 && top<1800){
			reset();
			$('header div.menu ul li a#events').addClass("active");
		}
		else if(top>2200 && top<3000){
			reset();
			$('header div.menu ul li a#spon').addClass("active");
		}
		else if(top>3000 && top<3700){
			reset();
			$('header div.menu ul li a#team').addClass("active");
		}
		else if(top>3700 && top<4500){
			reset();
			$('header div.menu ul li a#contact').addClass("active");
		}
     });
	 //spnsor flip
	 $('.sponsorFlip').bind("click",function(){
		var elem = $(this);
		if(elem.data('flipped'))
		{
			elem.revertFlip();
			elem.data('flipped',false);
		}
		else
		{
			elem.flip({
			direction:'rl',
			speed: 350,
			onBefore: function(){
				elem.html(elem.siblings('.sponsorData').html());
				}
			});
			elem.data('flipped',true);
		}
	});
	 //this is for scroll
	 
	 $('.scrolling').bind("click",function(){
	 var scrol = $(this);
	 
	 
	 
	 
	 });
}); 