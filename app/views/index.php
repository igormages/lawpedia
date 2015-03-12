
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>LAWPEDIA</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/assets/css/animate.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/wysiwyg.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/jasny-bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css" />
		<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/assets/css/app.css" />
	</head>
	<body>
		
		<button type="button" class="btn-burger" data-toggle="offcanvas" data-target="#navMenu" data-canvas="body">
			<i class="fa fa-bars"></i>
		</button>
		<nav id="navMenu" class="navmenu navmenu-default navmenu-fixed-right offcanvas" role="navigation">
			<ul class="nav navmenu-nav menu_automate">
			</ul>
		</nav>

		<div class="templates">
			<div class="template editer">
				<header>
					<div class="container">
						<div class="row">
							<div class="col-xs-4">
								<a href="/"><img src="/assets/img/logo.png" class="nav-logo" alt="Logo"></a>
							</div>
							<form action="#" class="search-submit">
								<div class="col-xs-offset-2 col-lg-offset-4 col-xs-6 col-lg-4">
										<div class="input-group">
											<span class="input-group-btn">
												<label for="search3" class="btn btn-default search-btn-nav"><i class="fa fa-search"></i></label>
											</span>
											<input type="search" id="search3" class="form-control search-input-nav search" placeholder="Rechercher...">
										</div>
								</div>
							</form>
						</div>
					</div>
				</header>
				<div class="container" style="background: #fff;">
					<form class="row">
						<h1>Merci de votre participation à LAWPEDIA!</h1>
						<div class="form-group">
							<label for="email">Votre email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="article">Article</label>
							<textarea class="form-control editor-wy data_put"></textarea>
						</div>
					</form>
				</div>
				<footer class="footer">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="ok_article"><p><i class="fa fa-share-square-o"></i> modifier</p></a>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<div class="template adder">
				<header>
					<div class="container">
						<div class="row">
							<div class="col-xs-4">
								<a href="/"><img src="/assets/img/logo.png" class="nav-logo" alt="Logo"></a>
							</div>
							<form action="#" class="search-submit">
								<div class="col-xs-offset-2 col-lg-offset-4 col-xs-6 col-lg-4">
										<div class="input-group">
											<span class="input-group-btn">
												<label for="search3" class="btn btn-default search-btn-nav"><i class="fa fa-search"></i></label>
											</span>
											<input type="search" id="search3" class="form-control search-input-nav search" placeholder="Rechercher...">
										</div>
								</div>
							</form>
						</div>
					</div>
				</header>
				<div class="container" style="background: #fff;">
					<form class="row">
						<h1>Vous aussi participez à LAWPEDIA!</h1><br />
						<div class="form-group">
							<label for="email">Votre email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="article-name">Intitulé</label>
							<input type="text" class="form-control" id="article-name" placeholder="Nom">
						</div>
						<div class="form-group">
							<label for="article">Article</label>
							<textarea class="form-control adder-wy"></textarea>
						</div>
					</form>
				</div>
				<footer class="footer">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="ok_article"><p><i class="fa fa-share-square-o"></i> envoyer</p></a>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<div class="template search">
				<header>
					<div class="container">
						<div class="row">
							<div class="col-xs-4">
								<a href="/"><img src="/assets/img/logo.png" class="nav-logo" alt="Logo"></a>
							</div>
							<form action="#" class="search-submit">
								<div class="col-xs-offset-2 col-lg-offset-4 col-xs-6 col-lg-4">
										<div class="input-group">
											<span class="input-group-btn">
												<label for="search3" class="btn btn-default search-btn-nav"><i class="fa fa-search"></i></label>
											</span>
											<input type="search" id="search3" class="form-control search-input-nav search" placeholder="Rechercher...">
										</div>
								</div>
							</form>
						</div>
					</div>
				</header>
				<div class="container">
					<div class="resultats">
						<div class="loi">
							<div class="col-xs-12 title_loi">
								<a class="link"><h3 class="title"></h3></a>
							</div>
							<div class="col-xs-12 info_loi">
								<p class="desc"></p>
								<p><strong class="fil"></strong></p>
							</div>
						</div>
					</div>
				</div>
				<footer class="footer">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="add_article"><p><i class="fa fa-plus-circle"></i> proposer un article</p></a>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<div class="template article">
				<header>
					<div class="container">
						<div class="row">
							<div class="col-xs-4">
								<a href="/"><img src="/assets/img/logo.png" class="nav-logo" alt="Logo"></a>
							</div>
							<form action="#" class="search-submit">
								<div class="col-xs-offset-2 col-lg-offset-4 col-xs-6 col-lg-4">
										<div class="input-group">
											<span class="input-group-btn">
												<label for="search3" class="btn btn-default search-btn-nav"><i class="fa fa-search"></i></label>
											</span>
											<input type="search" id="search3" class="form-control search-input-nav search" placeholder="Rechercher...">
										</div>
								</div>
							</form>
						</div>
					</div>
				</header>
				<div class="container">
					<div class="row">
						<div class="col-xs-offset-1 col-xs-10 data">
						</div>
					</div>
				</div>
				<footer class="footer">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="edit_link"><p><i class="fa fa-pencil-square-o"></i> proposer une modification</p></a>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<div class="template index">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 contain-logo">
							<a href="/"><img src="/assets/img/logo.png" alt="" class="logo"/></a>
						</div>
					</div>
					<div class="row">
						<form action="#" class="search-submit">
							<div class="col-xs-offset-1 col-xs-10">
								<div class="input-group">
										<span class="input-group-btn">
											<label for="search" class="btn btn-default search-btn"><i class="fa fa-search"></i></label>
										</span>
										<input type="search" id="search" class="form-control search-input" placeholder="Rechercher...">
								</div>
							</div>
						</form>
					</div>
					<div class="row">
						<div class="col-xs-offset-1 col-xs-10 suggestions">
							<h4 class="suggest suggest-title"><a class="link"><span class="title"></span></a></h4>
						</div>
					</div>
				</div>
				<footer class="footer">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="add_article"><p><i class="fa fa-plus-circle"></i> proposer un article</p></a>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<div class="modal" id="chargement">
			<div class="modal-dialog spinner">
				<div class="backdrop"></div>
				<h1 class="tada animated loading_center"><i class="fa fa-check"></i></h1>
			</div>
		</div>
			
		<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/transparency.js"></script>
		<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/jasny-bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/wysiwyg.js"></script>
		<script type="text/javascript" src="/assets/js/config.js"></script>
		<script type="text/javascript" src="/assets/js/api.js"></script>
		<script type="text/javascript" src="/assets/js/load.js"></script>
		<script type="text/javascript" src="/assets/js/events.js"></script>
		<script type="text/javascript" src="/assets/js/app.js"></script>
	</body>
</html>