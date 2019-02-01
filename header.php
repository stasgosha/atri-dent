<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - Atri-Dent</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="container">
					<div class="header-inner">
						<div class="header-block">
							<a href="index.php" class="logo">
								<img src="img/logo.png" class="logo-image" alt=""></img>
								<span class="logo-text">
									<span class="name">Атри-Дент</span>
									<span class="description">Стоматологическая клиника</span>
								</span>
							</a>
						</div>
						<div class="header-block d-none d-xl-block">
							<ul class="info-list">
								<li>
									<div class="item-icon">
										<i class="icon-med"></i>
									</div>
									<div class="item-content">Мед. лицензия <br>№ ЛО-77-01-012776</div>
								</li>
								<li>
									<div class="item-icon">
										<i class="icon-location"></i>
									</div>
									<div class="item-content">Москва, м. Выхино, <br>Хлобыстова 3, кор. 1</div>
								</li>
							</ul>
						</div>
						<div class="header-block d-none d-md-block">
							<div class="header-phone-component">
								<div class="left">
									<p class="cta-text">Болят зубы? Звоните сейчас!</p>
									<a href="tel:84957097810" class="phone-link">
										<span class="link-icon">
											<i class="icon-phone"></i>
										</span>
										<span class="link-text">8 (495) 709-78-10</span>
									</a>
								</div>
								<div class="right">
									<p class="color-light">с 10 до 21, ежедневно</p>
									<button class="btn btn-light btn-rounded btn-small">Заказать звонок</button>
								</div>
							</div>
						</div>
						<div class="header-block d-md-none">
							<div class="menu-opener">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</div>
					</div>
					<div class="header-inner">
						<div class="header-block d-md-none mobile-contacts">
							<div class="item">
								<a href="tel:84957097810" class="phone-link">
									<span class="link-icon">
										<i class="icon-phone"></i>
									</span>
									<span class="link-text">8 (495) 709-78-10</span>
								</a>
							</div>
							<div class="item d-none d-sm-block">
								<button class="btn btn-light btn-rounded btn-small">Заказать звонок</button>
							</div>
						</div>
					</div>
				</div>
				<div class="top-nav-wrapper default-gradient d-none d-md-block">
					<div class="container">
						<ul class="top-nav">
							<li><a href="#">О клинике</a></li>
							<li><a href="#">Наши услуги</a></li>
							<li><a href="#">Цены</a></li>
							<li><a href="#">Акции</a></li>
							<li><a href="#">Пациентам</a></li>
							<li><a href="#">Команда</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</div>
				</div>
			</header>