<!DOCTYPE HTML>
<html>
	<head>
		<title>News of the Day </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body>

		<!-- Все что находится на сайте -->
			<div id="wrapper">

				<!-- Начало головы -->
					<header id="header">
						<h1><a href="/">News of the Day</a></h1>
						<nav class="links">
							<ul>
								<li><a href="#">Мода</a></li>
								<li><a href="#">Коллекции</a></li>
								<li><a href="#">Красота</a></li>
								<li><a href="#">Украшения</a></li>
								<li><a href="#">Lifestyle</a></li>
							</ul>
						</nav>
						<nav class="main">
							<!-- Поисковик -->
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>


									<form id="search" method="get" action="/">
										<input type="text" name="search" placeholder="Поиск" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>
					<!-- Конец головы -->
				<!-- Меню -->
					<section id="menu">
						<!-- Авторизация -->
							<section>
								<ul class="actions vertical">

                                    @if (Auth::check())
                                        <li><a href="/logout" class="button big fit">Выйти</a></li>
                                    @else
                                        <li><a href="/sign" class="button big fit">Войти</a></li>
                                    @endif


									<li><a href="/reg" class="button big fit">Регистрация</a></li>
								</ul>
							</section>


					</section>

				<!-- Лента новостей-->
					@yield('content')

				<!-- Боковая панель  -->
					<section id="sidebar">

						<!-- вступление  -->
							<section id="intro">
								<header>
									<h2>News of the Day</h2>
									<p>Читайте свежие новости каждый день</p>
								</header>
							</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="#">Маргарет Чжан — новый главный редактор Vogue China</a></h3>
												<time class="published">25 февраля 2021 г.</time>
											</header>
											<a href="#" class="image"><img src="https://media.vogue.ru/photos/6036382a0cbefb8c33fcfda1/2:3/w_1920%2cc_limit/Screen%20Shot%202021-02-10%20at%209.49.26%20AM.png" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">Шотландская клетка, объемные вечерние платья и другие яркие тренды Недели моды в Лондоне</a></h3>
												<time class="published">25 февраля 2021 г.</time>
											</header>
											<a href="#" class="image"><img src="https://media.vogue.ru/photos/60378791fd3bbc990a4493a5/2:3/w_1920%2cc_limit/w1266%20(7).jpeg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">Цветные пиджаки: 7 роскошных моделей, которые никогда не выйдут из моды</a></h3>
												<time class="published">25 февраля 2021 г.</time>
											</header>
											<a href="#" class="image"><img src="https://media.vogue.ru/photos/603772e4fd3bbc990a449363/2:3/w_1920%2cc_limit/IMG_8306.JPG" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">Накидка с пайетками, гигантская Cleo и еще три предмета из новой коллекции Prada, за которыми выстроится очередь</a></h3>
												<time class="published">25 февраля 2021 г.</time>
											</header>
											<a href="#" class="image"><img src="https://media.vogue.ru/photos/6037ae0ffd3bbc990a4493fc/2:3/w_1920%2cc_limit/32_Prada%20Donna%20FW21.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">5 самых интересных начинающих дизайнеров из США сезона осень-зима 2021</a></h3>
												<time class="published">25 февраля 2021 г.</time>
											</header>
											<a href="#" class="image"><img src="https://media.vogue.ru/photos/6037561f852d468530687fcc/2:3/w_1920%2cc_limit/00007-Maisie-Wilen-Fall-21-credit-Zev-Schmidtz.jpg" alt="" /></a>
										</article>
									</li>
								</ul>
							</section>

						<!-- О нас -->
							<section class="blurb">
								<h2>О нас</h2>
								<p>Мы начинающий новостной сайт. Каждый день мы выкладываем только свежие и проверенный новости нашими источниками.</p>
								<ul class="actions">
									<li><a href="#" class="button">Узнать больше</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>

					</section>

			</div>
			<script src="js/jquery.min.js"></script>
			<script src="/js/skel.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>
	</body>
</html>
