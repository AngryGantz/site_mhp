function slide1(){
	lft = $('#bg11').css('direction');
    if (lft!='ltr') return;
    $('#bg11').css('direction','rtl');
    $('#bg11').animate(
        {left:'-=60px'}, 1000, function(){
        	$('#bg12').show();
	        $('#bg11').animate({left:'-=1920px'}, 1500, 'easeOutCirc');      
	        $('#bg12').animate({left:'-=1920px'}, 1500, 'easeOutCirc');      
            setTimeout(function() {
            		$('#fg21').show();
	                $('#fg21').animate({left:'200px'}, 2000,'easeOutBack')
	                $('#fg21').animate({top:'-=90px', left: '+=135px'}, 1000,'easeOutExpo');
	                $('#fg22').animate({left:'200px'}, 2000,'easeOutBack', function(){$('#fg22').toggle();})
	                $('#fg23').animate({left:'200px'}, 2000,'easeOutBack', function(){$('#fg23').toggle();})
	                $('#fg23').animate({top:'+=105px'}, 1000,'easeOutExpo');
	                $('#fg24').animate({left:'200px'}, 2000,'easeOutBack', function(){$('#fg24').toggle();})
	                $('#fg24').animate({top:'+=210px'}, 1000,'easeOutExpo');
	                $('#fg25').animate({left:'200px'}, 2000,'easeOutBack', function(){$('#fg25').toggle();})
	                $('#fg25').animate({top:'+=315px'}, 1000,'easeOutExpo');
       	        	$('#bg11').animate({top: '1500px'}, 10)
       	        		.animate({left: '1920px'}, 10)
			        		.animate({top: '0px'}, 10);
			        		$('#bg11').hide();
					$('#bg12').css('direction','ltr');
            }, 1500);
        } 
    );
}



function slide2(){
	lft = $('#bg12').css('direction');
	/* window.alert(lft); */
    if (lft!='ltr') return;
    $('#bg12').css('direction','rtl');
	 
	$('#bg12').animate(
	    {left:'-=60px'}, 1000, function(){
	    	$('#bg13').show();
	        $('#bg12').animate({left:'-=1920px'}, 1500, 'easeInExpo');      
	        $('#bg13').animate({left:'0px'}, 1500, 'easeInExpo', function(){
	        });
			setTimeout(function() {
				$('#fg31').show();
				$('#fg31clear').show();
				$('#fg32').show();
				$('#fg32clear').show();

	            $('#fg31').slideUp(50);
	            $('#fg31clear').animate({left:'350px', top: '150px'}, 1500,'easeOutQuint');
	            $('#fg31').animate({left:'350px', top: '150px'}, 1500,'easeOutQuint');
	            $('#fg32clear').animate({left:'350px', top: '580px'}, 1500,'easeOutQuint');
	            $('#fg32').animate({left:'350px', top: '580px'}, 1500,'easeOutQuint', function(){
	                $('#fg31').slideDown(1000);
	                $('#fg32').fadeTo(1500,1); 
	             	$('#bg12').css('left','1920px');
	             	$('#bg12').hide();   
	             	$('#bg13').css('direction','ltr');
	            });
			}, 1500);
	        $('#fg21').animate({left:'-=1930px', top: '300px'}, 3000,'easeOutExpo');
	        $('#fg22').animate({left:'-=1930px', top: '300px'}, 3000,'easeOutExpo');
	        $('#fg23').animate({left:'-=1930px', top: '300px'}, 3000,'easeOutExpo');
	        $('#fg24').animate({left:'-=1930px', top: '300px'}, 3000,'easeOutExpo');
	        $('#fg25').animate({left:'-=1930px', top: '300px'}, 3000,'easeOutExpo', function(){
	        	$('#fg21').toggle();
	        	$('#fg22').toggle();
	        	$('#fg23').toggle();
	        	$('#fg24').toggle();
	        	$('#fg25').toggle();
	        })
	    } 
	);
}


function slide3(){
	lft = $('#bg13').css('direction');
    if (lft!='ltr') return;
    $('#bg13').css('direction','rtl');
	$('#bg13').animate(
	    {left:'-=60px'}, 1000, function(){
        	$('#fg42').show();
        	$('#fg43').show();
        	$('#fg44').show();
        	if (flagFlip==0) {
    		$('#fg42').flipper();
    		$('#fg43').flipper();
    		$('#fg44').flipper();
    		flagFlip=1;
    		};
	    	$('#bg14').show();
	        $('#bg13').animate({left:'-=1920px'}, 1500, 'easeInOutCubic');      
	        $('#bg14').animate({left:'0px'}, 1500, 'easeInOutCubic', function(){
	        	$('#bg13').animate({top: '1500px'}, 10)
    	       		.animate({left: '1920px'}, 10)
		        		.animate({top: '0px'}, 10);
		   		$('#bg13').hide();
	        });
	        setTimeout(function() {
	        	$('#fg41clear').show();
	        	$('#fg41').show();
	    	    $('#fg41clear').animate({left:'450px', top: '250px'}, 1500,'easeInOutQuint');
		        $('#fg41').animate({left:'450px', top: '250px'}, 1500,'easeInOutQuint');
	            $('#fg43').animate({left:'700px', top: '400px'}, 1500,'easeInQuint');
	            $('#fg44').animate({left:'950px', top: '400px'}, 1500,'easeInQuint');
	            $('#fg42').animate({left:'450px', top: '400px'}, 1500,'easeInQuint', function(){
		               setTimeout(function() {$('#fg41').fadeTo(1500,1);}, 500);
	                   setTimeout(function() {$('#fg42').flipper();}, 1000);
	                   setTimeout(function() {$('#fg43').flipper();}, 1500);
	                   setTimeout(function() {$('#fg44').flipper();}, 2000);
	            });
	            $('#fg31').slideUp(1000);
    	        $('#fg32').fadeTo(1000,0); 
				$('#fg31').hide();
				$('#fg31clear').hide();
				$('#fg32').hide();
				$('#fg32clear').hide();
				$('#bg14').css('direction','ltr');

	        }, 1500);
	        $('#fg31').animate({left:'-=1930px', top: '300px'}, 3000,'easeOutExpo');
	        $('#fg31clear').animate({left:'-=1930px', top: '300px'}, 3000,'easeOutExpo');
	        $('#fg32').animate({left:'-=1930px', top: '300px'}, 3000,'easeOutExpo');
	        $('#fg32clear').animate({left:'-=1930px', top: '300px'}, 3000,'easeOutExpo');
	    } 
	);
}

function slide4(){
	lft = $('#bg14').css('direction');
    if (lft!='ltr') return;
    $('#bg14').css('direction','rtl');
	$('#bg14').animate(
	    {left:'-=60px'}, 1000, function(){
	    	$('#bg11').show();
	        $('#bg14').animate({left:'-=1920px'}, 1500, 'easeInExpo');      
	        $('#bg11').animate({left:'-=1920px'}, 1500, 'easeInExpo',function(){$('#bg11').css('direction','ltr');}); 

		    $('#fg41clear').animate({left:'1930px', top: '300px'}, 1000,'easeInOutQuint');
	        $('#fg41').animate({left:'1930px', top: '300px'}, 1000,'easeInOutQuint');
	        $('#fg43').animate({left:'1930px', top: '300px'}, 1000,'easeInQuint');
	        $('#fg44').animate({left:'1930px', top: '300px'}, 1000,'easeInQuint');
	        $('#fg42').animate({left:'1930px', top: '300px'}, 1000,'easeInQuint', function(){
				$('#fg41').hide();
	            $('#fg41clear').hide();
	            $('#fg42').hide();
	            $('#fg43').hide();
	            $('#fg44').hide();

	        	$('#bg14').animate({top: '1500px'}, 10)
	        		.animate({left: '1920px'}, 10)
	        		.animate({top: '0px'}, 10);
	        });
            $('#fg41').fadeTo(50,0);
            $('#fg42').flipper();
            $('#fg43').flipper();
            $('#fg44').flipper();
	    } 
	);
}
