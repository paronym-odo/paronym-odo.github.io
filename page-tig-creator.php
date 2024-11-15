<?php
/*
Template Name: Tig Creator
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W2HKK4D');</script>
	<!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<?php get_template_part('part/meta'); ?>
	<link href="<?php echo cv_s3url_creator(); ?>/css/sanitize.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
	<link href="<?php echo cv_s3url_creator(); ?>/css/tigcreator.min.css?ver=0.1.1" rel="stylesheet">
	<?php wp_head(); ?>
	<script src="<?php echo cv_s3url_creator(); ?>/js/tigcreator.js?ver=0.1.1"></script>
</head>
<body id="top">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W2HKK4D"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<header class="l_header">
		<h1><a href="<?php echo home_url(); ?>/tig-creator/"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/logo_tigCreator.webp" width="233" height="48" alt="Tig Creator"></a></h1>
		<div class="l_header_navigation_hamburger" id="hamburger"><span></span></div>
		<nav>
			<ul class="l_header_menu">
				<li><a href="#featuer">特徴</a></li>
				<li><a href="#case">導入事例</a></li>
				<li><a href="#function">機能紹介</a></li>
				<li><a href="#flow">導入までの流れ</a></li>
				<li><a href="#faq">よくある質問</a></li>
				<li><a href="https://cms.tigmedia.jp/" target="_blank">ログイン</a></li>
			</ul>
			<ul class="l_header_button">
				<li><a href="<?php echo home_url(); ?>/download/tig-creator/" class="l_header_button_request"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/icon_requestWhite.svg" width="15" height="16" alt="">資料請求</a></li>
				<li><a href="<?php echo home_url(); ?>/tig-creator/inquiry/" class="l_header_button_contact"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/icon_contactWhite.svg" width="18" height="14" alt="">お問い合わせ</a></li>
			</ul>
		</nav>
	</header>
	<nav class="l_navigation" id="navigation">
		<div class="l_navigation_layout">
			<ul class="l_navigation_menu">
				<li><a href="#featuer">特徴</a></li>
				<li><a href="#case">導入事例</a></li>
				<li><a href="#function">機能紹介</a></li>
				<li><a href="#flow">導入までの流れ</a></li>
				<li><a href="#faq">よくある質問</a></li>
				<li><a href="https://cms.tigmedia.jp/" target="_blank">ログイン</a></li>
			</ul>
			<ul class="l_navigation_button">
				<li><a href="<?php echo home_url(); ?>/download/tig-creator/" class="gradation"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/icon_requestWhite.svg" width="15" height="16" loading="lazy" alt="">資料請求</a></li>
				<li><a href="<?php echo home_url(); ?>/tig-creator/inquiry/" class="black"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/icon_contactWhite.svg" width="18" height="14" loading="lazy" alt="">お問い合わせ</a></li>
			</ul>
		</div>
	</nav>
	<section class="p_hero" id="hero">
		<div class="p_hero_paint">
			<svg
				class="paint"
				preserveAspectRatio="none"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				width="1920"
				viewBox="-80 250 2020 550"
			>
				<!-- 定義 -->
				<defs>
					<!-- クリップパス定義 -->
					<clipPath id="clip-paths">
						<path id="clip-path" d="M0,0,381.975-24.551l118.281,613L0,613Z" transform="translate(-560 183.999)" fill="#fff" stroke="#707070" stroke-width="1" />
					</clipPath>
					<!-- グラデーション定義 -->
					<linearGradient id="linear-gradient" x1="0.186" y1="0.249" x2="0.994" y2="0.253" gradientUnits="objectBoundingBox">
						<stop offset="0" stop-color="#1082f4" />
						<stop offset="0.315" stop-color="#bb63ff" />
						<stop offset="0.671" stop-color="#ab59f0" />
						<stop offset="1" stop-color="#c3358b" />
					</linearGradient>
					<linearGradient id="linear-gradient-2" x1="0" y1="0.249" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
						<stop offset="0" stop-color="#f9d92b" />
						<stop offset="0.211" stop-color="#f9d92b" />
						<stop offset="0.689" stop-color="#a6f097" />
						<stop offset="1" stop-color="#18e0e6" />
					</linearGradient>
					<!-- アニメーション 時間はdurを変更する -->
					<animate
						id="js-animate"
						xlink:href="#clip-path"
						attributeName="d"
						dur="1s"
						begin="indefinite"
						end="indefinite"
						repeatCount="1"
						values="M 0.500012993812561 612.474853515625 L 0.500012993812561 0.4689514636993408 L 381.5678100585938 -24.02355575561523 L 499.6557312011719 587.97802734375 L 0.500012993812561 612.474853515625 Z; 
							M 0.500012993812561 612.474853515625 L 0.500012993812561 0.4689514636993408 L 3381.567810058593 -24.02355575561523 L 3499.6557312011719 587.97802734375 L 0.500012993812561 612.474853515625 Z"
						keyTimes="0;1"
						keySplines=".5 0 .5 1"
						calcMode="spline"
						fill="freeze"
					/>
				</defs>
				<!-- レンダリング -->
				<g class="pc" clip-path="url(#clip-paths)">
					<path
						d="M22192.41,10273.976c-168.764,0-320.887-50.379-456.484-95.282-118.795-39.342-230.986-76.494-335.121-74.584-234.717,4.32-381.824,69.48-383.283,70.14-77.111,36.085-173.014,11.193-214.863-55.3s-12.736-149.894,64.371-185.979c21.189-9.916,215.98-97.041,527-102.767,166.545-3.057,313.58,45.635,455.8,92.733,129.15,42.769,251.143,83.167,369.334,76.3,242.3-14.062,480.271-159.912,482.607-161.382,70.875-44.591,170.246-31.191,221.957,29.923s36.172,146.81-34.7,191.4c-12.566,7.907-311.641,193.854-648.527,213.408Q22216.236,10274,22192.41,10273.976Z"
						transform="translate(-21105.26 -9530.453)"
						fill="url(#linear-gradient)"
					/>
					<path
						d="M22192.41,10237.328c-168.764,0-320.887-46.386-456.484-87.731-118.795-36.224-230.986-70.432-335.121-68.673-234.717,3.978-381.824,63.975-383.283,64.581-77.111,33.226-173.014,10.307-214.863-50.916s-12.736-138.016,64.371-171.241c21.189-9.131,215.98-89.352,527-94.623,166.545-2.814,313.58,42.019,455.8,85.385,129.15,39.379,251.143,76.576,369.334,70.258,242.3-12.948,480.271-147.24,482.607-148.593,70.875-41.058,170.246-28.72,221.957,27.551s36.172,135.176-34.7,176.232c-12.566,7.28-311.641,178.492-648.527,196.5Q22216.236,10237.35,22192.41,10237.328Z"
						transform="translate(-21130.26 -9547.453)"
						fill="url(#linear-gradient-2)"
					/>
					<path
						d="M22146.057,10326.674c-160.252.007-305.395-58.371-434.783-110.4-115.471-46.434-224.594-90.277-327.01-88-230.252,5.146-372.24,82.322-373.609,83.1a135,135,0,0,1-133.4-234.743c8.01-4.551,199.629-111.553,500.979-118.288,4.711-.105,9.428-.158,14.109-.158,152.133,0,288.063,54.664,419.668,107.586,125.563,50.491,244.137,98.184,360.447,89.987,238.447-16.8,469.467-189.911,471.773-191.657,59.342-44.955,143.992-33.465,189.07,25.79a134.881,134.881,0,0,1-25.377,188.929c-11.941,9.123-296.154,223.694-616.486,246.271Q22168.566,10326.7,22146.057,10326.674Z"
						transform="translate(-21022.6 -9578.012)"
						fill="#fff"
					/>
				</g>
			</svg>
		</div>
		<script>
			const $animate = document.getElementById('js-animate');
		</script>
		<p class="p_hero_catchcopy01">スマホで誰でも簡単に<br>
		<strong>縦型ショート動画を指でなぞって、<br>
		インタラクティブ動画作成</strong></p>
		<p class="p_hero_catchcopy02"><strong>「Tig Creator」</strong>はスマホで撮って素早く作成・配信できる<br>
		インタラクティブ「縦型ショート動画」専用アプリです。</p>
		<div class="p_hero_button"><a href="<?php echo home_url(); ?>/download/tig-creator/"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/icon_requestWhite.svg" width="15" height="16" alt="">資料請求</a></div>
		<div class="p_hero_image01"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/hero_image01.webp" width="1280" height="900" alt=""></div>
		<div class="p_hero_image02"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/hero_image02.webp" width="1280" height="900" alt=""></div>
		<div class="p_hero_image03"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/hero_image03.webp" width="1280" height="900" alt=""></div>
		<div class="p_hero_scroll"><a href="#comingsoon">scroll<span></span></a></div>
	</section>
	<section class="p_comingsoon" id="comingsoon">
		<div class="p_comingsoon_container">
				<div id="tig-creator-frame"></div>
<style>
	.tig-creator-iframe-area {
		z-index: 100000;
	}
    #tig-creator-frame iframe {
        width: 100%;
        height: 500px;
    }
    @media screen and (max-width: 767px) {
        #tig-creator-frame iframe {
            height: 300px;
        }
    }
</style>
<script type="module" src="https://cdn.demo.tigmedia.jp/creator/embed/js/tig-creator-embed.js"></script>
<script>
    (function() {
        function processTigCreatorEmbedFunc() {
            var urlParam = { ta_tag: "ec_creator_slider" };
            var ignoreParams = [ 'id' ];
            if (window.location.search.length > 0) {
                var pairs = window.location.search.slice(1).split('&');
                for (var i = 0; i < pairs.length; i++) {
                    var pair = pairs[i];
                    var kv = pair.split('=');
                    if (ignoreParams.indexOf(kv[0]) === -1) {
                        urlParam[kv[0]] = kv[1];
                    }
                }
            }
            initTigCreatorEmbed({
                type: "embed",
                target: "#tig-creator-frame",
                collectionId: "zafobkjdfuex",
                urlParam: urlParam,
                limit: 20,
                    order: "random",
                    embedParam: {
                    type: "slider",
                    styleVars: {
                        "--tig-embed-theme-color": "#ffffff",
                    },
                    
                }
            });
        }
        if (document.readyState === 'interactive' || document.readyState === 'complete') {
            processTigCreatorEmbedFunc();
        } else {
            window.addEventListener('DOMContentLoaded', function () {
                processTigCreatorEmbedFunc();
            });
        }
    })();
</script>

		</div>
	</section>
	<section class="p_start">
		<div class="p_start_container">
			<div class="p_start_logo"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/start_logo.webp" width="283" height="135" alt="Tig Creator"></div>
			<p class="p_start_catchcopy"><span>Tig Creator で</span><br>
			縦型ショート動画マーケティングを始めましょう！</p>
		</div>
		<div class="p_start_arrow">
			<div class="p_start_arrow_left"></div>
			<div class="p_start_arrow_right"></div>
		</div>
	</section>
	<section class="p_featuer" id="featuer">
		<div class="p_featuer_container">
			<div class="c_titleOrnament">FEATURE</div>
			<h2 class="p_featuer_title"><span>素早く作成  /  簡単連携  /  しっかり分析</span>Tig Creator <b>3</b>つの特徴</h2>
		</div>
		<section class="p_featuer_01">
			<div class="p_featuer_01_container">
				<div class="p_feature_layout">
					<div class="p_featuer_01_body">
						<h3 class="p_featuer_subTitle">指でなぞって素早く・簡単<br>
						インタラクティブな<br>
						「縦型ショート動画」作成</h3>
						<p>Tig Creatorならスマホで驚くほど簡単に縦型ショート動画を活用したインタラクティブ動画が作れます。<br>
						専用アプリから動画上の商品・エリアを“なぞる“操作でリンクを付けて<sup>（※）</sup>、<br>
						簡単インタラクティブ化・配信までがわずか数分。<br>
						ショート動画と連続再生でサイト滞在時間も大幅向上、エンゲージメント向上が期待できます。</p>
						<p class="p_featuer_note">※タッチスクリーンをなぞってタグ付け可能な技術として特許取得済</p>
					</div>
					<div class="p_featuer_01_image c_animation_fadeIn"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/feature_01_image.webp" width="1270" height="920" loading="lazy" alt=""></div>
				</div>
			</div>
		</section>
		<section class="p_featuer_02">
			<div class="p_featuer_02_container">
				<div class="p_featuer_02_layout">
					<div class="p_featuer_02_body">
						<h3 class="p_featuer_subTitle">サイト埋め込み・連携が簡単<br>
						「EC・メディアで自動表示」</h3>
						<p>作成したショート動画のサイト連携はあっという間。<br>
						簡単な作業で<a class="p_function_cms_open">ECサイト</a>やオウンドメディアに投稿動画を自動で表示。<br>
						<a class="p_function_cms_open">データフィード</a>と連携すれば商品情報を一括取り込み・自動更新、動画と商品の関連付けは選ぶだけ。効率的な運用が可能になります。</p>
					</div>
					<div class="p_featuer_02_image">
						<div class="p_featuer_02_image_01">
							<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/feature_02_image01.webp" width="375" height="750" loading="lazy" alt="" class="c_animation_fadeIn">
						</div>
						<div class="p_featuer_02_image_02">
							<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/feature_02_image02.webp" width="375" height="750" loading="lazy" alt="" class="c_animation_fadeIn">
							<div class="p_featuer_02_image_02_tooltip"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/feature_02_tooltip.webp" width="380" height="207" loading="lazy" alt="設定した動画を自動で再生できます" class="c_animation_fadeIn"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="p_featuer_03">
			<div class="p_featuer_03_container">
				<div class="p_featuer_03_layout">
					<div class="p_featuer_03_body">
						<h3 class="p_featuer_subTitle">集計・分析が簡単<br>
						「動画上での行動まで見える」</h3>
						<p>優れた分析機能とヒートマップが視聴者の行動をしっかり捉え、コンテンツ改善にも役立ち便利です。<br>
						動画上でのアクションからコンバージョンを<a class="p_function_cms_open">効果測定</a>、さらに特許技術のヒートマップで行動まで「見える化」できて、動画の「どこ」に関心があるのかひと目でわかります。</p>
					</div>
					<div class="p_featuer_03_image c_animation_fadeIn"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/feature_03_image.webp" width="820" height="700" loading="lazy" alt=""></div>
				</div>
			</div>
		</section>
	</section>
	<section class="p_case" id="case">
		<div class="p_case_container">
			<div class="c_titleOrnament u_color_white">CASE</div>
			<h2 class="c_title u_color_white">導入事例</h2>
			<ul class="p_case_list c_animation_splitObject">
				<li>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/case_wataya_image.webp" width="549" height="293" loading="lazy" alt="嬉野温泉 和多屋別荘">
					<div class="p_case_list_body">
						<h3>嬉野温泉 和多屋別荘様</h3>
						<p>和多屋別荘の雰囲気・体験をコンパクトに表現</p>
						<div class="p_case_list_link"><a href="https://wataya.co.jp/facility/reborn-wataya-project" target="_blank">外部サイトへ</a></div>
					</div>
				</li>
				<!--<li>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/case_pBandai_image.webp" width="550" height="293" loading="lazy" alt="プレミアムバンダイ">
					<div class="p_case_list_body">
						<h3>プレミアムバンダイ様</h3>
						<p>ショート動画で商品の使用感や魅力をダイジェストで訴求</p>
						<div class="p_case_list_link"><a href="https://p-bandai.jp/contents/live-commerce/" target="_blank">外部サイトへ</a></div>
					</div>
				</li>
				<li>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/case_magaseek_image.webp" width="549" height="293" loading="lazy" alt="マガシーク">
					<div class="p_case_list_body">
						<h3>マガシーク様</h3>
						<p>ファッション商品ならではの着用感や風合いを動画で再現</p>
						<div class="p_case_list_link"><a href="https://www.magaseek.com/product/detail/id_505121681-mc_004?pid=TIGLINE_LIVE230308_item01_main" target="_blank">外部サイトへ</a></div>
					</div>
				</li>-->
			</ul>
		</div>
	</section>
	<section class="p_example">
		<div class="p_example_container">
			<div class="p_example_layout">
				<div class="p_example_body">
					<div class="c_titleOrnament p_example_titleOrnament">EXAMPLE</div>
					<h2 class="c_title p_example_title">サイト実装例</h2>
					<p>導入は簡単、タグを埋め込むだけ。<br>
					掲載も自動化できるので<br class="p_example_brSp">運用の手間がありません。実際に触って体験いただけます。<br>
					<a href="https://p-bandai.jp/contents/live-commerce/" target="_blank">プレミアムバンダイ様サイト</a>を<br class="p_example_brSp">ご覧ください。</p>
				</div>
				<div class="p_example_image c_animation_fadeIn"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/example_image.webp" width="535" height="863" loading="lazy" alt=""></div>
			</div>
		</div>
	</section>
	<section class="p_tutorial">
		<div class="p_tutorial_container">
			<div class="p_tutorial_layout">
				<div class="p_tutorial_body">
					<div class="c_titleOrnament p_tutorial_titleOrnament">TUTORIAL</div>
					<h2 class="c_title p_tutorial_title">作成方法</h2>
					<p>インタラクティブ・ショート動画の作成方法をご紹介します。</p>
				</div>
				<div class="p_tutorial_image c_animation_fadeIn"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/tutorial_image.webp" width="535" height="863" loading="lazy" alt=""><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/tutorial_imageButton.webp" width="220" height="220" loading="lazy" alt="" class="p_tutorial_image_button"></div>
				<div class="p_tutorial_video">
					<div class="p_tutorial_video_close"></div>
					<video src="<?php echo cv_s3url_contents(); ?>/tc_Intro.mp4" preload="none" poster="<?php echo cv_s3url_creator(); ?>/img/tigcreator/tutorial_video.webp" controls></video>
				</div>
			</div>
		</div>
	</section>
	<section class="p_request">
		<div class="p_request_container">
			<p class="p_request_catchcopy">サービス概要資料は<br>こちらから</p>
			<div class="p_request_button"><a href="<?php echo home_url(); ?>/download/tig-creator/"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/icon_requestWhite.svg" width="20" height="22" loading="lazy" alt="">資料請求はこちら</a></div>
		</div>
	</section>
	<section class="p_function" id="function">
		<div class="p_function_container">
			<div class="c_titleOrnament u_color_white">FUNCTION</div>
			<h2 class="c_title u_color_white">機能紹介</h2>
			<ul class="p_function_list c_animation_splitObject">
				<li>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/function_01_image.webp" width="160" height="160" loading="lazy" alt="">
					<h3>Tig動画作成</h3>
					<p>スマホで撮影した動画やお手持ちの動画を使ってインタラクティブ動画を作成できます。わかりやすい手順で誰でも簡単に素早くできるので安心です。</p>
				</li>
				<li>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/function_02_image.webp" width="160" height="160" loading="lazy" alt="">
					<h3>コレクション</h3>
					<p>アプリから動画を投稿すると自動でWebサイトに表示できる「コレクション」機能を使えば、煩雑な更新作業も不要で動画ギャラリーが作れます。</p>
				</li>
				<li>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/function_03_image.webp" width="160" height="160" loading="lazy" alt="">
					<h3>ECサイト連携</h3>
					<p>データフィードと連携することで商品データを簡単・効率的に利用できるようになりコマースとの親和性が高まります。</p>
				</li>
				<li>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/function_04_image.webp" width="160" height="160" loading="lazy" alt="">
					<h3>アナリティクス</h3>
					<p>分析機能で動画内でのアクション（タップ、ストック、ジャンプ）を効果測定、さらにヒートマップ（特許技術）で動画内のどんな箇所が注目されているかまで可視化できます。</p>
				</li>
			</ul>
			<p class="p_function_cms_button c_animation_fadeIn"><a class="p_function_cms_open">データ取得項目と外部連携サービス一覧</a></p>
			<div class="p_function_cms">
				<div class="p_function_cms_close"></div>
				<div class="p_function_cms_container">
					<div class="p_function_cms_body">
						<table>
							<tr>
								<th colspan="4">Tig CMSで標準取得できる主なデータ項目</th>
							</tr>
							<tr>
								<th class="p_function_cms_cellSm">対象サービス</th>
								<th class="p_function_cms_cellMd">項目名</th>
								<th>内容</th>
								<th class="p_function_cms_cellXs">LINE連携</th>
							</tr>
							<tr>
								<td>全共通</td>
								<td>Tig独自のユーザー識別子</td>
								<td>Tig Playerへの初回アクセス時にランダム生成される識別子(ブラウザ単位)</td>
								<td>★</td>
							</tr>
							<tr>
								<td>全共通</td>
								<td>ページロード</td>
								<td>アナリティクス上のページロード回数など</td>
								<td>★</td>
							</tr>
							<tr>
								<td>全共通</td>
								<td>動画再生</td>
								<td>アナリティクス上の再生回数 (累計、ユニーク)</td>
								<td>★</td>
							</tr>
							<tr>
								<td>全共通</td>
								<td>動画視聴離脱位置</td>
								<td>アナリティクス上の一定秒数以上の再生回数、再生完了率</td>
								<td>★</td>
							</tr>
							<tr>
								<td>全共通</td>
								<td>タップ時間、座標</td>
								<td>アナリティクス上のタップ回数、ヒートマップの閲覧</td>
								<td></td>
							</tr>
							<tr>
								<td>全共通</td>
								<td>アイテムストック</td>
								<td>アナリティクス上のストック回数、アイテム別ストック回数、発生率</td>
								<td>★</td>
							</tr>
							<tr>
								<td>全共通</td>
								<td>アイテムURLジャンプ</td>
								<td>アナリティクス上のURL遷移アクション回数、アクション発生率</td>
								<td>★</td>
							</tr>
							<tr>
								<td>全共通</td>
								<td>再生デバイスOS</td>
								<td>アナリティクス上の再生デバイス割合グラフ</td>
								<td>★</td>
							</tr>
							<tr>
								<td>Tig LIVE</td>
								<td>視聴者数 (累計、ユニーク数)</td>
								<td>LIVEアナリティクス上の視聴者数（積み上げ視聴数とリアルタイム視聴数の2軸から可能）</td>
								<td></td>
							</tr>
							<tr>
								<td>Tig LIVE</td>
								<td>同時視聴者数</td>
								<td>LIVEアナリティクス上の視聴者数時系列グラフ</td>
								<td></td>
							</tr>
							<tr>
								<td>Tig LIVE</td>
								<td>コメントデータ</td>
								<td>LIVEアナリティクス上のコメントデータダウンロード</td>
								<td>★</td>
							</tr>
							<tr>
								<td>Tig LIVE</td>
								<td>LIKE回数</td>
								<td>LIVEアナリティクス上のLIKE回数</td>
								<td></td>
							</tr>
						</table>
						<p class="p_function_cms_note">★LINE連携ご利用の際にLINEユーザーIDを介して紐づけが可能です。<br>
						※取得可能なデータ項目の一例です。その他の項目についてはお気軽にお問い合わせください。</p>
						<table>
							<tr>
								<th colspan="3">外部サービス連携プション</th>
							</tr>
							<tr>
								<th class="p_function_cms_cellSm">対象サービス</th>
								<th class="p_function_cms_cellMd">連携サービス名</th>
								<th>内容</th>
							</tr>
							<tr>
								<td>Tig LIVE<br>
								Tig Video<br>
								Tig Magazine</td>
								<td>LINE</td>
								<td>LINE内でTigコンテンツを配信・視聴可能にします<br>
								LINE ユーザーIDとの紐付けをおこない、ユーザーの視聴行動別にセグメンテーション分析を可能にします</td>
							</tr>
							<tr>
								<td>Tig LIVE<br>
								Tig Video</td>
								<td>Shopify</td>
								<td>Shopifyで構築されたECサイトとの連携を可能にします</td>
							</tr>
							<tr>
								<td>Tig LIVE</td>
								<td>ebisumart</td>
								<td>ebisumartで構築されたECサイトと連携を可能にします</td>
							</tr>
							<tr>
								<td>Tig LIVE<br>
								Tig Creator</td>
								<td>dfplus.io</td>
								<td>フィード連携サービス、主にECの商品データを自動的に取り込み可能にします</td>
							</tr>
							<tr>
								<td>Tig LIVE<br>
								Tig Creator</td>
								<td>DFPLUS</td>
								<td>フィード連携サービス、主にECの商品データを自動的に取り込み可能にします</td>
							</tr>
							<tr>
								<td>Tig LIVE<br>
								Tig Creator</td>
								<td>ニフティDFO</td>
								<td>フィード連携サービス、主にECの商品データを自動的に取り込み可能にします</td>
							</tr>
							<tr>
								<td>Tig LIVE<br>
								Tig Creator</td>
								<td>Gyro-n DFM</td>
								<td>フィード連携サービス、主にECの商品データを自動的に取り込み可能にします</td>
							</tr>
							<tr>
								<td>Tig LIVE</td>
								<td>Live!アンケート</td>
								<td>映像コンテンツ内でアンケートを呼び出し、リアルタイムに回答を表示できます</td>
							</tr>
							<tr>
								<td>Tig LIVE<br>
								Tig Video<br>
								Tig Magazine</td>
								<td>Google Form</td>
								<td>映像コンテンツ内でアンケートや問い合わせフォームを表示できます</td>
							</tr>
						</table>
						<p class="p_function_cms_note">※連携には通常料金に加え別途オプション費用が発生します。<br>
						※連携可能な外部サービスの一例です。その他の項目についてはお気軽にお問い合わせください。</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="p_flow" id="flow">
		<div class="p_flow_container">
			<div class="c_titleOrnament">FLOW</div>
			<h2 class="c_title">導入までの流れ</h2>
			<ol class="p_flow_list c_animation_splitObject">
				<li>
					<h3>STEP<b>01</b></h3>
					<p><span>お問い合わせ<br>
					・ご相談</span>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/flow_01_image.webp" width="200" height="160" loading="lazy" alt=""></p>
				</li>
				<li>
					<h3>STEP<b>02</b></h3>
					<p><span>ヒアリング</span>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/flow_02_image.webp" width="200" height="160" loading="lazy" alt=""></p>
				</li>
				<li>
					<h3>STEP<b>03</b></h3>
					<p><span>ご契約</span>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/flow_03_image.webp" width="200" height="160" loading="lazy" alt=""></p>
				</li>
				<li>
					<h3>STEP<b>04</b></h3>
					<p><span>利用スタート</span>
					<img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/flow_04_image.webp" width="200" height="160" loading="lazy" alt=""></p>
				</li>
			</ol>
		</div>
	</section>
	<section class="p_composition">
		<div class="p_composition_container">
			<div class="c_titleOrnament">COMPOSITION</div>
			<h2 class="c_title">Tig Creatorの仕組み</h2>
			<div class="p_composition_body c_animation_fadeIn"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/composition_image_sp.webp" width="328" height="822" loading="lazy" alt="図解（Tig Creatorの仕組み）" class="p_composition_imageSp"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/composition_image_pc.webp" width="1280" height="841" loading="lazy" alt="図解（Tig Creatorの仕組み）" class="p_composition_imagePc"></div>
		</div>
	</section>
	<section class="p_news">
		<div class="p_news_container">
			<div class="p_news_layout">
				<h2 class="p_news_title"><span>NEWS</span>お知らせ</h2>
				<?php $args = array(
					'post_type' => 'post',
					'category_name' => 'tig-creator',
					'posts_per_page' => 3,
				);
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : ?>
					<?php $parentCategory = get_category_by_slug('tig-creator');
					$parentCategoryId = $parentCategory->term_id; ?>
					<ul class="p_news_list">
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<time><?php echo get_post_time('Y/m/d'); ?></time>
									<?php $categorys = get_the_category();
									foreach ($categorys as $category) : ?>
										<?php if (($category->parent == $parentCategoryId)) : ?>
											<span><?php echo $category->name ;?></span>
										<?php endif ;?>
									<?php endforeach ;?>
									<p><?php the_title(); ?></p>
								</a>
							</li>
						<?php endwhile; wp_reset_postdata(); ?>
					</ul>
				<?php endif; ?>
			</div>
			<!-- <div class="p_news_button"><a href="">お知らせ一覧</a></div> -->
		</div>
	</section>
	<section class="p_faq" id="faq">
		<div class="p_faq_container">
			<div class="c_titleOrnament">FAQ</div>
			<h2 class="c_title">よくある質問</h2>
			<ul class="p_faq_list" id="faq_list">
				<li>
					<h3 class="js_active"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_q.webp" width="31" height="31" loading="lazy" alt="Q">個人でも利用（契約）は可能ですか？</h3>
					<p><span><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_a.webp" width="31" height="31" loading="lazy" alt="A">法人・個人事業主の方のみご利用（契約）可能です</span></p>
				</li>
				<li>
					<h3><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_q.webp" width="31" height="31" loading="lazy" alt="Q">利用アカウントの発行・追加数に制限はありますか？</h3>
					<p><span><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_a.webp" width="31" height="31" loading="lazy" alt="A">最低5アカウントからの発行となります。ただし、ご契約プランにより変更となるため問い合わせください</span></p>
				</li>
				<li>
					<h3><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_q.webp" width="31" height="31" loading="lazy" alt="Q">視聴者は専用アプリやアカウント登録が必要となりますか？</h3>
					<p><span><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_a.webp" width="31" height="31" loading="lazy" alt="A">視聴にはアカウント登録等は必要ありません。どなたでもウェブブラウザなどから視聴可能です</span></p>
				</li>
				<li>
					<h3><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_q.webp" width="31" height="31" loading="lazy" alt="Q">利用可能な端末を教えてください。</h3>
					<p><span><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_a.webp" width="31" height="31" loading="lazy" alt="A">現在はiPhone（推奨:iPhone 12以上、iOS:16.x以上）のみのご提供となっております</span></p>
				</li>
				<li>
					<h3><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_q.webp" width="31" height="31" loading="lazy" alt="Q">Tig Creatorアプリはどこからダウンロードできますか？</h3>
					<p><span><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_a.webp" width="31" height="31" loading="lazy" alt="A">App Storeからダウンロード可能です</span></p>
				</li>
				<li>
					<h3><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_q.webp" width="31" height="31" loading="lazy" alt="Q">映像編集はTig Creatorアプリ上でできますか？</h3>
					<p><span><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_a.webp" width="31" height="31" loading="lazy" alt="A">映像の編集はTig Creatorアプリでおこなうことはできません。別途、お手持ちの動画編集アプリをご利用ください</span></p>
				</li>
				<li>
					<h3><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_q.webp" width="31" height="31" loading="lazy" alt="Q">アップロードできる動画の尺に制限はありますか？</h3>
					<p><span><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_a.webp" width="31" height="31" loading="lazy" alt="A">ひとつの動画で3分以内までとなっています</span></p>
				</li>
				<li>
					<h3><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_q.webp" width="31" height="31" loading="lazy" alt="Q">アップロード済みのコンテンツを再編集できますか？</h3>
					<p><span><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_a.webp" width="31" height="31" loading="lazy" alt="A">アップロード後も再編集が可能です</span></p>
				</li>
				<li>
					<h3><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_q.webp" width="31" height="31" loading="lazy" alt="Q">アップロード済みのコンテンツを削除できますか？</h3>
					<p><span><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_a.webp" width="31" height="31" loading="lazy" alt="A">アップロード後も削除が可能です</span></p>
				</li>
				<li>
					<h3><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_q.webp" width="31" height="31" loading="lazy" alt="Q">アップロードできる動画の本数制限はありますか？</h3>
					<p><span><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/faq_icon_a.webp" width="31" height="31" loading="lazy" alt="A">公開可能な本数に制限があります。ただし、ご契約プランにより変更となるため問い合わせください</span></p>
				</li>
			</ul>
		</div>
	</section>
	<section class="p_contact">
		<div class="p_contact_container">
			<p class="p_contact_catchcopy">お気軽にご相談ください</p>
			<div class="p_contact_button"><a href="<?php echo home_url(); ?>/tig-creator/inquiry/"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/icon_contactWhite.svg" width="29" height="22" loading="lazy" alt="">お問い合わせはこちら</a></div>
		</div>
	</section>
	<footer class="l_footer">
		<div class="l_footer_anchorLink"><a href="#top"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/footer_icon_anchorLink.webp" width="31" height="18" loading="lazy" alt="トップへ戻る"></a></div>
		<div class="l_footer_body">
			<div class="l_footer_container">
				<div class="l_footer_layout">
					<div class="l_footer_company">
						<div class="l_footer_logo01"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/logo_tigCreator_white.webp" width="408" height="59" loading="lazy" alt="Tig Creator"></div>
						<div class="l_footer_logo02"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/logo_paronym.webp" width="307" height="25" loading="lazy" alt="PARONYM"></div>
						<address><span>TEL 03-6894-4086</span><span>[受付]　平日 10:00 〜 19:00 （土日祝除く）</span></address>
						<address><span>〒104-0045</span><span>東京都中央区築地7-2-1　THE TERRACE TSUKIJI 6階 WEST</span></address>
					</div>
					<nav>
						<ul class="l_footer_menu">
							<li><a href="#featuer">特徴</a></li>
							<li><a href="#case">導入事例</a></li>
							<li><a href="#function">機能紹介</a></li>
							<li><a href="#flow">導入までの流れ</a></li>
							<li><a href="#faq">よくある質問</a></li>
							<li><a href="https://cms.tigmedia.jp/" target="_blank">ログイン</a></li>
							<li><a href="https://www.paronym.jp/privacy-policy/" target="_blank">プライバシーポリシー</a></li>
							<li><a href="https://www.paronym.jp/terms/" target="_blank">利用規約</a></li>
							<li><a href="https://www.paronym.jp/company/" target="_blank">運営会社</a></li>
						</ul>
						<ul class="l_footer_button">
							<li><a href="<?php echo home_url(); ?>/download/tig-creator/"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/icon_requestWhite.svg" width="15" height="16" loading="lazy" alt="">資料請求</a></li>
							<li><a href="<?php echo home_url(); ?>/tig-creator/inquiry/"><img src="<?php echo cv_s3url_creator(); ?>/img/tigcreator/icon_contactWhite.svg" width="18" height="14" loading="lazy" alt="">お問い合わせ</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="l_footer_copyright">&copy;PARONYM INC.</div>
	</footer>
	<?php endwhile; endif; ?>
	<?php wp_footer(); ?>
</body>
</html>
