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
					<!--<li><a href="/категории" class="dinamicLink">Категории</a></li>--> 
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
