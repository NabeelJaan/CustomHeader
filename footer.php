

<script>
    function subMenuSlide() {
			if( jQuery(window).width() < 768 ) {
				jQuery('.sub-menu').children().click(function(){
					event.preventDefault();
					jQuery(this).children('.sub-menu').slideToggle('slow');     
				});
			}
		};
		window.addEventListener('load', function() {
			subMenuSlide();
		});
		window.addEventListener('resize', function() {
			subMenuSlide();
		});
</script>
</body>
</html>