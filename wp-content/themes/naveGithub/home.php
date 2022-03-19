<?php get_header( 'home' ); ?>
  <a class="fullscreen-item" data-item-number="0" href="<?=get_permalink(get_page_by_title( 'Estrelas' ))?>">
    <div class="image"></div>
    <span>ESTRELAS</span>
  </a>
  <a class="fullscreen-item" data-item-number="1" href="<?=get_permalink(get_page_by_title( 'Sobre' ))?>">
    <div class="image"></div>
    <span>SOBRE</span>
  </a>
  <a class="logo" data-item-number="2">
    <img src="<?=get_template_directory_uri();?>/assets/imgs/NAVE-branco.svg">
  </a>
  <a class="fullscreen-item" data-item-number="3"  id="contact_toggle">
    <div class="image"></div>
    <span>CONTATO</span>
  </a>
  <a class="fullscreen-item" data-item-number="4" href="<?=get_permalink(get_page_by_title( 'Staff' ))?>">
    <div class="image"></div>
    <span>STAFF</span>
  </a>
<?php get_footer( 'home' ); ?>

