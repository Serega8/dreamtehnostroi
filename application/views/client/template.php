<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" type="image/x-icon" href="/content/favicon.ico"/>

        <? foreach ($styles as $style) { ?>
            <?= HTML::style($style); ?>
        <? } ?>

        <? foreach ($scripts as $script) { ?>
            <?= HTML::script($script); ?>
        <? } ?>
        <title>Dream Techno Stroy</title>
        <!--<title><?// if (!empty($seo)) echo $seo['t']; ?></title>-->
        <meta name="description" content="<? if (!empty($seo)) echo $seo['d']; ?>">
        <meta name="keywords" content="<? if (!empty($seo)) echo $seo['k']; ?>">
        <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    </head>
    <body>
        <header>
            <div class="background">
			<div class="inner">
				<a href="/" class="logo" target="_self" folder="content">Дрим ТехноСтрой</a>
				<div class="znak1"></div>
			</div><!-- inner -->
		</div><!-- background -->
		<div class="white">
			<div class="menu">
                            
                            
                <?// if (!empty($menu)) { ?>
                    <?// foreach ($menu as $m) { ?>
                        <!--<a href="/catalog/<?//= $m['translit_name']; ?>"><?//= $m['name']; ?></a>-->
                    <?// } ?>
                <?// } ?>
                            <ul>
					<li><a href="/" class="dinamicLink">Главная</a></li>
					<li><a href="/категории" class="dinamicLink">Категории</a></li> 
					<li><a href="/услуги-и-цены" class="dinamicLink">Услуги и цены</a> 
<!--						<ul class="dropdown">
							<li><a href="#">Алмазная резка</a></li>
							<li><a href="#">Алмазное сверление</a></li>
							<li><a href="#">Резка канатом</a></li>
							<li><a href="#">Демонтажные работы</a></li>
						</ul></li>-->
					<li><a href="/наши-объекты" class="dinamicLink">Наши объекты</a></li>
					<li><a href="/контакты" class="dinamicLink">Контакты</a></li>
				</ul>
			</div> <!--menu -->
		</div> <!--white -->
		<div class="backgroundtwo">		
			<div class="basic">
				<div class="slider">
					<div id="myCarousel" class="carousel slide">
						<!-- Carousel items -->
						<div class="carousel-inner">
						    <div class="active item"><img src="/content/images/slide1.jpg" alt="" /></div>
						    <div class="item"><img src="/content/images/slide2.jpg" alt="" /></div>
						    <div class="item"><img src="/content/images/slide3.jpg" alt="" /></div>
						    <div class="item"><img src="/content/images/slide4.jpg" alt="" /></div>
						</div>
					    <!-- Carousel nav -->
					    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				    </div> <!-- carousel slide -->
				</div> <!--slider -->
				<!-- <div id="mySlides">
				    <div id="slide1">    
				        <img src="img/slide1.jpg" alt="Slide 1 jFlow Plus" />
				        <span><h3>Алмазная резка</h3><p>Технологический процесс образования технологических отверстий и проёмов различных форм в строительных конструкциях с применением алмазного диска. <a href="#" title="Coolness" class="readmore">Читать подробнее...</a></p></span>
					</div>     -->
				<div class="telephon">
					<h5>Телефоны</h5>
					<p>гор.<span style="font-size: 24px">(017)</span> 123 45 67</p>		
					<p>Велком<span style="font-size: 24px">(029)</span> 987 65 43</p>	
					<p>МТС<span style="font-size: 24px">(029)</span> 987 65 43</p>	
				</div><!-- telephon -->
				<div class="null"></div>
				<div class="whitebackground">
					<div class="square">
						<img src="/content/images/square.png"/>
					</div><!-- square -->
					<div class="hello">
						<p>Вас приветствует <strong>ЧУП "Дрим ТехноСтрой"</strong>.</p> 
						<p>Команда опытных специалистов предлагает свои услуги</p> 
						<p>для юридических и частных лиц.</p>		
					</div><!-- hello -->
					<div class="natbank">
						<table id="best_kurz" style="width: 245px" class="banks hovers tune" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<th style="background: #8e8e8e" width="16%"></th>
									<th width="28%">сдать</th>
									<th width="28%">купить</th>
									<th width="28%" style="background: #8e8e8e">НБРБ<br>
										<span style="font-size:10px">24.02.2014</span>
									</th>
								</tr>
								<tr onclick="window.location = '/exchange_rates/'">
									<td>USD</td>
									<td>9730</td>
									<td>9760</td>
									<td>9730</td>
								</tr>
								<tr onclick="window.location = '/exchange_rates/'">
									<td>EUR</td>
									<td>13360</td>
									<td>13400</td>
									<td>13340</td>
								</tr>
								<tr onclick="window.location = '/exchange_rates/'">
									<td>RUB</td>
									<td>272</td>
									<td>273.8</td>
									<td>273</td>
								</tr>                      
							</tbody>
						</table>
			<!-- <script type="text/javascript" src="http://benefit.by/ads/www/delivery/ajs.php?zoneid=50&amp;cb=16641617729&amp;charset=UTF-8&amp;loc=http%3A//benefit.by/exchange_rates/%3Fyclid%3D5706464119106903882/&amp;referer=http%3A//go.mail.ru/search%3Fq%3D%25D0%25BA%25D1%2583%25D1%2580%25D1%2581%25D1%258B+%25D0%25B2%25D0%25B0%25D0%25BB%25D1%258E%25D1%2582+%25D0%25B2+%25D0%25BC%25D0%25B8%25D0%25BD%25D1%2581%25D0%25BA%25D0%25B5+%25D0%25B4%25D0%25BB%25D1%258F+%25D1%2581%25D0%25B0%25D0%25B9%25D1%2582%25D0%25B0"></script> -->
					</div> <!-- natbank -->
					<div class="null"></div>
				</div><!-- whitebackground -->
			</div> <!-- basic -->
		</div> <!-- backgroundtwo -->	
        </header>


            <div id="content">
                <?= $content; ?>
            </div>
        
        <footer>
            <div class="bye"><h4>Мы рады видеть Вас!</h4></div>
		<div class="info">
			<div class="info_center">
				<div class="znak2"></div>
				<div class="contacts_images">
					<p><img src="/content/images/house.png"/></p>
					<p><img src="/content/images/envelope.png"/></p>
					<p>МТС</p>
					<p>Velcom</p>
				</div> <!-- contacts_images -->
				<div class="contacts">
					<p class="address">Адрес: Республика Беларусь, 220053, г. Минск, ул. Минская 1, oфис 111</p>
					<p class="email">E-mail: <a href="mailto:#">hello@dream.net</a></p>
					<p class="mts">Телефон/факс: (017) 123 45 67</p>
					<p class="velcom">Мобильный телефон: (029) 987 65 43</p>
				</div><!-- contacts -->
				<div class="copyright">
					<p>&copy; ЧУП "ДримТехноСтрой" 2013-2014</p>
				</div><!-- copyright -->
				<div class="intellect">
					<p>&copy;Intellect IT 2014 <a href="#" target="blank">"продвижение сайтов в Минске"</a></p>
				</div><!-- intellect -->
				<div class="null"></div>
			</div> <!-- info_center -->
		</div>	<!-- info -->
        </footer>
    </body>
</html>
