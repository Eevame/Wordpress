<script>
jQuery(document).ready(function($) {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 30) { // Adjust the scroll threshold as needed
            $('.logo-fp.wp-block-site-logo.is-default-size img').addClass('scrolled');
        } else {
            $('.logo-fp.wp-block-site-logo.is-default-size img').removeClass('scrolled');
        }
    });
});

</script>