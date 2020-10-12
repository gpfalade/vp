<script type="text/javascript" src="jquery.js"></script>


<script type="text/javascript">
$(document).ready(function() {
	 
	    $('.scrollingtext').bind('marquee', function() {
	        var ob = $(this);
	        var tw = ob.width();
	        var ww = ob.parent().width();
	        ob.css({ right: -tw });
	        ob.animate({ right: ww }, 20000, 'linear', function() {
	            ob.trigger('marquee');
	        });
	    }).trigger('marquee');
	 
	});
	</script>