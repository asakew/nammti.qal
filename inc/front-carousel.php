<?php
if( is_front_page() ) { ?>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<ol class="carousel-indicators">
		<li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
		<li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
		<li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img loading="lazy" src="<?php bloginfo("template_url") ?>/assets/img/stayl/3.jpg" class="bd-placeholder-img" alt="lalal" width="1100" height="500">
			<div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
				<div class="pace-progress-inner"></div>
			</div>
			<div class="pace-activity"></div></div>
			<div id="particles-js" style="height: 997px;"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="514" height="997"></canvas></div>
			<div class="container">
				<div class="carousel-caption">
					<h1>Vatan himoyachilari kuni</h1>
					<p>Ona Vatan ravnaqi yo‘lida o'zining mas'uliyatli va sharafli burchini munosib ado etayotgan mard o'g'lonlarimiz, fidoyi yurtdoshlarimiz – barchangizga bayram muborak. Mustahkam sog'liq, kuch-g'ayrat, oilaviy baxt va fayzu baraka doimiy hamrohingiz bo‘lsin.</p>
					<!--p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p-->
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img loading="lazy" src="<?php bloginfo("template_url") ?>/assets/img/stayl/1.jpg" class="bd-placeholder-img" alt="lalal" width="1100" height="500">
			<div class="container">
				<div class="carousel-caption">
					<h1>Navroz bayrami</h1>
					<p>Navruz ayyomingiz muborak bo'lsin! Yurtimiz uchun yangilanish fasli va bugungi yangi yil kuni muborak bo'lsin!
						Bugungi Navruzi ayyom bilan barcha yurtdoshlarimizni qutlayman.
					Bayram kayfiyati sizlarni yil davomida tark etmasin.</p>
					<!--p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p-->
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img loading="lazy" src="<?php bloginfo("template_url") ?>/assets/img/stayl/2.jpg" class="bd-placeholder-img" alt="lalal" width="1100" height="500">
			<div class="container">
				<div class="carousel-caption">
					<h1>Iqtidorli talabalar</h1>
					<p></p>
					<!--p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p-->
				</div>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</a>
</div>
<?php }?>
<script type="text/javascript" src="http://zornet.ru/Ajaxoskrip/Fyrkes/snowcursor.min.js"></script>