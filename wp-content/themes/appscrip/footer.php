<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appscrip
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
    function scrollToSection(sectionId) {
      var section = document.getElementById(sectionId);
      window.scrollTo({
        behavior: 'smooth',
        top: section.offsetTop - 60
      });
    }
  </script>

<script>
jQuery(document).ready(function(){
	if (window.matchMedia('(max-width: 480px)').matches)
    {
		jQuery(".table-content ul").hide();
        //do desired changes
		jQuery(".table-content .head").click(function(){
			jQuery(".table-content ul").toggle("slide");
		});
    }
	
});
</script>
<script>
	jQuery('.moreless-button').click(function(e) {
		jQuery('.moretext').slideToggle();
		if (jQuery('.moreless-button').text() == "View more features") {
			jQuery(this).text("View less features")
		} else {
			jQuery(this).text("View more features")
		}
		// Cancel the default action
		e.preventDefault();
	});
</script>
<!-- JS script -->
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
