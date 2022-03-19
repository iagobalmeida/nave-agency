<?php
if ( is_home() ) :
  get_header( 'home' );
elseif ( is_404() ) :
  get_header( '404' );
else :
  get_header();
endif;
?>

<?php
if ( is_home() ) :
  get_footer( 'home' );
elseif ( is_404() ) :
  get_footer( '404' );
else :
  get_footer();
endif;
?>