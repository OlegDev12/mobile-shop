<?php 
//*********************** Главная страница *************************
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html>
<html lang="uk">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>розкладний садовий табурет 2 в 1</title>
	<script src="ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<meta name="description" content="розкладний садовий табурет 2 в 1! Доставка по всій Україні">
	<meta name="viewport" content="width=480">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css?3.0">

	<link rel="preload" href="css/AvenirNextCyr.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="css/AvenirNextCyr.css">
	</noscript>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">


	<meta property='og:title' content='розкладний садовий табурет 2 в 1'>
	<meta property='og:description' content='Акційна ціна! Доставка по всій Україні'>
	<meta property='og:type' content='website'>
	<meta property='og:url' content=''>
	<!-- <meta property='og:image' content='img/a'> -->
	<!-- Meta Pixel Code -->
	<script>
		! function (f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function () {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '817822397049829');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
			src="/o__www.facebook.com/tr?id=817822397049829&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->
</head>

<body>
	<div class="main_wrapper">

		<!-- header 3 -->
		<header class="offer_section offer3">
			<div class="title_block">
				<h1 class="main_title">розкладний садовий табурет 2 в 1</h1>
			</div>
			<div class="image_block">
				<img class="offer_image" src="images/main1.png" alt="розкладний садовий табурет 2 в 1">
				<!-- <div class="discount_block">
					<div class="value">-
						%
					</div>
					<div class="text">знижка</div>
				</div> -->
			</div>
			<div class="benefits_list clearfix">
				<div class="benefit_item">Офіційна гарантія </div>
				<div class="benefit_item">Швидка доставка</div>
				<div class="benefit_item">Оплата при отриманні</div>
			</div>
			<div class="price_block clearfix">
				<div class="price_item old">
					<div class="text">Звичайна ціна:</div>
					<div class="value">
					2200грн
					</div>
				</div>
				<div class="price_item new">
					<div class="text">Ціна зі знижкою:</div>
					<div class="value" style="color: red;">
					1699грн
					</div>
				</div>
			</div>

			<div class="timer">
				<p>Пропозиція діє:</p>
				<div class="timer_container">
					<div class="timer_block">
						<div class="count hours"></div>
						<div class="text">годин</div>
					</div>
					<div class="timer_block">
						<div class="count minutes"></div>
						<div class="text">хвилин</div>
					</div>
					<div class="timer_block">
						<div class="count seconds"></div>
						<div class="text">секунд</div>
					</div>
				</div>
			</div>
			<a href="#order_form" class="button">Замовити зі знижкою</a>
			<div class="products_count">Залишилось : <span>9 шт</span></div>
			
		</header>

		<section class="benefits_section" style="padding-top: 0;">
		<h2 class="title">ВСЕ ЛЕГКО ТА ПРОСТО</h2>
		<img style="width: 100%;" class="img" src="images/GIF.gif" alt="розкладний садовий табурет 2 в 1 переваги">
			<br><br>
			<div class="benefits_list2">
				
				<p style="padding: 0 40px;">
				Розкладний садовий табурет 2 в 1 можна використовувати як звичайний стілець так і підставку для ніг . Дає змогу працювати в положенні сидячи та на колінах, залежно від вашого положення.
				<br><br>Для більшої зручності стілець також обладнаний бічними ручками для зручного перенесення.
				<br><br>Вага всього 2.7 кг.
				<br><br>Крім того, в комплект входить сумка з трьома відділеннями, у яку можна покласти необхідні ручні інструменти.

				</p>

				<div class="benefit_item">
					<img class="img" src="images/i2.jpg" alt="розкладний садовий табурет 2 в 1 переваги">
					<div class="text_block">
						<h4>ДОПОМАГАЄ ЗНЯТИ НАВАНТАЖЕННЯ ЗІ СПИНИ</h4>
						<!--<p>Широка лопата ідеально підходить для пересадки рослин.
						</p>
						<br>
						<p>Параметри продукту:</p>
						<ul style="text-align: left; padding-left: 60px;">
							<li>✔️ Загальна довжина: 25 см</li>
							<li>✔️ Робоча ширина: 8 см</li>
						</ul>-->
					</div>
				</div>
				<div class="benefit_item">
					<img class="img" src="images/i3.jpg" alt="розкладний садовий табурет 2 в 1 переваги">
					<div class="text_block">
						<h4>ВИСОТА 49 СМ, ШИРИНА СИДІННЯ 41 СМ</h4>
						<!--<p>Садовий тризуб використовується для ретельного розпушування і аерації грунту.

							Кігті ідеально підходять для кам'янистого ґрунту та для роботи в тісних рядах.
						</p>
						<br>
						Параметри продукту:
						<ul style="text-align: left; padding-left: 60px;">
							<li>✔️ Загальна довжина: 22 см</li>
							<li>✔️ Робоча ширина: 8 см</li>
						</ul>-->
					</div>
				</div>
				<div class="benefit_item">
					<img class="img" src="images/i6.jpg" alt="розкладний садовий табурет 2 в 1 переваги">
					<div class="text_block">
						<h4>СТІЛЕЦЬ ОБЛАДНАНИЙ БІЧНИМИ РУЧКАМИ ДЛЯ ЗРУЧНОГО ПЕРЕНЕСЕННЯ</h4>
						
					</div>
				</div>
				<div class="benefit_item">
					<img class="img" src="images/i5.jpg" alt="розкладний садовий табурет 2 в 1 переваги">
					<div class="text_block">
						<h4>В КОМПЛЕКТІ ЗРУЧНА СУМКА, У ЯКУ МОЖНА ПОКЛАСТИ РУЧНІ ІНСТРУМЕНТИ</h4>
						
					</div>
				</div>
				<div class="benefit_item">
					<img class="img" src="images/i4.jpg" alt="розкладний садовий табурет 2 в 1 переваги">
					<div class="text_block">
						<h4>ЗРОБЛЕНИЙ ЗІ СТАЛІ ТА EVA ПІНИ. ВИТРИМУЄ ДО 150 КГ</h4>
						
					</div>
				</div>
			</div>
			<a href="#order_form" class="button">Замовити зі знижкою</a>
		</section>

		<!-- <section class="video_section description_section">
			<h2 class="title">Відео-огляд пристрою</h2>
			<div class="video_block">
				<div class="youtube" id="Z9xSc4JE4os"></div>
			</div>
		</section> -->




		<!-- /benefits -->
		<section class="offer_section">
			<h2 class="title">ХАРАКТЕРИСТИКИ:</h2>
			<ul style="list-style-type: none;">
 
				<li><b>⭐ Розміри табурета: </b></li>
				<li style="margin-left: 4em;">	висота: 49 см,</li>
				<li style="margin-left: 4em;">	ширина: 61 см, </li>
				<li style="margin-left: 4em;">	глибина: 27см. </li>
				<li><b>⭐ Розміри після складання:</b> 27см х 58см.</li>
				<li><b>⭐ Розміри поролону:</b> 16 см x 41 см.</li>
				<li><b>⭐ Матеріал:</b> сталь, піна EVA.</li>
				<li><b>⭐ Максимальне навантаження:</b> 150 кг.</li>

			</ul><br>
			<!-- <div style="margin: 0 30px; font-weight: 700;">Комплектація:</div>
			<ul>
				<li>Алкотестер - 1 шт</li>
				<li>Змінні мундштуки - 10 шт</li>
				<li>Гарантійний талон</li>
				<li>Інструкція (англійська, російська).</li>
			</ul> -->


			<!-- </section>
		<section class="offer_section">
			<h2 class="title">Сертифікат якості</h2>
			<img class="img-text" src="img/sert.jpg">
		</section> -->

			<section class="reviews4_section">
				<h2 class="title">Відгуки покупців</h2>
				<div class="reviews_stats_block">
					<p><b>98%</b> покупців рекомендують цей товар</p>
					<div class="line"></div>
				</div>
				<!-- <div class="google-reviews">
				<div class="g-left">
					<img src="img/logo-g.png">
					<div class="google-info">
						4.6 <img style="width: 100px;margin-top: -4px;" src="img/stars-half.png"> <span>252 відгуків</span>
					</div>
				</div>
				<a href="https://www.google.com/maps/place/MEDICA%2B/@50.4895993,30.4902228,17z/data=!4m18!1m9!3m8!1s0x40d4cd82896cb117:0xd239e33290572497!2sMEDICA%2B!8m2!3d50.4895993!4d30.4927977!9m1!1b1!16s%2Fg%2F11h4tnkg33!3m7!1s0x40d4cd82896cb117:0xd239e33290572497!8m2!3d50.4895993!4d30.4927977!9m1!1b1!16s%2Fg%2F11h4tnkg33"
					target="_blank" class="google-link">Дивитись усі</a>

			</div> -->
				<div class="reviews_list4 owl-carousel">
					<div class="review_item">
						<div class="text_block">
							<div class="author_info">
								<img class="author-photo" src="img/ava1.jpg">
								<div class="text">
									<div class="a-name">Григорій</div>
									<div class="stars"></div>
									<div class="a-date">2 години тому</div>
								</div>

							</div>
							<p>"
							М'яко для колін, є за що триматися коли піднімаєшся з колін. зручно те, що лавку можна скласти, і вона займає мало місця..

							"
							</p>
						</div>
					</div>
					<div class="review_item">
						<div class="text_block">
							<div class="author_info">
								<img class="author-photo" src="images/olga.jpg">
								<div class="text">
									<div class="a-name">Ольга</div>
									<div class="stars"></div>
									<div class="a-date">1 день тому</div>
								</div>

							</div>
							<p>
							Мамі дуже зручно з нею в огороді. Їй сподобалось. Рекомендую

							</p>
						</div>
					</div>
					<div class="review_item">
						<div class="text_block">
							<div class="author_info">
								<img class="author-photo" src="images/nasty.jpg">
								<div class="text">
									<div class="a-name">Анастасія</div>
									<div class="stars"></div>
									<div class="a-date">тиждень тому</div>
								</div>

							</div>
							<p>
							Зроблений якісно, користуюсь ним в саду, перестала боліти спина. 

							</p>
						</div>
					</div>
				</div>
			</section>

			<section class="order_steps_section">
				<h2 class="title">Як замовити?</h2>
				<div class="order_steps_list1 clearfix">
					<div class="step_item">
						<h4>Заявка</h4>
						<p>Залишаєте заявку на нашому сайті (заповнити форму внизу сайта)</p>
					</div>
					<div class="step_item">
						<h4>Дзвінок</h4>
						<p>Наш менеджер уточнює деталі замовлення</p>
					</div>
				</div>

			</section>
			<section class="offer_section offer3">
				<div class="title_block">
					<h3 class="main_title">розкладний садовий табурет 2 в 1</h3>
				</div>
				<div class="image_block">
					<img class="offer_image" src="images/main1.png" alt="розкладний садовий табурет 2 в 1">
					<!-- <div class="discount_block">
					<div class="value">-
						%
					</div>
					<div class="text">знижка</div>
				</div> -->
				</div>
				<div class="benefits_list clearfix">
					<div class="benefit_item">Офіційна гарантія</div>
					<div class="benefit_item">Швидка доставка</div>
					<div class="benefit_item">Оплата при отриманні</div>
				</div>
				<div class="price_block clearfix">
					<div class="price_item old">
						<div class="text">Звичайна ціна:</div>
						<div class="value">
						2200грн
						</div>
					</div>
					<div class="price_item new">
						<div class="text">Ціна зі знижкою:</div>
						<div class="value" style="color: red;">
						1699грн
						</div>
					</div>
				</div>
				<div class="timer">
					<p>Пропозиція діє:</p>
					<div class="timer_container">
						<div class="timer_block">
							<div class="count hours"></div>
							<div class="text">годин</div>
						</div>
						<div class="timer_block">
							<div class="count minutes"></div>
							<div class="text">хвилин</div>
						</div>
						<div class="timer_block">
							<div class="count seconds"></div>
							<div class="text">секунд</div>
						</div>
					</div>
				</div>
				<br>



				<div id="success-alert" class="success-alert" style="display: none;">
					Ваше замовлення успішно відправлено!
				</div>
				<form id="order_form" class="order_form" action="order.php" method="POST" name="order-form">
					
					<input class="field" type="text" name="name" placeholder="Ваше ім'я" required="">
					<input class="field" type="tel" name="phone" minlength="10" maxlength="15" placeholder="Ваш телефон"
						required="">

					<div style="margin: 0 auto 15px;font-size: 15px; width: 380px; color: #000;">
						<input id="data1" class="custom-checkbox" type="checkbox" checked="" required="">

						<label for="data1">Я погоджуюся з політикою конфіденційності</label>
					</div>

					<input type="hidden" name="product" id="hiddenProduct"  value="САДОВИЙ ТАБУРЕТ 2 В 1" hidden="hidden" />
					<input type="hidden" name="product_id" id="product_id" value="id_2952" hidden="hidden" />
					<input type="hidden" name="product_price" id="product_price"  value="1699" hidden="hidden" />
					<input type="hidden" name="fbp" id="fbp"  value="817822397049829" hidden="fbp" />
					<input type="hidden" name="count" value="1"/>
					<input type="hidden" name="servername" value="/taburet">
					<input type="hidden" name="type" value="offer">
					<img src="img/loading.gif" alt="" class="img-loading">
					<button class="button">Замовити зі знижкою</button>
					<div class="products_count">Залишилось : <span>9 шт</span></div>
				</form>
			</section>
			
			<!-- footer -->

			<footer class="footer_section">
				<div style="font-size:13px;text-align: center;">
					<a style="color:inherit;" href="politics.html">Політика конфеденційності</a>
					<br>
					<a style="color:inherit;" href="agreement.html">Угода користувача</a>
					<br>
					<a style="color:inherit;" href="garantiya.html">Умови гарантії та повернення</a>
					<br>
					Всі права захищені &#169; 2005-2023

				</div>
			</footer>
			<div class="yvedw">
				<div class="yved yvedf1">Разом з Вами на сайті 5 відвідувачів</div>
				<div class="yved yvedf2">Зубик Іван, м.Одеса, залишив заявку на зворотній дзвінок</div>
				<div class="yved yvedf1">Павло Дідик, м.Київ, оформив замовлення</div>
				<div class="yved yvedf2">Олег Кравець, м.Львів, залишив заявку на зворотній дзвінок</div>
				<div class="yved yvedf1">Разом з Вами на сайті 9 відвідувачів</div>
				<div class="yved yvedf1">Разом з Вами на сайті 12 відвідувачів</div>
				<div class="yved yvedf1">Музика Ігор, м.Івано-Франківськ, оформив замовлення</div>
				<div class="yved yvedf1">Разом з Вами на сайті 9 відвідувачів</div>
			</div>

			<style>
				.yved {
					position: fixed;
					top: 10px;
					left: 50%;
					transform: translateX(-50%);
					width: 300px;
					text-align: center;
					color: white;
					padding: 10px;
					font-size: 15px;
					border-radius: 10px;
					display: none;
					z-index: 9999;
				}

				.yvedf1 {
					background-color: #363636;
				}

				.yvedf2 {
					background-color: #CD5555;
				}

				.img-loading {
					display: none;
					width: 50px;
					margin: 0 auto;
				}
			</style>

			<script src="js/jquery.min.js"></script>
			<script src="js/previewYouTube.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/scripts.js?1.0"></script>
			<script type="text/javascript" src="js/maskedinput.js"></script>
			<script>
				$(document).ready(function () {
					var i = 0;

					function yved() {
						i = 1;
						$('.yved:nth-child(' + i + ')').fadeIn(500).delay(7000).fadeOut(500);
					}
					setTimeout(function () {
						setInterval(
							function () {
								i = i + 1;
								if (i > 7) i = 1;
								$('.yved:nth-child(' + i + ')').fadeIn(500).delay(7000).fadeOut(500);
							}, 30000);
						yved();
					}, 10000);
				});
			</script>
			<script>
				$(".order_form").submit(function () {
					$(this).children(".button").hide();
					$('.img-loading').css('display', 'block');
				});
			</script>

			<!-- /scripts -->
		</section>
	</div>
</body>

</html>