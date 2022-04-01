<?php

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
    if($nome != '' && $email != '' && $mensagem != '') {
        $to = get_option('admin_email');
        $subject = "Someone sent a message from ".get_bloginfo('name');
        $headers = 'From: '. $email . "\r\n" .
          'Reply-To: ' . $email . "\r\n";
        $sent = wp_mail($to, $subject, strip_tags($mensagem), $headers);

        $ret = array('result' => ($sent ? 'success' : 'fail'));
        header("Content-Type: application/json");
        echo json_encode($ret);
        exit(200);
    }else {
        $ret = array('result' => 'fail', 'fields' => array('nome' => $nome, 'email' => $email, 'mensagem' => $mensagem));
        header("Content-Type: application/json");
        echo json_encode($ret);
        exit(500);
    }
}

?>

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
        <a href="#">
            <?= file_get_contents(get_template_directory_uri() . '/assets/icons/discord-w.svg'); ?>
        </a>
        <a href="#">
            <?= file_get_contents(get_template_directory_uri() . '/assets/icons/twitter-w.svg'); ?>
        </a>
        <a href="#">
            <?= file_get_contents(get_template_directory_uri() . '/assets/icons/insta-w.svg'); ?>
        </a>
        <a href="#">
            <?= file_get_contents(get_template_directory_uri() . '/assets/icons/yt-w.svg'); ?>
        </a>
        <a href="#">
            <?= file_get_contents(get_template_directory_uri() . '/assets/icons/face-w.svg'); ?>
        </a>
        <a href="#">
            <?= file_get_contents(get_template_directory_uri() . '/assets/icons/link-w.svg'); ?>
        </a>
    </div>
</div>

<script>
    let url = '<?php the_permalink(); ?>';

    let contactForm = document.querySelector('.contact-form');
    contactForm.addEventListener('submit', async(e) => {
        e.preventDefault();
        let request = await fetch(url, {
            method: 'POST',
            body: new FormData(contactForm)
        });
        let response = await request.json();

        contactForm.innerHtml = 'Obrigado! Entraremos em contato em breve!';
    });


    // let ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>'; // This is the WordPress AJAX handler file.

    // let contactForm = document.querySelector('.contact-wrapper');
    // contactForm.addEventListener('submit', async (e) => {
    //     e.preventDefault();
    //     let data = {
    //         action: 'contact_form_submit',
    //     };
    //     let response = await fetch(ajaxurl, {
    //         method: 'POST',
    //         body: new FormData(contactForm)
    //     });

    //     if(response.status == '200') {
    //         document.querySelector('.contact-form').innerHTML = '<h3><b>Obrigado por nos contatar!</b><br>Fique atento a sua caixa de e-mail, retornaremos em breve.<h3>';
    //     }

    //     console.log(responseRaw);
    //     let content = await responseRaw.json();
    //     console.log(content);
    // });
</script>
