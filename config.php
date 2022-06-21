<?php
$con=mysqli_connect("localhost","metarix","Meta@968547","meta_dev");
$sendgridKey="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";
$smartContract="0xab75a21fd3cbf92e5e10c27982562e9b9ebbae2e";
define('MAIN_URL', 'https://dev.metarix.network/mtrx_presale.php');
define('TOKEN_ADDRESS', '0x55382eEEF32EB87AA27D13d7637954C344154151');
define('BASE_URL', 'https://dev.metarix.network/');
define('FROM_EMAIL', 'metarix.metaversenetwork@gmail.com');
define('FROM_NAME', 'Metarix Network');
define('TO_EMAIL', 'support@metarix.network');
//define('TO_EMAIL', 'ktest@yopmail.com');
define('TO_NAME', 'Support Metarix');
define('TO_EMAIL_CC', 'paluvala@metarix.network');
define('TO_NAME_CC', 'Pandu Aluvala');

define('SENDER_EMAIL', 'support@metarix.network');
define('SENDER_NAME', 'Metarix Support');
define('USERNAME_SMTP', 'AKIAYG2Q7SONP2BMESZ2');
define('PASSWORD_SMTP', 'BJ5YJzithDKXm0KUUt6vOaimQFsn829JrHixjY+k7gub');
define('HOST', 'email-smtp.us-east-2.amazonaws.com');
define('PORT', '587');
define('RECIPIENT_EMAIL', 'kuldeepsingh.immanentsalutions@gmail.com');

?>