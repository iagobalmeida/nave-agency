<div class="contact-wrapper">
    <input type="hidden" name="action" value="contact_form_submit">
    <span class="close">
        <?= file_get_contents(get_template_directory_uri() . '/assets/icons/plus-w.svg'); ?>
    </span>
    <h1 class="leading">CONTATO</h1>
    <form class="contact-form">
        <div class="input-wrapper">
            <label for="nome">Nome</label>
            <input type="text" name="nome" required>
        </div>
        <div class="input-wrapper">
            <label for="email">E-mail</label>
            <input type="email" name="email" required>
        </div>
        <div class="input-wrapper" style="height: 45%">
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" required></textarea>
        </div>
        <div class="input-wrapper">
            <button>Enviar</button>
        </div>
    </form>
    <div class="contact-link">
        <a href="https://twitter.com/NAVEagc" target="_blank">
            <?= file_get_contents(get_template_directory_uri() . '/assets/icons/twitter-w.svg'); ?>
        </a>
        <a href="https://www.instagram.com/naveagc/" target="_blank">
            <?= file_get_contents(get_template_directory_uri() . '/assets/icons/insta-w.svg'); ?>
        </a>
        <a href="https://www.facebook.com/agencynave" target="_blank">
            <?= file_get_contents(get_template_directory_uri() . '/assets/icons/face-w.svg'); ?>
        </a>
        <a href="https://www.twitch.tv/naveagency" target="_blank">
            <?= file_get_contents(get_template_directory_uri() . '/assets/icons/twitch-w.svg'); ?>
        </a>
    </div>
</div>

<script>
    let url = '<?php the_permalink(); ?>';

    let contactForm = document.querySelector('.contact-form');
    contactForm.addEventListener('submit', async(e) => {
        e.preventDefault();
        let body = new FormData(contactForm);
        contactForm.innerHTML = 'Enviando...'

        try {

            let request = await fetch(url, {
                method: 'POST',
                body
            });
            let response = await request.json();
        } catch(error) {
            console.log(error);
        } finally {
            contactForm.innerHTML = 'Obrigado! Entraremos em contato em breve!';
        }

    });
</script>
