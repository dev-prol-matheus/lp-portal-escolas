<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $telefone = $_POST['whatsapp'];
    $email = $_POST['email'];
    $data = $_POST['data'];

    $instance_id = "3AF0D118953200298E3A5EF5ED4F3A62";
    $api_key = "1AF0AC85DCB4EE274FE39BC1"; 
    $phone = "5581984694081";

    $message = " 📅 *Solicitação de Reunião*\n\n👤 *Nome:* $nome\n📧 *E-mail:* $email\n📞 *Telefone:* $telefone\n📆 *Data da Reunião:* $data\n\n";

    $url = "https://api.z-api.io/instances/$instance_id/token/$api_key/send-text";

    $data = [
        "phone" => $phone,
        "message" => $message
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json", 
        "client-token: F560327e6db474535b37b419784483718S"
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro no envio.";
}
?>