<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Portail invité</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Connexion à mon application">
	<link rel="stylesheet" type="text/css" href="//10.44.55.167/Portailinvite/assets/css/bootstrap.min.css" />
	<!-- ci-dessous notre fichier CSS -->
	<link rel="stylesheet" type="text/css" href="https://10.44.55.167/Portailinvite/assets/css/app.css" />
	<link rel="stylesheet" type="text/css" href="https://10.44.55.167/Portailinvite/assets/css/fonts.css" />
	<script type="text/javascript" src="//10.44.55.167/Portailinvite/assets/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//10.44.55.167/Portailinvite/assets/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="main2">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-sm-offset-1">
							<h1>Bienvenue sur la gestion du Portail invité</h1>
							<h2>Veuillez rentrer vos identifiants en tant qu'administrateur</h2>
							<?php echo form_open(''); ?>
							<div name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
								<div class="form-group">
								<div class="col-md-8"><input name="login" placeholder="Idenfiant" class="form-control" type="text" id="login"/></div>
								</div> 
								<div class="form-group">
								<div class="col-md-8"><input name="password" placeholder="Mot de passe" class="form-control" type="password" id="password"/></div>
								</div> 
								<div class="form-group">
								<div class="col-md-offset-0 col-md-8"><input  class="btn btn-success btn btn-success" type="submit" value="Connexion"/></div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
