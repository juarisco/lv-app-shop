<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo pedido</title>
</head>
<body>
<p>Se ha realizado un nuevo pedido!</p>
<p>Estos son los datos del cliente que realizó el pedido: </p>
<ul>
    <li><strong>Nombre: {{ $user->name }}</strong></li>
    <li><strong>E-mail: {{ $user->email }}</strong></li>
    <li><strong>Fecha del pedido: {{ $cart->order_date }}</strong></li>
</ul>
<p>
    <a href="{{ url("admin/orders/{$cart->id}") }}">Haz clic aquí</a>
    para ver más información sobre este pedido.
</p>
</body>
</html>