<?php
get_header();
?>
<style>
    .background-video {
        transition: all 500ms ease-in-out;
        filter: hue-rotate(50deg);
    }
</style>
<h1 class="leading">ESTRELAS</h1>
<div class="row full">
    <div class="col">
    Os criadores de conteúdo são a parte mais importante da NAVE. Eles são o combustível que faz a nossa agência estar em constante movimento. Nosso trabalho tem uma atenção especial a cada um desses talentos que foram escolhidos a dedo por nossa equipe para estar aqui. Com diversas características e apostando em diversidade, o elenco da NAVE é seu ponto forte, como você pode conferir abaixo no nosso catálogo de estrelas!    
    </div>
</div>
<div id="streamers_row">
    <h5 style="text-align:center">Carregando...</h5>
</div>

<script>
    let svgs = {
        plus: `<?= file_get_contents(get_template_directory_uri().'/assets/icons/plus-w.svg'); ?>`,
        twitch: `<?= file_get_contents(get_template_directory_uri().'/assets/icons/twitch-b.svg'); ?>`,
        discord: `<?= file_get_contents(get_template_directory_uri().'/assets/icons/discord-b.svg'); ?>`,
        twitter: `<?= file_get_contents(get_template_directory_uri().'/assets/icons/twitter-b.svg'); ?>`,
        instagram: `<?= file_get_contents(get_template_directory_uri().'/assets/icons/insta-b.svg'); ?>`,
        youtube: `<?= file_get_contents(get_template_directory_uri().'/assets/icons/yt-b.svg'); ?>`,
        facebook: `<?= file_get_contents(get_template_directory_uri().'/assets/icons/face-b.svg'); ?>`,
        tiktok: `<?= file_get_contents(get_template_directory_uri().'/assets/icons/tiktok-b.svg'); ?>`,
    };

    function createStreamerCard(streamer) {
        let content = streamer.content.rendered;
        let title = streamer.title.rendered;
        let subtitle = streamer.subtitulo;
        let imgSrc = streamer.imagem;
        
        let socialIcons = '';
        socialIcons += (streamer.url_twitch) ? `<a target="_blank" href=${streamer.url_twitch}>${svgs.twitch}</a>` : '';
        socialIcons += (streamer.url_discord) ? `<a target="_blank" href=${streamer.url_discord}>${svgs.discord}</a>` : '';
        socialIcons += (streamer.url_twitter) ? `<a target="_blank" href=${streamer.url_twitter}>${svgs.twitter}</a>` : '';
        socialIcons += (streamer.url_instagram) ? `<a target="_blank" href=${streamer.url_instagram}>${svgs.instagram}</a>` : '';
        socialIcons += (streamer.url_youtube) ? `<a target="_blank" href=${streamer.url_youtube}>${svgs.youtube}</a>` : '';
        socialIcons += (streamer.url_facebook) ? `<a target="_blank" href=${streamer.url_facebook}>${svgs.facebook}</a>` : '';
        socialIcons += (streamer.url_tiktok) ? `<a target="_blank" href=${streamer.url_tiktok}>${svgs.tiktok}</a>` : '';

        let div = document.createElement('div');
        div.className = 'col-card mb-60';
        div.innerHTML = `
        <div class="img-wrapper">
            <div class="img-text">
                <div class="text">${content}</div>
                <div class="social-icons">${socialIcons}</div>
            </div>
            <img src=${imgSrc}>
        </div>
        <div class="title-wrapper">
            <div class="text">
                <h3 class="title">${title}</h3>
                <h5 class="subtitle">${subtitle}</h5>
            </div>
            <span class="svg-plus">${svgs.plus}</span>
        </div>
        `;

        div.addEventListener('click', () => {
            div.classList.toggle('active');
        });

        let img = div.querySelector('img');
        if(img) {
            img.addEventListener('load', () => {
                div.style.opacity = 1;
            });
            img.addEventListener('error', () => {
                div.remove();
            });
        }

        return div;
    }

    const fetchStreamers = async () => {
        let url = `<?= get_rest_url(); ?>`;
        let request = await fetch(`${url}wp/v2/streamer?per_page=100&meta_key=ordem&order_by=meta_value&order=asc`);
        let result = await request.json();


        let timeout = 150;
        let row = document.getElementById('streamers_row');
        row.innerHTML = '';
        row.className = 'row mb-0';

        result.sort((a, b) => {
            if(a.ordem && !b.ordem) { return -1 }
            if(b.ordem && !a.ordem) { return 1 }
            return a.ordem - b.ordem;
        }).filter(streamer => (streamer.status == 'publish')).forEach(streamer => {
            row.appendChild(createStreamerCard(streamer));
        })
    }

    fetchStreamers();
    
</script>

<?php
get_footer();
?>