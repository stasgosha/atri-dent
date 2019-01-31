		</div>
		<footer class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<ul class="footer-nav">
								<li>
									<a href="#">Наши услуги</a>
									<ul class="sub-menu">
										<li><a href="#">Ортодонтия</a></li>
										<li><a href="#">Терапия</a></li>
										<li><a href="#">Детская стоматология</a></li>
										<li><a href="#">Имплантология</a></li>
										<li><a href="#">Ортопедия</a></li>
										<li><a href="#">Хирургия</a></li>
										<li><a href="#">Профилактика и гигиена</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="col-sm-6 col-lg-3">
							<ul class="footer-nav">
								<li>
									<a href="#">Пациентам</a>
									<ul class="sub-menu">
										<li><a href="#">Вопрос-ответ</a></li>
										<li><a href="#">До и после процедур</a></li>
										<li><a href="#">Корпоративным клиентам</a></li>
										<li><a href="#">Информация</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="col-sm-6 col-lg-3">
							<ul class="footer-nav">
								<li><a href="#">Акции</a></li>
								<li><a href="#">цены</a></li>
								<li><a href="#">команда</a></li>
								<li><a href="#">контакты</a></li>
								<li><a href="#">о клинике</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="footer-contacts">
								<a href="tel:84957097810" class="phone-link">8 (495) 709-78-10</a>
								<p>С 10:00 до 21:00 (без выходных) <br><a href="mailto:mail@atri-dent.ru">mail@atri-dent.ru</a> <br>Москва, м. Выхино, Хлобыстова 3, кор. 1</p>
								<p>Мы в соц. сетях:</p>
								<ul class="socials-list">
									<li>
										<a href="#" target="_blank">
											<i class="icon-vk"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-youtube"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-odniklassniki"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-instagram"></i>
										</a>
									</li>
								</ul>
								<p>© 2012-<?= date('Y') ?> atri-dent.ru <br>Все права защищены.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom default-gradient">
				<div class="container">
					<div class="footer-bottom-inner">
						<div class="footer-block">
							<div class="footer-features-block">
								<div class="block-icon">
									<i class="icon-coins"></i>
								</div>
								<div class="block-text">
									<p>Цены на сайте не являются публичной офертой. Определить точную стоимость лечения возможно только на приеме у врача.</p>
								</div>
							</div>
						</div>
						<div class="footer-block">
							<div class="footer-features-block">
								<div class="block-icon">
									<i class="icon-doctor"></i>
								</div>
								<div class="block-text">
									<p>Медицинские услуги имеют противопоказания, необходима консультация специалиста.</p>
								</div>
							</div>
						</div>
						<div class="footer-block">
							<a href="//webolution.ru" class="webolution" target="_blank">
								<img src="img/webolution.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<nav id="menu" class="panel">
		<div class="panel-inner">
			<ul class="panel-nav">
				<li><a href="#">О клинике</a></li>
				<li><a href="#">Наши услуги</a></li>
				<li><a href="#">Цены</a></li>
				<li><a href="#">Акции</a></li>
				<li><a href="#">Пациентам</a></li>
				<li><a href="#">Команда</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
			<div class="panel-content"></div>
		</div>
	</nav>
	<div class="modal fade narrow" tabindex="-1" role="dialog" id="modal-appointment">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="icon icon-close"></i>
					</div>
					<p class="modal-caption">Запись на прием</p>
					<form action="#" class="modal-form form">
						<div class="form-row">
							<div class="form-field">
								<input type="text" class="input-field gray" placeholder="Ваше имя">
							</div>
						</div>
						<div class="form-row">
							<div class="form-field">
								<input type="tel" class="input-field gray" placeholder="Телефон">
							</div>
						</div>
						<div class="form-row">
							<div class="captcha flex-center">
								<img src="img/tmp/captcha.png" alt="">
							</div>
						</div>
						<div class="form-row">
							<button type="submit" class="btn btn-fullwidth btn-rounded fullwidth">Записаться</button>
						</div>
						<div class="form-row">
							<p class="note">Нажимая на кнопку «Записаться, вы даете <br>согласие на обработку персональных данных</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade narrow" tabindex="-1" role="dialog" id="modal-success">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="icon icon-close"></i>
					</div>
					<p class="modal-caption">Спасибо!</p>
					<div class="modal-success">
						<div class="image">
							<img src="img/sended.png" alt="">
						</div>
						<p>Ваша заявка успешно отправленна. <br>Мы свяжемся с вами в <br>ближайшее время!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade narrow" tabindex="-1" role="dialog" id="modal-order-call">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="icon icon-close"></i>
					</div>
					<p class="modal-caption">Заказать звонок</p>
					<form action="#" class="modal-form form">
						<div class="form-row">
							<div class="form-field">
								<input type="text" class="input-field gray" placeholder="Ваше имя">
							</div>
						</div>
						<div class="form-row">
							<div class="form-field">
								<input type="tel" class="input-field gray" placeholder="Телефон">
							</div>
						</div>
						<div class="form-row">
							<div class="captcha flex-center">
								<img src="img/tmp/captcha.png" alt="">
							</div>
						</div>
						<div class="form-row">
							<button type="submit" class="btn btn-fullwidth btn-rounded fullwidth">Жду звонка</button>
						</div>
						<div class="form-row">
							<p class="note">Нажимая на кнопку «Жду звонка», вы даете <br>согласие на обработку персональных данных</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
	<script defer src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script defer src="js/bootstrap.bundle.min.js"></script>
	<script defer src="js/bigSlide.min.js"></script>
	<script defer src="js/scripts.js"></script>
	<?php // wp_footer(); ?>
</body>
</html>