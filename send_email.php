<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/storage/5/ee/a5/dinesh0006tested1/public_html/PHPMailer/src/Exception.php';
require '/home/storage/5/ee/a5/dinesh0006tested1/public_html/PHPMailer/src/PHPMailer.php';
require '/home/storage/5/ee/a5/dinesh0006tested1/public_html/PHPMailer/src/SMTP.php';

// Instancia o PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();                                          // Enviar usando SMTP
    $mail->Host       = 'email-ssl.com.br';           // Servidor SMTP
    $mail->SMTPAuth   = true;    // Ativar autenticação SMTP
    $mail->Username   = 'csv@testedeaplicacao.com';            // Nome de usuário SMTP
    $mail->Password   = 'Locaweb@@10203040';                  // Senha SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Criptografia SMTPS
    $mail->Port       = 587;                                  // Porta TCP para conexão
    $mail->SMTPDebug  = 2;                                    // Nível de debug

    // Configurações adicionais
    $mail->AuthType = 'PLAIN';                                // Tipo de autenticação

    // Destinatários
    $mail->setFrom('csv@testedeaplicacao.com', 'Teste Form');
    $mail->addAddress('csv@testedeaplicacao.com', 'Destinatário');

    // Conteúdo
    $mail->isHTML(true);                                      // Formato HTML
    $mail->Subjet = 'Teste PHPMailer';
    $mail->Body    = 'Teste PHPMailer funcional!';
    $mail->AltBody = 'Este é o corpo da mensagem em texto simples';

    // Envio
    $mail->send();
    echo 'Mensagem enviada com sucesso';
} catch (Exception $e) {
    echo "A mensagem não pode ser enviada. Erro: {$mail->ErrorInfo}";
}
?>

