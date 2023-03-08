<?php 
	get_header();
?>
	
	<?php 
	if( have_posts() ) {
		while( have_posts() ) {
			the_post();
			the_content();
		}
	}
	?>
	<div style="display: none;">
		<section class="video-banner">
			<div class="background-image" style="background-image: url(https://rituals.scene7.com/is/image/rituals/2023_Namaste_KeyVisual_Glow_DayCream_716:Widescreen?wid=2498&hei=1405);">
				<div class="background-video">
					<div class="video-wrapper">
						<video playsinline="" loop="" muted="" name="media" autoplay >
							<source src="https://rituals.scene7.com/is/content/rituals/namaste-2023-web-hero-banner-16-9" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
			<div class="text-wrapper">
				<div class="text-wrapper__inner">
					<div class="text-copy">
						<span class="icon"></span>
						<h4>New</h4>
						<h1>Clean &amp; Conscious Skincare</h1>
						<p>Powered by bakuchiol, the plant-based alternative to retinol.</p>
						<a href="https://www.rituals.com/en-gb/collection-story-namaste.html" class="btn">Discover</a>
					</div>		
				</div>		
			</div>		
		</section>
		<section class="experience">
			<div class="owl-carousel owl-theme">
				<div class="item">
					<h4>At your service</h4>
					<p>Free delivery with orders over £30 for My Rituals members</p>
				</div>
				<div class="item">
					<h4>At your service</h4>
					<p>Click &amp; Collect: order online &amp; pick up in one of the selected stores. <a href="https://www.rituals.com/en-gb/faq-theme?catid=delivery&amp;qid=ka04L000000N5QpQAK" tabindex="-1">More info</a></p>
				</div>
				<div class="item">
					<h4>At your service</h4>
					<p>Get online advice on <a href="https://api.whatsapp.com/send?phone=447939424063&amp;text=Welcome%21+Press+send+to+start+your+conversation&amp;utm_source=whatsapp&amp;utm_medium=paid+social&amp;utm_campaign=alwayson&amp;utm_content=paid&amp;lang=en" tabindex="-1">WhatsApp</a></p>
				</div>
			</div>
		</section>
		<section class="collection">
			<div class="collection__item">
				<div class="text-wrapper">
					<h4>EXCLUSIVELY FOR MEMBERS</h4>
					<h2>Your Gift</h2>
					<p>Spend £40 or more and receive a hand balm and scrub set from The Ritual of Mehr.*</p>
					<a class="btn" href="https://www.rituals.com/en-gb/bestsellers">Shop now</a>
				</div>
				<div class="image-link-wrapper" style="background-image: url(https://rituals.scene7.com/is/image/rituals/1115191-2023-gwp-mehr-microbiomehandcare:4-by-3?wid=960&hei=720);">
					<a href="https://www.rituals.com/en-gb/bestsellers"></a>
				</div>
			</div>
			<div class="collection__item">
				<div class="text-wrapper">
					<h4>ALL YOU NEED</h4>
					<h2>Revive, Refresh & Tone</h2>
					<p>Elevate your routine by personalising it with one of our natural cleansers or exfoliators.</p>
					<a class="btn" href="https://www.rituals.com/en-gb/collection-purify.html">Shop now</a>
				</div>
				<div class="image-link-wrapper" style="background-image: url(https://rituals.scene7.com/is/image/rituals/1114628_2023_Namaste_Glow_Exfoliator_InUse_108:4-by-3?wid=960&hei=720);">
					<a href="https://www.rituals.com/en-gb/collection-purify.html"></a>
				</div>
			</div>
		</section>
		<section class="product-slider">
			<div class="product-slider-inner">
				<div class="owl-carousel owl-theme">
					<div class="item master">
						<div class="text-wrapper">
							<h4>Nature on skin</h4>
							<h3>Your Skin Deserves the Best</h3>
							<p>Care for your complexion with our selection of products, made with 90% natural origin ingredients.</p>
							<a class="btn btn-secondary d-block" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1116377-namaste-24hhydratingdaycream-50ml?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Hydrating Day Cream</h3>
							<p class="product-description">The Ritual of Namaste, hydrating day cream, 50 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£32.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1116396-namaste-glowantiageingdaycream-50ml-exploded?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Refill Anti-ageing Day Cream</h3>
							<p class="product-description">The Ritual of Namaste, refill anti-ageing day cream, 50 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£33.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1112451_purifyingcharcoalwondermask-70g-1?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Face Mask</h3>
							<p class="product-description">The Ritual of Namaste, face mask, 70 gr</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£32.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1116399-namaste-glowantiageingnightcream-50ml?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Anti-Ageing Night Cream</h3>
							<p class="product-description">The Ritual of Namaste, anti-ageing night cream, 50 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£37.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1112026_hydratingserum-30ml-exploded?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Refill Hydrating Serum</h3>
							<p class="product-description">The Ritual of Namaste, refill hydrating serum, 30 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£27.00</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural formula</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1114621_TheRitualofNamasteGentleCleansingFoamPRO?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Cleansing Foam</h3>
							<p class="product-description">The Ritual of Namaste, cleansing foam, 150 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£14.00</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural formula</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1106458_skinbrighteningfaceexfoliator-75ml-1?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Exfoliator</h3>
							<p class="product-description">The Ritual of Namaste, exfoliator, 75 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£14.00</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1114633_naturalboosterserum-20ml?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Hyaluronic Acid Natural Booster</h3>
							<p class="product-description">The Ritual of Namaste, natural booster serum, 20 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£21.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1114632_naturalboosterserum-20ml?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Vitamin C* Natural Booster</h3>
							<p class="product-description">The Ritual of Namaste, natural booster serum, 20 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£21.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="collection">
			<div class="collection__item">
				<div class="text-wrapper">
					<h4>CLASSIC COLLECTION CANDLES</h4>
					<h2>Try Now</h2>
					<p>Transform your house into a home with one of our iconic fragrances. Try now for £18.50 instead of £24.50.*</p>
					<a class="btn" href="https://www.rituals.com/en-gb/home-collection/scented-candles/classic-scented-candles">Discover</a>
				</div>
				<div class="image-link-wrapper" style="background-image: url(https://rituals.scene7.com/is/image/rituals/2021_February_HomeClassicCollectionRelaunch_Lifestyle_MixedCandles_0330_RGB:4-by-3?wid=960&hei=720);">
					<a href="https://www.rituals.com/en-gb/home-collection/scented-candles/classic-scented-candles"></a>
				</div>
			</div>
			<div class="collection__item">
				<div class="text-wrapper">
					<h4>PROTECT AND NOURISH</h4>
					<h2>Lip Care</h2>
					<p>Discover our improved natural formula to keep your lips hydrated.</p>
					<a class="btn" href="https://www.rituals.com/en-gb/beauty/skincare/lip-care">Shop now</a>
				</div>
				<div class="image-link-wrapper" style="background-image: url(https://rituals.scene7.com/is/image/rituals/2020_LipcareLifestyle_Collection_16612:4-by-3?wid=960&hei=720);">
					<a href="https://www.rituals.com/en-gb/beauty/skincare/lip-care"></a>
				</div>
			</div>
		</section>
		<section class="product-slider">
			<div class="product-slider-inner">
				<div class="owl-carousel owl-theme">
					<div class="item master">
						<div class="text-wrapper">
							<h4>GET COSY THIS WINTER</h4>
							<h3>Winter Essentials</h3>
							<p>Treat your body, mind and soul with one of our winter favourites.</p>
							<a class="btn btn-secondary d-block" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1116377-namaste-24hhydratingdaycream-50ml?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Hydrating Day Cream</h3>
							<p class="product-description">The Ritual of Namaste, hydrating day cream, 50 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£32.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1116396-namaste-glowantiageingdaycream-50ml-exploded?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Refill Anti-ageing Day Cream</h3>
							<p class="product-description">The Ritual of Namaste, refill anti-ageing day cream, 50 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£33.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1112451_purifyingcharcoalwondermask-70g-1?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Face Mask</h3>
							<p class="product-description">The Ritual of Namaste, face mask, 70 gr</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£32.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1116399-namaste-glowantiageingnightcream-50ml?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Anti-Ageing Night Cream</h3>
							<p class="product-description">The Ritual of Namaste, anti-ageing night cream, 50 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£37.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1112026_hydratingserum-30ml-exploded?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Refill Hydrating Serum</h3>
							<p class="product-description">The Ritual of Namaste, refill hydrating serum, 30 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£27.00</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural formula</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1114621_TheRitualofNamasteGentleCleansingFoamPRO?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Cleansing Foam</h3>
							<p class="product-description">The Ritual of Namaste, cleansing foam, 150 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£14.00</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural formula</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1106458_skinbrighteningfaceexfoliator-75ml-1?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Exfoliator</h3>
							<p class="product-description">The Ritual of Namaste, exfoliator, 75 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£14.00</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1114633_naturalboosterserum-20ml?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Hyaluronic Acid Natural Booster</h3>
							<p class="product-description">The Ritual of Namaste, natural booster serum, 20 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£21.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
					<div class="item">
						<div class="image-wrapper">
							<p class="promo">Natural Origin</p>
							<a href="#">
								<img src="https://rituals.scene7.com/is/image/rituals/1114632_naturalboosterserum-20ml?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=534" alt="">
							</a>
						</div>
						<div class="text-wrapper">
							<h3 class="product-name">Vitamin C* Natural Booster</h3>
							<p class="product-description">The Ritual of Namaste, natural booster serum, 20 ml</p>
						</div>
						<div class="cta-wrapper">
							<p class="product-price">£21.50</p>
							<a class="add-to-cart" href="#">Shop now</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="collection">
			<div class="collection__item">
				<div class="text-wrapper">
					<h4>LOOKING FOR SKINCARE TIPS?</h4>
					<h2>Skincare Consultation</h2>
					<p>Confused about what your skin needs and what products to use? Try our quick online test to find out the answers.</p>
					<a class="btn" href="https://www.rituals.com/en-gb/skincare-consultation-rituals.html">Take the test</a>
				</div>
				<div class="image-link-wrapper" style="background-image: url(https://rituals.scene7.com/is/image/rituals/2023_Namaste_KeyVisual_Glow_Groupshot_051:4-by-3?wid=960&hei=720);">
					<a href="https://www.rituals.com/en-gb/skincare-consultation-rituals.html"></a>
				</div>
			</div>
			<div class="collection__item">
				<div class="text-wrapper">
					<h4>PROTECTING THE PLANET</h4>
					<h2>Our Refill Collection</h2>
					<p>Sustainable shopping has never been easier. Every collection has refill options you'll love.</p>
					<a class="btn" href="https://www.rituals.com/en-gb/refill">Shop now</a>
				</div>
				<div class="image-link-wrapper" style="background-image: url(https://rituals.scene7.com/is/image/rituals/2022_January_CleanConscious_NamasteDayCreamRefill_026:4-by-3?wid=960&hei=720);">
					<a href="https://www.rituals.com/en-gb/refill"></a>
				</div>
			</div>
		</section>
		<section class="collection">
			<div class="collection__item">
				<div class="text-wrapper">
					<h4>SUSTAINABLE WELLBEING</h4>
					<h2>Smart Upcycling Ideas</h2>
					<p>Give your favourite Rituals products a new lease of life by reusing them.</p>
					<a class="btn" href="https://www.rituals.com/en-gb/sustainability.html">Discover</a>
				</div>
				<div class="image-link-wrapper" style="background-image: url(https://rituals.scene7.com/is/image/rituals/2022-upcycling-candle-holders-kitchen-utensils-173:4-by-3?wid=960&hei=720);">
					<a href="https://www.rituals.com/en-gb/sustainability.html"></a>
				</div>
			</div>
			<div class="collection__item">
				<div class="text-wrapper">
					<h4>THE ART OF SOULFUL LIVING</h4>
					<h2>What is Awareness?</h2>
					<p>A key point on your compass to personal wellbeing, we reveal what awareness is and how it can improve your life.</p>
					<a class="btn" href="https://www.rituals.com/en-gb/mag-rituality-what-is-awareness.html">Read more</a>
				</div>
				<div class="image-link-wrapper" style="background-image: url(https://rituals.scene7.com/is/image/rituals/2022-taosl-awareness:4-by-3?fmt=png-alpha&wid=960&hei=720);">
					<a href="https://www.rituals.com/en-gb/mag-rituality-what-is-awareness.html"></a>
				</div>
			</div>
		</section>
		<section class="membership">
			<div class="membership__inner-wrapper">
				<div class="membership__image-holder">
					<a href="https://www.rituals.com/en-gb/login" class="image-link">
						<div class="image-holder"></div>
					</a>
				</div>
				<div class="membership__content-wrapper product-gift-ribbon">
					<div class="membership__text-holder">
						<span>Make Every Purchase Count</span>
						<h3>My Rituals Membership</h3>
						<p>Discover the world of My Rituals and let us surprise you. Your welcome gift is already waiting!</p>
					</div>
					<div class="membership__gwp">
						<div class="gwp-minicart-wrapper">
							<div class="flyout-progress-bar">
								<div class="flyout-progress-text">
									<p><b>This month's member gift.</b> Receive a gift of your choice when you spend another £40.00.</p>
									<progress class="flyout-scroll-progress" max="100" value="5.0"> 5.0 </progress>
								</div>
								<div class="flyout-progress-img">
									<img src="https://rituals.scene7.com/is/image/rituals/1115191_2023-february-gwp-mehrhandcare-probox?resMode=sharp2&fmt=png-alpha&crop=1250,750,4500,4500&wid=1040" alt="" title="The Ritual of Mehr Hand Care Set">
								</div>
							</div>
						</div>
					</div>
					<div class="membership__buttons">
						<a href="https://www.rituals.com/en-gb/login" class="btn">Log In or Sign Up</a>
						<a href="https://www.rituals.com/en-gb/my-rituals-terms.html" class="learn-more">*Terms &amp; conditions apply</a>
					</div>
				</div>
			</div>
		</section>
		<section class="terms-and-conditions">
			<div class="terms-and-conditions-info">
				<p>* By using a promotion offer you are agreeing to the content of our <a target="_self" href="https://www.rituals.com/en-gb/disclaimer-page-promotions.html">terms and conditions</a>.</p>
			</div>
		</section>
		<section class="stay-informed">
			<div class="newsletter-wrapper inner-wrapper">
				<div>
					<h3>Stay up to date</h3>
				</div>
				<div class="text-form-container">
					<p>Sign up for the latest Rituals news and exclusive offers. Rituals will use your personal data as described in our <a href="/en-gb/privacy-policy.html" tabindex="0">Privacy Policy</a></p>
					<div class="input-container emailform">
						<form method="post" action="https://www.rituals.com/on/demandware.store/Sites-UK-Site/en_GB/Newsletter-SubscribeByMail" name="dwfrm_newsletter" class="rituals-form" novalidate="novalidate">
							<div class="form-row">
								<div class="form-row full-width-row  required">
									<div class="field-wrapper inputfield-row">
										<label for="dwfrm_newsletter_email" class=""><span class="label-email">Your e-mail address</span></label>
										<input class="inputfield-text formal email required" type="email" id="dwfrm_newsletter_email" name="dwfrm_newsletter_email" value="">
									</div>
								</div>
								<div class="button-wrapper">
									<button class="btn--white btn last" type="submit" value="Apply" name="dwfrm_newsletter_submit" tabindex="0">Subscribe</button>
								</div>
							</div>
							<input type="hidden" name="csrf_token" value="vFpbcXH1lEO4GA0h9BqWuxaA3CFbv6tbzatOo67ShivNiRFbUnzHERpSt2WC51rZUJyJpuOGVsFBTiVinNUd7qNjqnyZ-eSjm7Kiai4IR24EAs5IVQFPO3ycQEoGvkSyR6qNaEJZiZVNqy_b1gWqP_PxcFZn9d37PUG6YjpPe7pTXCfkQfY=">
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	
<?php 
	get_footer();
?>