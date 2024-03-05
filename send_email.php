<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se todos os campos do formulário foram preenchidos
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        // Coletar dados do formulário
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Endereço de e-mail para onde você quer enviar
        $to = "gustavo.zatti0709@gmail.com";

        // Construa a mensagem
        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Subject: $subject\n";
        $body .= "Message:\n$message";

        // Construa os cabeçalhos do e-mail
        $headers = "From: $name <$email>";

        // Tente enviar o e-mail
        if (mail($to, $subject, $body, $headers)) {
            echo "<p>Email enviado com sucesso!</p>";
        } else {
            echo "<p>Houve um problema ao enviar o email. Por favor, tente novamente mais tarde.</p>";
        }
    } else {
        echo "<p>Por favor, preencha todos os campos do formulário.</p>";
    }
}
?>
