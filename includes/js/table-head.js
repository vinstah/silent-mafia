var TABLE = {};
//TABLE.fixHeader = function(table) {
	$('#click').each(function() {
		var $table = $(this);
		var $thead = $table.find('thead');
		var $ths = $thead.find('th');
		$table.data('top', $thead.offset().top);
		$table.data('left', $thead.offset().left);
		$table.data('bottom', $table.data('top') + $table.height() -
		$thead.height()); 
		//fake thead
		var $list = $('<ul class="faux-head"></ul>');
		$ths.each(function(i) {
			_th = $(this);
			$list.append($("<li></li>")
			.addClass(_th.attr("class"))
			.html(_th.html()) 
			.width(_th.width())
			.click(function() {
			_th.click()
			})
			).hide().css({left: _table.left});
		});//end of $ths.each
		
		$('body').append($list);
		
		//set scrolling
		$(window).scroll(function() {
			setTimeout(function() {
				if ($table.data('top') < $(document).scrollTop() &
				$(document).scrollTop() < $table.data('bottom')) {
				
				$list
				.show()
				.stop()
				.animate({
					top: $(document).scrollTop(),
					opacity: 1
				});

			}
				else {

					$list.fadeOut(function() {
					$(this).css({top: $table.data('top')});
					});
				}//end of else
			
			}, 100);//end set time out
		
		});//end of scroll
	
	
});//table.each end
//}//end of TABLE

//$(function() {
	
	TABLE.fixHeader('#click');