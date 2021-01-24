<?php

/* https://api.telegram.org/bot1551878047:AAHdFd_2yYt5yQy49XzaQh9A7atGlFX1hB0/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$email = $_POST['user_email'];
$token = "1551878047:AAHdFd_2yYt5yQy49XzaQh9A7atGlFX1hB0";
$chat_id = "31433485";
$arr = array(
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>