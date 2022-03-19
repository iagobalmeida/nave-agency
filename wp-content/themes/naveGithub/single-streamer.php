<?php
if ( is_home() ) :
  get_header( 'home' );
elseif ( is_404() ) :
  get_header( '404' );
else :
  get_header();
endif;
?>

<h1>ESTRELA</h1>
<pre>
<?php

var_dump($streamer);
var_dump(get_fields($id));
?>
</pre>
<?php
if ( is_home() ) :
  get_footer( 'home' );
elseif ( is_404() ) :
  get_footer( '404' );
else :
  get_footer();
endif;
?>