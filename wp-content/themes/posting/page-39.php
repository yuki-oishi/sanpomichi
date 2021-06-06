<?php get_header(); ?>
<header>
        <div class="h-container">
            <div class="logo"><a href="<?php echo home_url('/'); ?>">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/posting-sanpomichi-logo.png" alt="【業界最安保証】東京23区でチラシを撒くならポスティング散歩道"/>
             </a></div>
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

	<main role="main" aria-label="Content" class="p-thanks">
		<!-- section -->
		<section class="">
			<h2>無料お見積り・ご相談 送信完了</h2>
			<div class="container tac">
				<div class="white_box">
					<p>無料お見積り・ご相談の受付が完了しました。<br class="__pc">お問い合わせ情報の入力ありがとうございました。</p>
					<p>内容を確認させていただいた後に、担当者よりご連絡を差し上げます。<br>基本は24時間以内に返答をしますが、数日経っても返答がない場合、以下よりお問い合わせください。</p>
					<div class="support_box m-auto tac">
						<h3>ポスティング散歩道のサポート窓口</h3>
						<a href="tel:0120359125"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-free-call-pc.jpg" alt="ポスティング散歩道のサポート窓口:0120-359-125 9:00-18:00（日祝を除く）" /></a>
					</div>
					<div class="button_wrapper mt-4">
						<a href="/" class="c-button">トップページへ戻る</a>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
