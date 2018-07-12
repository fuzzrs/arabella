<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Arabella Couros do Sul</title>
	
	<!-- Google Material Design -->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
	<!-- <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css"> -->
	<!-- <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> -->
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

	<link rel="stylesheet" href="css/style.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
</head>
<body>
	<header class="header">
		<nav class="topbar">
			<div class="wrapper">
				<div class="flex-align">
					<div class="search">
						<input class="search-input" type="text" placeholder="O que você procura?"><button class="search-button"><img src="images/icons/search.svg" height="14px" alt=""></button>
					</div>
					<div class="icon-navigation">
						<a href="" class="topbar-link">
							<!-- <img src="images/icons/help.svg" alt="contém um balão de fala com um ponto de interrogação dentro"> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3c5.514 0 10 3.592 10 8.007 0 4.917-5.145 7.961-9.91 7.961-1.937 0-3.383-.397-4.394-.644-1 .613-1.595 1.037-4.272 1.82.535-1.373.723-2.748.602-4.265-.838-1-2.025-2.4-2.025-4.872-.001-4.415 4.485-8.007 9.999-8.007zm0-2c-6.338 0-12 4.226-12 10.007 0 2.05.738 4.063 2.047 5.625.055 1.83-1.023 4.456-1.993 6.368 2.602-.47 6.301-1.508 7.978-2.536 1.418.345 2.775.503 4.059.503 7.084 0 11.91-4.837 11.91-9.961-.001-5.811-5.702-10.006-12.001-10.006zm1.024 13.975c0 .566-.458 1.025-1.024 1.025-.565 0-1.024-.459-1.024-1.025 0-.565.459-1.024 1.024-1.024.566 0 1.024.459 1.024 1.024zm1.141-8.192c-.498-.505-1.241-.783-2.09-.783-1.786 0-2.941 1.271-2.941 3.237h1.647c0-1.217.68-1.649 1.261-1.649.519 0 1.07.345 1.117 1.004.052.694-.319 1.046-.788 1.493-1.157 1.1-1.179 1.633-1.173 2.842h1.643c-.01-.544.025-.986.766-1.785.555-.598 1.245-1.342 1.259-2.477.008-.758-.233-1.409-.701-1.882z"/></svg>
						</a>
						<a href="" class="topbar-link">

							<!-- <img src="images/icons/user.svg" alt=""> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"/></svg>
							<span>Minha conta</span>
						</a>
						<a href="" class="topbar-link">
							<!-- <img src="images/icons/favorite.svg" alt=""> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.28 3c3.236.001 4.973 3.491 5.72 5.031.75-1.547 2.469-5.021 5.726-5.021 2.058 0 4.274 1.309 4.274 4.182 0 3.442-4.744 7.851-10 13-5.258-5.151-10-9.559-10-13 0-2.676 1.965-4.193 4.28-4.192zm.001-2c-3.183 0-6.281 2.187-6.281 6.192 0 4.661 5.57 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-4.011-3.097-6.182-6.274-6.182-2.204 0-4.446 1.042-5.726 3.238-1.285-2.206-3.522-3.248-5.719-3.248z"/></svg>
						</a>
						<a href="" class="topbar-link">
							<!-- <img src="images/icons/shopping-bag.svg" alt=""> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.665 9.068l-3.665-1.66v14l3.665 2.592 14.335-2.155v-14.845l-14.335 2.068zm-1.665 1.441l1 .453v10.118l-1-.707v-9.864zm14 9.615l-11 1.653v-10.881l11-1.587v10.815zm-2-15.833l-.001 1.749c0 .246-.18.455-.423.492-.303.045-.576-.19-.576-.495v-1.746c.001-.691-.231-1.304-.653-1.726-.368-.37-.847-.565-1.384-.565-1.547 0-2.96 1.558-2.963 3.268v1.681c0 .247-.181.457-.425.494-.302.046-.575-.189-.575-.494l.001-1.683c.004-2.261 1.866-4.266 3.962-4.266 1.717 0 3.039 1.387 3.037 3.291zm-9.999 2.209v-2.235c.004-2.26 1.866-4.265 3.962-4.265.492 0 .944.125 1.35.332-.423.17-.822.4-1.188.683l-.162-.015c-1.547 0-2.961 1.558-2.963 3.268v2.232c0 .248-.182.458-.427.494-.3.045-.572-.187-.572-.494z"/></svg>
						</a>
					</div>
				</div>
			</div>
		</nav>
		<nav class="main-nav">
			<div class="wrapper">
				<div class="flex-align">
					<a href="#" class="logo"><img src="images/png/logo.png" height="48" alt="ícone de uma arara e do lado direito está escrito Arabella, leather made in Gramado"></a>
					<ul class="main-nav-list">
						<a href="index.php" class="main-nav-link">Início</a>
						<a href="home.html" class="main-nav-link">A Empresa</a>
						<a href="#" class="main-nav-link">Blog</a>
						<a href="lista-produtos.php" class="main-nav-link">Loja Virtual</a>
						<a href="#" class="main-nav-link ofertas">Ofertas</a>
					</ul>
				</div>
			</div>
		</nav>
	</header>
		<div class="hero-section">

		</div>
		<div class="customer-benefits">
			<div class="wrapper">
				<div class="flex-align">
					<div class=benefit-item><img src="images/icons/shipment.svg" alt="">Frete grátis</div>
					<div class=benefit-item><img src="images/icons/banknote.svg" alt="">12x sem juros</div>
					<div class=benefit-item><img src="images/icons/certificate.svg" alt="">Garantia de 5 anos</div>
				</div>
			</div>
		</div>