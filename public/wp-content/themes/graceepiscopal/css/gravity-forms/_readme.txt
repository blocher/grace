## Gravity Forms Minimal Stylesheet
by Nathan Swartz, clicknathan.com, design@clicknathan.com ##

1. There are four stylesheets:

## style.css - copy and paste this into an existing stylesheet in your WordPress theme if you just want to add these styles to your site.

## style.min.css - a minified version of the above

## style-icons.css - this will add a few nifty icons for things like credit card forms

## style-icons.min.css - the minified version

2. Using Icons

If you want to use the icons, you need to copy the files in the /font/ folder, use the style-icons.css or style-icons.min.css files, and make sure the paths are correct. The stylesheets reference a path like:

  assets/fonts/

So if your style sheet is in /wp-content/themes/YOURTHEMENAME/style.css

Then you want to put those fonts into a folder called “fonts” inside of another folder called “assets”.

3. jQuery.

## Calendar Icon

You’ll also need to add this jQuery if you want to replace the calendar icon. Find somewhere that jQuery is already being used on your site, and add the following:

  var datepicker_image = $('div.ginput_container_date input.datepicker_with_icon').next('img'),
      calendar_icon = '<?php echo get_stylesheet_directory_uri(); ?>/img/calendar.svg'; 
  $(datepicker_image).attr('src', calendar_icon);

## Chosen Dropdowns

You’ll need to add this jQuery too to make chosen dropdown look right:

  $('.chosen-container').each(function(){
    $(this).parent('.ginput_container_select').addClass('chosen-after');
  });

If your site doesn’t have anywhere you can put some jQuery, you can add this to the footer.php file, beneath the call to wp_footer();

<script type="text/javascript">
jQuery(document).ready(function($) {

  $('.chosen-container').each(function(){
    $(this).parent('.ginput_container_select').addClass('chosen-after');
  });

  var datepicker_image = $('div.ginput_container_date input.datepicker_with_icon').next('img'),
      calendar_icon = '<?php echo get_stylesheet_directory_uri(); ?>/img/calendar.svg'; 
  $(datepicker_image).attr('src', calendar_icon);

});
</script>

   
