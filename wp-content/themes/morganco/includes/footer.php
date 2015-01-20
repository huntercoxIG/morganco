<footer>
	<p class="text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<!--	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
		<script type="text/javascript" src="third-party/slick/slick.min.js"></script>
				
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
			$(window).scroll(function() {
    		var scrollPos = $(window).scrollTop();

					if(scrollPos  > 98) {
						if (! $(".navigation").hasClass("scrolled")) {
							$(".navigation").addClass("scrolled");
						}
					} else {
						if ($(".navigation").hasClass("scrolled")) {
							$(".navigation").removeClass("scrolled");
						}
					}
			});
		</script>
    
    <script type="text/javascript">
			$(document).ready(function(){
				$('.slick-about').slick({
					infinite: true,
					slidesToShow: 3,
					slidesToScroll: 1,
					arrows: true
				});
			});
		</script>

<?php wp_footer(); ?>
</body>
</html>
