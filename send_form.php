<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $prefer = $_POST['prefer'];
    $linguagens = isset($_POST['linguagens']) ? implode(", ", $_POST['linguagens']) : "Nenhuma";
    $comentarios = $_POST['comentarios'];

    // Defina o e-mail para onde o formulário será enviado
    $to = "francamargoads@gmail.com";
    $subject = "Formulário Preferências Devs";
    
    // Criação do corpo do e-mail
    $message = "Nome: $name\n";
    $message .= "E-mail: $email\n";
    $message .= "Idade: $idade\n";
    $message .= "Gênero: $genero\n";
    $message .= "Preferência: $prefer\n";
    $message .= "Linguagens favoritas: $linguagens\n";
    $message .= "Comentários: $comentarios\n";
    
    // Cabeçalhos para o envio do e-mail
    $headers = "From: no-reply@seudominio.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Obrigado por enviar suas respostas! Em breve entraremos em contato.";
    } else {
        echo "Ocorreu um erro ao enviar o formulário. Tente novamente.";
    }
}
?>
