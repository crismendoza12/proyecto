{% extends "layout.php" %}

{% block subtitle %}
	Pagina principal
{% endblock %}

{% block content %}
	<p>Esta es la pagina principal de muestra</p>
	<a href="index.php/?page=shoppingcart">Carrito de compras</a>
	<button type="button" class="btn" data-toggle="modal" data-target="#login">Entrar</button>
{% endblock %}