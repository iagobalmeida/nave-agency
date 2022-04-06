<?php

$staffList = new WP_Query(array(
    'meta_key'          => 'ordem',
    'order'             => 'ASC',
    'orderby'           => 'meta_value',
    'post_type'         => 'staff',
    'posts_per_page'    => -1,
));

get_header();
?>
<style>
    .background-video {
        transition: all 500ms ease-in-out;
        filter: hue-rotate(90deg);
    }
</style>
<h1 class="leading">STAFF</h1>
<div class="row full">
    <div class="col">
        A NAVE conta com uma tripulação dedicada e atenta ao mercado, visando sempre o crescimento e focada em descobrir e dar voz a novos talentos do mercado de entretenimento para o público gamer. Confira abaixo quem são as pessoas que fazem a NAVE estar sempre na órbita perfeita.
    </div>
</div>
<div class="row mb-0">
    <?php if($staffList->have_posts()): while($staffList->have_posts()): $staffList->the_post(); ?>
        <div class="col-card mb-60 staff">
            <div class="img-wrapper">
                <div class="img-text">
                    <div class="text">
                        <?=the_content()?>
                    </div>
                    <div class="social-icons">
                        <?php 
                            $url_twitch     = get_field('url_twitch') ? get_field('url_twitch') : '#';
                            $url_discord    = get_field('url_discord') ? get_field('url_discord') : '#';
                            $url_twitter    = get_field('url_twitter') ? get_field('url_twitter') : '#';
                            $url_instagram  = get_field('url_instagram') ? get_field('url_instagram') : '#';
                            $url_youtube    = get_field('url_youtube') ? get_field('url_youtube') : '#';
                            $url_facebook   = get_field('url_facebook') ? get_field('url_facebook') : '#';
                            $url_site       = get_field('url_site') ? get_field('url_site') : '#';
                            $url_tiktok     = get_field('url_tiktok') ? get_field('url_tiktok') : '#';
                        ?>
                        <a href="<?= $url_twitch ?>" class="<?= $url_twitch == '#' ? 'disabled' : '' ?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/twitch-b.svg'); ?>
                        </a>
                        <a href="<?= $url_discord ?>" class="<?= $url_discord == '#' ? 'disabled' : '' ?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/discord-b.svg'); ?>
                        </a>
                        <a href="<?= $url_twitter ?>" class="<?= $url_twitter == '#' ? 'disabled' : '' ?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/twitter-b.svg'); ?>
                        </a>
                        <a href="<?= $url_instagram ?>" class="<?= $url_instagram == '#' ? 'disabled' : '' ?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/insta-b.svg'); ?>
                        </a>
                        <a href="<?= $url_youtube ?>" class="<?= $url_youtube == '#' ? 'disabled' : '' ?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/yt-b.svg'); ?>
                        </a>
                        <a href="<?= $url_facebook ?>" class="<?= $url_facebook == '#' ? 'disabled' : '' ?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/face-b.svg'); ?>
                        </a>
                        <a href="<?= $url_tiktok ?>" class="<?= $url_tiktok == '#' ? 'disabled' : '' ?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/tiktok-b.svg'); ?>
                        </a>
                    </div>
                </div>
                <img src="<?= get_field('imagem') ?>">
            </div>
            <div class="title-wrapper">
                <div class="text">
                    <h3 class="title"><?=the_title()?></h3>
                    <h5 class="subtitle">
                        <?=get_field('subtitulo')?>
                    </h5>
                </div>
                <span class="svg-plus"><?= file_get_contents(get_template_directory_uri().'/assets/icons/plus-w.svg'); ?></span>
            </div>
        </div>
    <?php endwhile; else: ?>

    <?php endif; ?>
</div>

<?php
get_footer();
?>