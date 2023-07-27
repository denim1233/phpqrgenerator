<?php
require_once __DIR__ . '/vendor/phpqrcode/qrlib.php';
$target = "uploads/qr-code-phone/";
$phone = 'Alibasser Lalao';
// attache phone to call
$qrContent = 'tel:' . $phone;
QRcode::png($qrContent, $target . 'phone-to-call.png', QR_ECLEVEL_L, 3);
?>
<img src="<?php echo $target; ?>phone-to-call.png" /> 