<!DOCTYPE html>
<html>
<head>
	<title>{% block title %}Store{% endblock %}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
</body>
</html>