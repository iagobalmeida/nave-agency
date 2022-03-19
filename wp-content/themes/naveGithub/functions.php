<?php
function contact_form_submit() {
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $mensagem = $_POST['mensagem'];
     wp_mail($email, 'nave.agency - Formulário de contato', $mensagem);
     echo 'E-mail de '.$nome.' / '.$email.' enviado';
     die();
}


add_action('wp_ajax_contact_form_submit', 'contact_form_submit');
add_action('wp_ajax_nopriv_contact_form_submit', 'contact_form_submit');

add_action('admin_init', 'email_template_hide_title');
function email_template_hide_title() {
     remove_post_type_support('email_template', 'title');
}

?>