<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TTGZJ5S');</script>
<!-- End Google Tag Manager -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!-- <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?></title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/icofont.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/skeleton.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css"
        integrity="sha512-uCQmAoax6aJTxC03VlH0uCEtE0iLi83TW1Qh6VezEZ5Y17rTrIE+8irz4H4ehM7Fbfbm8rb30OkxVkuwhXxrRg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/favicon-32x32.png" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://cdn.jsdelivr.net/npm/viewport-extra@1.0.3/dist/viewport-extra.min.js"></script>
		<script>
			document.addEventListener( 'wpcf7mailsent', function( event ) {
					location = '/thanks/';
			}, false );
		</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTGZJ5S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- Primary Page Layout
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <header>
        <div class="h-container">
            <div class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/posting-sanpomichi-logo.png" alt="【業界最安保証】東京23区でチラシを撒くならポスティング散歩道"/></a></div>
            <div class="map1 pc-only"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-tokyo-23-ku-map-pc.jpg" alt="東京23区対応" /></div>
            <div class="tel pc-only margin-rl"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-free-call-pc.jpg" alt="受付時間9:00-18:00（日祝）を除く0120-359-125" /></div>
            <div class="map1 sp-only"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-smp.png" alt="東京23区対応" /></div>
            <div class="mitsumori">
                <a href="#s-form">
                    <img class="over-tb" src="<?php echo get_template_directory_uri(); ?>/assets/images/header-contact-us-free-bnr-pc.jpg" alt="お見積り・ご相談はこちら" />
                </a>
            </div>
        </div>
    </header>