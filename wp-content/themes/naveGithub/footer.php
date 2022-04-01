<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

 
?>

<?php include get_template_directory().'/contact-form.php'; ?>
      </main>
      <nav>
        <a class="item" href="<?=get_permalink(get_page_by_title( 'Estrelas' ))?>">
          <span>ESTRELAS</span>
        </a>
        <a class="item"  href="<?=get_permalink(get_page_by_title( 'Staff' ))?>">
          <span>STAFF</span>
        </a>
        <a class="logo"href="<?= home_url(); ?>">
          <img src="<?=get_template_directory_uri();?>/assets/imgs/NAVE-branco.svg">
        </a>
        <a class="item" href="<?=get_permalink(get_page_by_title( 'Sobre' ))?>">
          <span>SOBRE</span>
        </a>
        <a class="item" id="contact_toggle">
          <span>CONTATO</span>
        </a>
      </nav>
  <script>
    
document.addEventListener("DOMContentLoaded", function(e) {
  try {
    const backgroundElem = document.querySelector('.background-video');
    backgroundElem.style.opacity = 1;
  }catch(error) {
    console.log(error.message);
  }



  try {
    const contactForm = document.querySelector('.contact-wrapper');
    const contactClose = document.querySelector('.contact-wrapper .close');
    const contactToggles = [...document.querySelectorAll('#contact_toggle')];
    contactToggles.forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        contactForm.classList.toggle('active');
      })
    });
    contactClose.addEventListener('click', (e) => {
      contactForm.classList.toggle('active');
    });
  }catch(error) {
    console.log(error.message);
  }


  try {
    const headerToggle = document.querySelector('#headerToggleNav');
    headerToggle.addEventListener('click', (e) => {
      const nav = document.querySelector('nav');
      nav.classList.toggle('active');
    });
  }catch(error) {
    console.log(error.message);
  }
  try {
    const colCards = document.querySelectorAll('.col-card');
    colCards.forEach((colCard) => {
      colCard.addEventListener('click', (e) => {
        console.log(e);
        if(!e.path.find(node => node.nodeName == 'A')) {
          const colCardImg = colCard.querySelector('.img-text');
          const colCardSvgLine = colCard.querySelector('.vertical-line');
          colCardImg.classList.toggle('active');
          colCardSvgLine.classList.toggle('active');
        }
      });
    });
  }catch(error) {
    console.log(error.message);
  }

  const mainElem = document.querySelector('main.fullscreen');
});


    </script>
	</body>
</html>
