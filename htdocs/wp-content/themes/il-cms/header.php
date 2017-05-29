<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title><?php wp_title( '' ); ?></title>
<?php wp_head(); ?>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_mobile()) :?>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<?php else: ?>
<meta name="viewport" content="width=1280">
<?php endif; ?>
<link rel="shortcut icon" href="/common/img/favicon.ico">
<link rel="stylesheet" href="/common/css/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php if ( is_android() ) : //androidで明朝体を使用する場合の表記 ?>
<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet">
<?php endif; ?>
<?php if ( is_home() || is_front_page() ) : ?>
<?php else: ?>
<script src="/common/js/footerFixed.js"></script>
<?php endif; ?>
</head>
<body <?php body_class(); ?>>