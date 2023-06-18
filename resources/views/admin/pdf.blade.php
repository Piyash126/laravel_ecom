<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Order Details</h2>

    <h4>{{$order->name}}</h4>
    <h4>{{$order->email}}</h4>
    <h4>{{$order->phone}}</h4>
    <h4>{{$order->address}}</h4>
    <h4>{{$order->product_title}}</h4>
    <h4>{{$order->quantity}}</h4>
    <h4>{{$order->price}}</h4>
    <h4>{{$order->Product_id}}</h4>
    <h4>{{$order->user_id}}</h4>
    <h4>{{$order->payment_status}}</h4>
    <h4>{{$order->delivery_status}}</h4>

    <br>

    <img src="product/{{$order->image}}" alt="" height="250px" width="400px">
</body>
</html>