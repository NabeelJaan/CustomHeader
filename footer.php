
<?php wp_footer();?>
<script>
  jQuery('.navbar-nav').children().click(function(){
        event.preventDefault();
        jQuery(this).children('.sub-menu').slideToggle('slow');     
    });
</script>
</body>
</html>