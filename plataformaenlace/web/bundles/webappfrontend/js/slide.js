// JavaScript Document
var indicador=0;
$(document).on('ready',function(){
	$('.left').on('click',function(e){
		e.preventDefault();
		moverSlider('left');
		});
		
	$('.right').on('click',function(e){
		e.preventDefault();
		moverSlider('right');
		});
	
	definirTamano();
	});
	
	$(window).on('resize',definirTamano);
	function definirTamano(){
		$('.slider .rotador').each(function(i,elemento) {
			$(elemento).css({
				'background-image': "url("+$(elemento).data("background")+")",
				'height': ($('.slider').width() * 0.48)+'px',
				'width': ($('.slider').width())+'px'
			}); 
        });
		$('.slider .slider_container').css({
			'margin-left': -(indicador * $('.slider').width())+'px'
		});
	}
	
	function moverSlider(direction){
		var limite = $('.slider .rotador').length;
		indicador = (direction == 'right') ? indicador + 1 : indicador - 1;
		indicador = (indicador >= limite) ?  0 : indicador;
		indicador = (indicador < 0) ? limite - 1 : indicador;
		
		$('.slider .slider_container').animate({
			'margin-left': -(indicador * $('.slider').width())+'px'
			});
		}