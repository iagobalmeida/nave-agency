<?php
$parceirosList = new WP_Query(array(
    'meta_key'          => 'ordem',
    'order'             => 'ASC',
    'orderby'           => 'meta_value',
    'post_type'         => 'parceiro',
    'posts_per_page'    => -1,
));

get_header();
?>
<style>
    .background-video {
        transition: all 500ms ease-in-out;
        filter: hue-rotate(270deg);
    }
</style>
<h1 class="leading">SOBRE NÓS</h1>
<div class="row full mb-0">
    <div class="col">
        A NAVE é uma agência de criadores de conteúdo focada em crescimento de imagem (pessoal e marca). Nosso principal modelo de trabalho é investir em streamers gamers de pequeno e médio porte e ajuda-los a chegar cada vez mais longe. Nós trabalhamos para que os nossos agenciados e empresas parceiras decolem no mercado dos jogos conquistando cada vez mais espaço, alcance e público. Tudo isso através de negociações claras e objetivas e modelos de crescimento personalizados caso a caso. Ou seja, trabalhar com a NAVE é garantir que o céu não seja seu limite!
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
            <h3 class="retro-card-title">MISSÃO</h3>
            <p>Estreitar as relações entre empresas patrocinadoras e criadores de conteúdo através de uma negociação simples e objetiva.</p>
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
            <h3 class="retro-card-title">VISÃO</h3>
            <p>Levar incentivo e direcionar os holofotes para essa nova forma de mídia em constante crescimento que é a criação de conteúdo gamer independente.</p>
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
            <h3 class="retro-card-title">VALORES</h3>
            <p>Empatia, clareza, inovação e objetivo são os pilares de criação e de funcionamento da NAVE.</p>
        </div>
    </div>
</div>
<h2 class="leading">PARCEIROS</h2>
<div class="row full mb-0">
    <div class="col">
        A NAVE já conta com uma lista de parceiros e patrocinadores que acreditam no nosso potencial e nos nossos criadores de conteúdo. Se você está interessado em se tornar um deles, entre em contato conosco e nós conversaremos sobre a melhor forma de chegar juntos ao infinito e além!    
    </div>
</div>
<div class="partners-wrapper">
    <?php if($streamerList->have_posts()): while($streamerList->have_posts()): $streamerList->the_post(); ?>
        <a url="<?= get_field('url') ? get_field('url') : '#' ?>">
            <img src="<?= get_field('imagem') ?>" class="partner">
        </a>
    <?php endwhile; endif; ?>
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