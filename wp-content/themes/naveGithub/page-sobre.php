<?php get_header() ?>
<style>
    .background-video {
        transition: all 500ms ease-in-out;
        filter: hue-rotate(270deg);
    }
</style>
<h1 class="leading">SOBRE NÓS</h1>
<div class="row full mb-0">
    <div class="col">
        We’re an award-winning, purpose-driven, creative agency specializing in strategy, content creation, and social media. Our mission is to leverage the power of technology, art, and culture to create a more connected, engaging, and just world.
        We’re an award-winning, purpose-driven, creative agency specializing in strategy, content creation, and social media. Our mission is to leverage the power of technology, art, and culture to create a more connected, engaging, and just world.
        We’re an award-winning, purpose-driven, creative agency specializing in strategy, content creation, and social media. Our mission is to leverage the power of technology, art, and culture to create a more connected, engaging, and just world.
    </div>
</div>
<div class="retro-cards-wrapper">
    <div class="retro-card retro-card-left">
        <div class="retro-card-header">
            <span class="retro-card-button">
                <?= file_get_contents(get_template_directory_uri().'/assets/icons/minus-w.svg'); ?>
            </span>
            <span class="retro-card-button rotate">
                <?= file_get_contents(get_template_directory_uri().'/assets/icons/plus-w.svg'); ?>
            </span>
            <span class="retro-card-button rotate">
                <?= file_get_contents(get_template_directory_uri().'/assets/icons/plus-w.svg'); ?>
            </span>
        </div>
        <div class="retro-card-body">
            <h3 class="retro-card-title">Textinho</h3>
            <p>Texto texto texto texto texto</p>
        </div>
    </div>
    <div class="retro-card retro-card-center">
        <div class="retro-card-header">
            <span class="retro-card-button">
                <?= file_get_contents(get_template_directory_uri().'/assets/icons/minus-w.svg'); ?>
            </span>
            <span class="retro-card-button rotate">
                <?= file_get_contents(get_template_directory_uri().'/assets/icons/plus-w.svg'); ?>
            </span>
            <span class="retro-card-button rotate">
                <?= file_get_contents(get_template_directory_uri().'/assets/icons/plus-w.svg'); ?>
            </span>
        </div>
        <div class="retro-card-body">
            <h3 class="retro-card-title">Textinho</h3>
            <p>Texto texto texto texto texto</p>
        </div>
    </div>
    <div class="retro-card retro-card-right">
        <div class="retro-card-header">
            <span class="retro-card-button">
                <?= file_get_contents(get_template_directory_uri().'/assets/icons/minus-w.svg'); ?>
            </span>
            <span class="retro-card-button rotate">
                <?= file_get_contents(get_template_directory_uri().'/assets/icons/plus-w.svg'); ?>
            </span>
            <span class="retro-card-button rotate">
                <?= file_get_contents(get_template_directory_uri().'/assets/icons/plus-w.svg'); ?>
            </span>
        </div>
        <div class="retro-card-body">
            <h3 class="retro-card-title">Textinho</h3>
            <p>Texto texto texto texto texto</p>
        </div>
    </div>
</div>
<h2 class="leading">PARCEIROS</h2>
<div class="partners-wrapper">
    <img src="<?=get_template_directory_uri();?>/assets/imgs/NAVE-branco.svg" alt="" class="partner">
    <img src="<?=get_template_directory_uri();?>/assets/imgs/NAVE-branco.svg" alt="" class="partner">
    <img src="<?=get_template_directory_uri();?>/assets/imgs/NAVE-branco.svg" alt="" class="partner">
</div>
<pre>
<?php

?>
</pre>

<?php
get_footer();
?>