<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">  
    </head>
    <body>
    <div class="container">
        <table class="table">
            <thead  class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th >Price Buy</th>
                    <th >Price Sale</th>
                </tr>
            </thead>
            <tbody>   
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->productsId}}</td>
                        <td>{{ $order->description }}</td>
                        <td>{{$order->pivot->o_quantity}}</td>
                        <td>{{$order->pivot->o_priceBegin}}</td>
                        <td>{{$order->pivot->o_priceEnd}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>
