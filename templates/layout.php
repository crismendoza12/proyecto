<!DOCTYPE html>
<html>
<head>
	<title>{% block title %}Store{% endblock %}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset}}css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset}}css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset}}css/style.css">
	{% block meta %}{% endblock %}
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
 		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#">WebSiteName</a>
    		</div>
    		<div>
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="#">Home</a></li>
        			<li><a href="#">Page 1</a></li>
        			<li><a href="#">Page 2</a></li> 
        			<li><a href="#">Page 3</a></li> 
      			</ul>
    		</div>
  		</div>
	</nav>
	<h1>Bienvenido a Twig!</h1>
	<h2>{% block subtitle %}{% endblock %}</h2>
	<div class="container">{% block content %}{% endblock %}</div>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4>Iniciar sesión</h4>
				</div>
				<div class="modal-body">
					<form method="post" action="{{asset}}functions/login.php">
						<div class="form-grup">
							<label for="email">Correo Electrónico</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>
						</div>
						<div class="form-grup">
							<label for="password">Contraseña</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
						</div>
						<button type="submit" class="btn btn-default">Entrar</button>
					</form>
				</div>
				<div class="modal-footer">
					{#<button type="button" class="btn btn-primary" data-dismiss="modal">Entar</button>#}
				</div>
			</div>
		</div>
	</div>
	<script src="{{asset}}js/jquery-2.1.3.min.js"></script>
	<script src="{{asset}}js/bootstrap.min.js"></script>
	{% block scripts %}{% endblock %}
</body>
</html>